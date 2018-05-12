<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
//        factory(App\School::class, 20)->create();
//        factory(App\Matter::class, 20)->create();
//        factory(App\CorrectedExamination::class, 50)->create();

        $datas = \App\School::get();

        foreach ($datas as $data) {
            $slug = \Illuminate\Support\Str::slug($data->name);

            $data->slug = $slug;
            $data->save();
        }
    }
}
