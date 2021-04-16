<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \DB;
class seederMunicipe extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // Bengo
          DB::table('municipe')->insert(["municipio"=>"Caxito","provincia_id"=>1]);
          DB::table('municipe')->insert(["municipio"=>"Ambriz","provincia_id"=>1]);
          DB::table('municipe')->insert(["municipio"=>"Bula Atumba","provincia_id"=>1]);
          DB::table('municipe')->insert(["municipio"=>"Dande","provincia_id"=>1]);
          DB::table('municipe')->insert(["municipio"=>"Dembos","provincia_id"=>1]);
          DB::table('municipe')->insert(["municipio"=>"Nambuangongo","provincia_id"=>1]);
          DB::table('municipe')->insert(["municipio"=>"Pango Aluquém","provincia_id"=>1]);

          //Benguela
          DB::table('municipe')->insert(["municipio"=>"Balombo","provincia_id"=>2]);
          DB::table('municipe')->insert(["municipio"=>"Baía Farta","provincia_id"=>2]);
          DB::table('municipe')->insert(["municipio"=>"Benguela","provincia_id"=>2]);
          DB::table('municipe')->insert(["municipio"=>"Bocoio","provincia_id"=>2]);
          DB::table('municipe')->insert(["municipio"=>"Caimbambo","provincia_id"=>2]);
          DB::table('municipe')->insert(["municipio"=>"Catumbela","provincia_id"=>2]);
          DB::table('municipe')->insert(["municipio"=>"Chongorói","provincia_id"=>2]);
          DB::table('municipe')->insert(["municipio"=>"Cubal","provincia_id"=>2]);
          DB::table('municipe')->insert(["municipio"=>"Ganda","provincia_id"=>2]);
          DB::table('municipe')->insert(["municipio"=>"Lobito","provincia_id"=>2]);

          //Bié
          DB::table('municipe')->insert(["municipio"=>"Andulo","provincia_id"=>3]);
          DB::table('municipe')->insert(["municipio"=>"Camacupa","provincia_id"=>3]);
          DB::table('municipe')->insert(["municipio"=>"Chinguar","provincia_id"=>3]);
          DB::table('municipe')->insert(["municipio"=>"Chitembo","provincia_id"=>3]);
          DB::table('municipe')->insert(["municipio"=>"Cuemba","provincia_id"=>3]);
          DB::table('municipe')->insert(["municipio"=>"Cunhinga","provincia_id"=>3]);
          DB::table('municipe')->insert(["municipio"=>"Cuíto","provincia_id"=>3]);
          DB::table('municipe')->insert(["municipio"=>"Nharea","provincia_id"=>3]);


          //Cabinda
          DB::table('municipe')->insert(["municipio"=>"Belize","provincia_id"=>4]);
          DB::table('municipe')->insert(["municipio"=>"Buco-Zau","provincia_id"=>4]);
          DB::table('municipe')->insert(["municipio"=>"Cabinda","provincia_id"=>4]);
          DB::table('municipe')->insert(["municipio"=>"Cacongo","provincia_id"=>4]);


          //Cuando-Cubango
          DB::table('municipe')->insert(["municipio"=>"Calai","provincia_id"=>5]);
          DB::table('municipe')->insert(["municipio"=>"Cuangar","provincia_id"=>5]);
          DB::table('municipe')->insert(["municipio"=>"Cuchi","provincia_id"=>5]);
          DB::table('municipe')->insert(["municipio"=>"Cuito Cuanavale","provincia_id"=>5]);
          DB::table('municipe')->insert(["municipio"=>"Dirico","provincia_id"=>5]);
          DB::table('municipe')->insert(["municipio"=>"Mavinga","provincia_id"=>5]);
          DB::table('municipe')->insert(["municipio"=>"Menongue","provincia_id"=>5]);
          DB::table('municipe')->insert(["municipio"=>"Nancova","provincia_id"=>5]);
          DB::table('municipe')->insert(["municipio"=>"Rivungo","provincia_id"=>5]);


          //Cuanza Norte
          DB::table('municipe')->insert(["municipio"=>"Nadalatando","provincia_id"=>6]);
          DB::table('municipe')->insert(["municipio"=>"Ambaca","provincia_id"=>6]);
          DB::table('municipe')->insert(["municipio"=>"Banga","provincia_id"=>6]);
          DB::table('municipe')->insert(["municipio"=>"Bolongongo","provincia_id"=>6]);
          DB::table('municipe')->insert(["municipio"=>"Cambambe","provincia_id"=>6]);
          DB::table('municipe')->insert(["municipio"=>"Cazengo","provincia_id"=>6]);
          DB::table('municipe')->insert(["municipio"=>"Golungo Alto","provincia_id"=>6]);
          DB::table('municipe')->insert(["municipio"=>"Gonguembo","provincia_id"=>6]);
          DB::table('municipe')->insert(["municipio"=>"Lucala","provincia_id"=>6]);
          DB::table('municipe')->insert(["municipio"=>"Quiculungo","provincia_id"=>6]);
          DB::table('municipe')->insert(["municipio"=>"Samba Caju","provincia_id"=>6]);


          //Cuanza Sul
          DB::table('municipe')->insert(["municipio"=>"Porto Amboim","provincia_id"=>7]);
          DB::table('municipe')->insert(["municipio"=>"Cassongue","provincia_id"=>7]);
          DB::table('municipe')->insert(["municipio"=>"Cela","provincia_id"=>7]);
          DB::table('municipe')->insert(["municipio"=>"Conda","provincia_id"=>7]);
          DB::table('municipe')->insert(["municipio"=>"Ebo","provincia_id"=>7]);
          DB::table('municipe')->insert(["municipio"=>"Libolo","provincia_id"=>7]);
          DB::table('municipe')->insert(["municipio"=>"Porto","provincia_id"=>7]);
          DB::table('municipe')->insert(["municipio"=>"Quibala","provincia_id"=>7]);
          DB::table('municipe')->insert(["municipio"=>"Quilenda","provincia_id"=>7]);
          DB::table('municipe')->insert(["municipio"=>"Seles","provincia_id"=>7]);
          DB::table('municipe')->insert(["municipio"=>"Sumbe","provincia_id"=>7]);

          //Cunene
          DB::table('municipe')->insert(["municipio"=>"Cahama","provincia_id"=>8]);
          DB::table('municipe')->insert(["municipio"=>"Cuanhama","provincia_id"=>8]);
          DB::table('municipe')->insert(["municipio"=>"Curoca","provincia_id"=>8]);
          DB::table('municipe')->insert(["municipio"=>"Cuvelai","provincia_id"=>8]);
          DB::table('municipe')->insert(["municipio"=>"Namacunde","provincia_id"=>8]);
          DB::table('municipe')->insert(["municipio"=>"Ombadja","provincia_id"=>8]);

          //Huambo
          DB::table('municipe')->insert(["municipio"=>"Bailundo","provincia_id"=>9]);
          DB::table('municipe')->insert(["municipio"=>"Cachiungo","provincia_id"=>9]);
          DB::table('municipe')->insert(["municipio"=>"Caála","provincia_id"=>9]);
          DB::table('municipe')->insert(["municipio"=>"Ecunha","provincia_id"=>9]);
          DB::table('municipe')->insert(["municipio"=>"Huambo","provincia_id"=>9]);
          DB::table('municipe')->insert(["municipio"=>"Londuimbali","provincia_id"=>9]);
          DB::table('municipe')->insert(["municipio"=>"Longonjo","provincia_id"=>9]);
          DB::table('municipe')->insert(["municipio"=>"Mungo","provincia_id"=>9]);
          DB::table('municipe')->insert(["municipio"=>"Chicala-Choloanga","provincia_id"=>9]);
          DB::table('municipe')->insert(["municipio"=>"Chinjenje","provincia_id"=>9]);
          DB::table('municipe')->insert(["municipio"=>"Ucuma","provincia_id"=>9]);

          //Huíla
          DB::table('municipe')->insert(["municipio"=>"Caconda","provincia_id"=>10]);
          DB::table('municipe')->insert(["municipio"=>"Cacula","provincia_id"=>10]);
          DB::table('municipe')->insert(["municipio"=>"Caluquembe","provincia_id"=>10]);
          DB::table('municipe')->insert(["municipio"=>"Chiange","provincia_id"=>10]);
          DB::table('municipe')->insert(["municipio"=>"Chibia","provincia_id"=>10]);
          DB::table('municipe')->insert(["municipio"=>"Chicomba","provincia_id"=>10]);
          DB::table('municipe')->insert(["municipio"=>"Chipindo","provincia_id"=>10]);
          DB::table('municipe')->insert(["municipio"=>"Cuvango","provincia_id"=>10]);
          DB::table('municipe')->insert(["municipio"=>"Humpata","provincia_id"=>10]);
          DB::table('municipe')->insert(["municipio"=>"Jamba","provincia_id"=>10]);
          DB::table('municipe')->insert(["municipio"=>"Lubango","provincia_id"=>10]);
          DB::table('municipe')->insert(["municipio"=>"Matala","provincia_id"=>10]);
          DB::table('municipe')->insert(["municipio"=>"Quilengues","provincia_id"=>10]);
          DB::table('municipe')->insert(["municipio"=>"Quipungo","provincia_id"=>10]);



          //Luanda
          DB::table('municipe')->insert(["municipio"=>"Belas","provincia_id"=>11]);
          DB::table('municipe')->insert(["municipio"=>"Cacuaco","provincia_id"=>11]);
          DB::table('municipe')->insert(["municipio"=>"Cazenga","provincia_id"=>11]);
          DB::table('municipe')->insert(["municipio"=>"Ícolo e Bengo","provincia_id"=>11]);
          DB::table('municipe')->insert(["municipio"=>"Luanda","provincia_id"=>11]);
          DB::table('municipe')->insert(["municipio"=>"Kilamba Kiaxi","provincia_id"=>11]);
          DB::table('municipe')->insert(["municipio"=>"Quissama","provincia_id"=>11]);
          DB::table('municipe')->insert(["municipio"=>"Talatona","provincia_id"=>11]);
          DB::table('municipe')->insert(["municipio"=>"Viana","provincia_id"=>11]);


          //Lunda Norte
          DB::table('municipe')->insert(["municipio"=>"Dundo","provincia_id"=>12]);
          DB::table('municipe')->insert(["municipio"=>"Cambulo","provincia_id"=>12]);
          DB::table('municipe')->insert(["municipio"=>"Capenda-Camulemba","provincia_id"=>12]);
          DB::table('municipe')->insert(["municipio"=>"Caungula","provincia_id"=>12]);
          DB::table('municipe')->insert(["municipio"=>"Chitato","provincia_id"=>12]);
          DB::table('municipe')->insert(["municipio"=>"Cuango","provincia_id"=>12]);
          DB::table('municipe')->insert(["municipio"=>"Cuílo","provincia_id"=>12]);
          DB::table('municipe')->insert(["municipio"=>"Xá-Muteba","provincia_id"=>12]);
          DB::table('municipe')->insert(["municipio"=>"Lóvua","provincia_id"=>12]);
          DB::table('municipe')->insert(["municipio"=>"Lubalo","provincia_id"=>12]);
          DB::table('municipe')->insert(["municipio"=>"Lucapa","provincia_id"=>12]);

          //Lunda Sul
          DB::table('municipe')->insert(["municipio"=>"Cacolo","provincia_id"=>13]);
          DB::table('municipe')->insert(["municipio"=>"Dala","provincia_id"=>13]);
          DB::table('municipe')->insert(["municipio"=>"Muconda","provincia_id"=>13]);
          DB::table('municipe')->insert(["municipio"=>"Saurimo","provincia_id"=>13]);

          //Malanje
          DB::table('municipe')->insert(["municipio"=>"Cacuso","provincia_id"=>14]);
          DB::table('municipe')->insert(["municipio"=>"Calandula","provincia_id"=>14]);
          DB::table('municipe')->insert(["municipio"=>"Cambundi-Catembo","provincia_id"=>14]);
          DB::table('municipe')->insert(["municipio"=>"Cangandala","provincia_id"=>14]);
          DB::table('municipe')->insert(["municipio"=>"Caombo","provincia_id"=>14]);
          DB::table('municipe')->insert(["municipio"=>"Cuaba Nzoji","provincia_id"=>14]);
          DB::table('municipe')->insert(["municipio"=>"Cunda-Dia-Baze","provincia_id"=>14]);
          DB::table('municipe')->insert(["municipio"=>"Luquembo","provincia_id"=>14]);
          DB::table('municipe')->insert(["municipio"=>"Malanje","provincia_id"=>14]);
          DB::table('municipe')->insert(["municipio"=>"Marimba","provincia_id"=>14]);
          DB::table('municipe')->insert(["municipio"=>"Massango","provincia_id"=>14]);
          DB::table('municipe')->insert(["municipio"=>"Mucari","provincia_id"=>14]);
          DB::table('municipe')->insert(["municipio"=>"Quela","provincia_id"=>14]);
          DB::table('municipe')->insert(["municipio"=>"Quirima","provincia_id"=>14]);


          //Moxico
          DB::table('municipe')->insert(["municipio"=>"Luena","provincia_id"=>15]);
          DB::table('municipe')->insert(["municipio"=>"Alto Zambeze","provincia_id"=>15]);
          DB::table('municipe')->insert(["municipio"=>"Bundas","provincia_id"=>15]);
          DB::table('municipe')->insert(["municipio"=>"Camanongue","provincia_id"=>15]);
          DB::table('municipe')->insert(["municipio"=>"Léua","provincia_id"=>15]);
          DB::table('municipe')->insert(["municipio"=>"Luau","provincia_id"=>15]);
          DB::table('municipe')->insert(["municipio"=>"Luacano","provincia_id"=>15]);
          DB::table('municipe')->insert(["municipio"=>"Luchazes","provincia_id"=>15]);
          DB::table('municipe')->insert(["municipio"=>"Cameia","provincia_id"=>15]);
          DB::table('municipe')->insert(["municipio"=>"Moxico","provincia_id"=>15]);


          //Namibe
          DB::table('municipe')->insert(["municipio"=>"Bibala","provincia_id"=>16]);
          DB::table('municipe')->insert(["municipio"=>"Camucuio","provincia_id"=>16]);
          DB::table('municipe')->insert(["municipio"=>"Moçâmedes","provincia_id"=>16]);
          DB::table('municipe')->insert(["municipio"=>"Tômbua","provincia_id"=>16]);
          DB::table('municipe')->insert(["municipio"=>"Virei","provincia_id"=>16]);

           //Uíge
           DB::table('municipe')->insert(["municipio"=>"Alto Cauale","provincia_id"=>17]);
           DB::table('municipe')->insert(["municipio"=>"Ambuíla","provincia_id"=>17]);
           DB::table('municipe')->insert(["municipio"=>"Bembe","provincia_id"=>17]);
           DB::table('municipe')->insert(["municipio"=>"Buengas","provincia_id"=>17]);
           DB::table('municipe')->insert(["municipio"=>"Bungo","provincia_id"=>17]);
           DB::table('municipe')->insert(["municipio"=>"Damba","provincia_id"=>17]);
           DB::table('municipe')->insert(["municipio"=>"Milunga","provincia_id"=>17]);
           DB::table('municipe')->insert(["municipio"=>"Mucaba","provincia_id"=>17]);
           DB::table('municipe')->insert(["municipio"=>"Negage","provincia_id"=>17]);
           DB::table('municipe')->insert(["municipio"=>"Puri","provincia_id"=>17]);
           DB::table('municipe')->insert(["municipio"=>"Quimbele","provincia_id"=>17]);
           DB::table('municipe')->insert(["municipio"=>"Quitexe","provincia_id"=>17]);
           DB::table('municipe')->insert(["municipio"=>"Sanza Pombo","provincia_id"=>17]);
           DB::table('municipe')->insert(["municipio"=>"Songo","provincia_id"=>17]);
           DB::table('municipe')->insert(["municipio"=>"Uíge","provincia_id"=>17]);
           DB::table('municipe')->insert(["municipio"=>"Zombo","provincia_id"=>17]);



           //Zaire
           DB::table('municipe')->insert(["municipio"=>"Congo","provincia_id"=>18]);
           DB::table('municipe')->insert(["municipio"=>"Cuimba","provincia_id"=>18]);
           DB::table('municipe')->insert(["municipio"=>"Mabanza","provincia_id"=>18]);
           DB::table('municipe')->insert(["municipio"=>"Mabanza Congo","provincia_id"=>18]);
           DB::table('municipe')->insert(["municipio"=>"Nóqui","provincia_id"=>18]);
           DB::table('municipe')->insert(["municipio"=>"Nezeto","provincia_id"=>18]);
           DB::table('municipe')->insert(["municipio"=>"Soio","provincia_id"=>18]);
           DB::table('municipe')->insert(["municipio"=>"Tomboco","provincia_id"=>18]);
    }
}
