<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $teacher_data = [
            [
                'nama' => 'Pak Dani',
                'contact' => '0812 7868 2932'
            ],
            [
                'nama' => 'Bu dar',
                'contact' => '0821 7838 3283'
            ],
            [
                'nama' => 'pak zul',
                'contact' => '0821 3223 7232'
            ],
        ];


            DB::table('teachers')->insert($teacher_data);

    }
}
