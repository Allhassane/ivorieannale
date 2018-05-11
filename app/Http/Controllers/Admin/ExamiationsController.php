<?php

namespace App\Http\Controllers\Admin;

use App\Examination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\AlertsMessages;

class ExamiationsController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{

    use AlertsMessages;

    public function index(Request $request)
    {

        // GET THE SLUG, ex. 'posts', 'pages', etc.
        $slug = $this->getSlug($request);

        // GET THE DataType based on the slug
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('browse', app($dataType->model_name));

        $getter = $dataType->server_side ? 'paginate' : 'get';

        $search = (object) ['value' => $request->get('s'), 'key' => $request->get('key'), 'filter' => $request->get('filter')];
        $searchable = $dataType->server_side ? array_keys(SchemaManager::describeTable(app($dataType->model_name)->getTable())->toArray()) : '';
        $orderBy = $request->get('order_by');
        $sortOrder = $request->get('sort_order', null);

        // Next Get or Paginate the actual content from the MODEL that corresponds to the slug DataType
        if (strlen($dataType->model_name) != 0) {
            $relationships = $this->getRelationships($dataType);

            $model = app($dataType->model_name);
            $query = $model::select('*')->with($relationships);

            // If a column has a relationship associated with it, we do not want to show that field
            $this->removeRelationshipField($dataType, 'browse');

            if ($search->value && $search->key && $search->filter) {
                $search_filter = ($search->filter == 'equals') ? '=' : 'LIKE';
                $search_value = ($search->filter == 'equals') ? $search->value : '%'.$search->value.'%';
                $query->where($search->key, $search_filter, $search_value);
            }

            if ($orderBy && in_array($orderBy, $dataType->fields())) {
                $querySortOrder = (!empty($sortOrder)) ? $sortOrder : 'DESC';
                $dataTypeContent = call_user_func([
                    $query->orderBy($orderBy, $querySortOrder),
                    $getter,
                ]);
            } elseif ($model->timestamps) {
                $dataTypeContent = call_user_func([$query->latest($model::CREATED_AT), $getter]);
            } else {
                $dataTypeContent = call_user_func([$query->orderBy($model->getKeyName(), 'DESC'), $getter]);
            }

            // Replace relationships' keys for labels and create READ links if a slug is provided.
            $dataTypeContent = $this->resolveRelations($dataTypeContent, $dataType);
        } else {
            // If Model doesn't exist, get data from table name
            $dataTypeContent = call_user_func([DB::table($dataType->name), $getter]);
            $model = false;
        }

        // Check if BREAD is Translatable
        if (($isModelTranslatable = is_bread_translatable($model))) {
            $dataTypeContent->load('translations');
        }

        // Check if server side pagination is enabled
        $isServerSide = isset($dataType->server_side) && $dataType->server_side;

        //$view = 'voyager::bread.browse';
        $view = 'admin.exercise.browse';

//        if (view()->exists("voyager::$slug.browse")) {
//            $view = "voyager::$slug.browse";
//        }

        return Voyager::view($view, compact(
            'dataType',
            'dataTypeContent',
            'isModelTranslatable',
            'search',
            'orderBy',
            'sortOrder',
            'searchable',
            'isServerSide'
        ));
    }

    public function edit(Request $request, $id)
    {
//        dump('edit');
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        $relationships = $this->getRelationships($dataType);

        $dataTypeContent = (strlen($dataType->model_name) != 0)
            ? app($dataType->model_name)->with($relationships)->findOrFail($id)
            : DB::table($dataType->name)->where('id', $id)->first(); // If Model doest exist, get data from table name

        foreach ($dataType->editRows as $key => $row) {
            $details = json_decode($row->details);
            $dataType->editRows[$key]['col_width'] = isset($details->width) ? $details->width : 100;
        }

        // If a column has a relationship associated with it, we do not want to show that field
        $this->removeRelationshipField($dataType, 'edit');

        // Check permission
        $this->authorize('edit', $dataTypeContent);

        // Check if BREAD is Translatable
        $isModelTranslatable = is_bread_translatable($dataTypeContent);

        //$view = 'voyager::bread.edit-add';
        $view = 'admin.exercise.edit-add';

//        if (view()->exists("voyager::$slug.edit-add")) {
//            $view = "voyager::$slug.edit-add";
//        }

        return Voyager::view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable'));
    }

    // Update de l'exercice
    public function update(Request $request, $id)
    {

        $data = Examination::findOrFail($id);

        if ($request->file('document')){

            // supprimer l'ancien sujet

            unlink(public_path('storage/').$data->document);

            $doc = $request->file('document');

            $fileName =  'examinations/'.$request->input('slug'). '.' .
                $doc->getClientOriginalExtension();

            $doc->move(
                public_path('storage/examinations'), $fileName
            );
            $data->document = $fileName;
        }

        $data->title = $request->input('title');
        $data->school_id = $request->input('school_id');
        $data->level_id = $request->input('level_id');
        $data->matter_id = $request->input('matter_id');
        $data->slug = $request->input('slug');
        $data->save();

        return redirect()
            ->route("voyager.examinations.index")
            ->with([
                'message'    => __('voyager::generic.successfully_updated')." Exercices",
                'alert-type' => 'success',
            ]);
    }

    // Creation D'un nouvel exercice
    public function store(Request $request){

        $doc = $request->file('document');

        $fileName =  'examinations/'.$request->input('slug'). '.' .
            $doc->getClientOriginalExtension();

        $doc->move(
            public_path('storage/examinations'), $fileName
        );

        Examination::create([
            'title' => $request->input('title'),
            'document' => $fileName,
            'slug' => $request->input('slug'),
            'school_id' => $request->input('school_id'),
            'level_id' => $request->input('level_id'),
            'matter_id' => $request->input('matter_id')
        ]);

        return redirect()
            ->route("voyager.examinations.index")
            ->with([
                'message'    => __('voyager::generic.successfully_added_new')." Examens",
                'alert-type' => 'success',
            ]);
    }


    /**
     * Remove translations, images and files related to a BREAD item.
     *
     * @param \Illuminate\Database\Eloquent\Model $dataType
     * @param \Illuminate\Database\Eloquent\Model $data
     *
     * @return void
     */
    protected function cleanup($dataType, $data)
    {

        // Delete Translations, if present
        if (is_bread_translatable($data)) {
            $data->deleteAttributeTranslations($data->getTranslatableAttributes());
        }

        // Delete Images
        $this->deleteBreadImages($data, $dataType->deleteRows->where('type', 'image'));

        unlink(public_path('storage/').$data->document);

        // Delete Files
//        foreach ($dataType->deleteRows->where('type', 'file') as $row) {
//            foreach (json_decode($data->{$row->field}) as $file) {
//                $this->deleteFileIfExists(public_path('storage/').$data->document);
//            }
//        }
    }

}