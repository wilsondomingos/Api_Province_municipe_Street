<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \DB;
class seederProvince extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('province')->insert(["provincia"=>"Bengo"]);
        DB::table('province')->insert(["provincia"=>"Benguela"]);
        DB::table('province')->insert(["provincia"=>"Bié"]);
        DB::table('province')->insert(["provincia"=>"Cabinda"]);
        DB::table('province')->insert(["provincia"=>"Cuando-Cubango"]);
        DB::table('province')->insert(["provincia"=>"Cuanza Norte"]);
        DB::table('province')->insert(["provincia"=>"Cuanza Sul"]);
        DB::table('province')->insert(["provincia"=>"Cunene"]);
        DB::table('province')->insert(["provincia"=>"Huambo"]);
        DB::table('province')->insert(["provincia"=>"Huíla"]);
        DB::table('province')->insert(["provincia"=>"Luanda"]);
        DB::table('province')->insert(["provincia"=>"Lunda Norte"]);
        DB::table('province')->insert(["provincia"=>"Lunda Sul"]);
        DB::table('province')->insert(["provincia"=>"Malanje"]);
        DB::table('province')->insert(["provincia"=>"Moxico"]);
        DB::table('province')->insert(["provincia"=>"Namibe"]);
        DB::table('province')->insert(["provincia"=>"Uíge"]);
        DB::table('province')->insert(["provincia"=>"Zaire"]);
    }
}
