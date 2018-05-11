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

        $datas = \App\Exercise::get();

        foreach ($datas as $data) {
            $data->document = 'exercises/reglement.pdf';
            $data->save();
        }
    }
}
