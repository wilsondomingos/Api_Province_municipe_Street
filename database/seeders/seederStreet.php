<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \DB;
class seederStreet extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         //»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»» So  Cabinda »»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»
        //Cabinda
        DB::table('street')->insert(["bairro"=>"Cabinda","municipe_id"=>28]);
        DB::table('street')->insert(["bairro"=>"Malembo","municipe_id"=>28]);
        DB::table('street')->insert(["bairro"=>"Tando Zinze","municipe_id"=>28]);

        //Cacongo
        DB::table('street')->insert(["bairro"=>"Cacongo","municipe_id"=>29]);
        DB::table('street')->insert(["bairro"=>"Dinge","municipe_id"=>29]);
        DB::table('street')->insert(["bairro"=>"Massabi Zinze","municipe_id"=>29]);

        //Buco Zau
        DB::table('street')->insert(["bairro"=>"Buco Zau","municipe_id"=>27]);
        DB::table('street')->insert(["bairro"=>"Necuto","municipe_id"=>27]);
        DB::table('street')->insert(["bairro"=>"Inhuca","municipe_id"=>27]);

        //Belize
        DB::table('street')->insert(["bairro"=>"Belize","municipe_id"=>26]);
        DB::table('street')->insert(["bairro"=>"Miconje","municipe_id"=>26]);
        DB::table('street')->insert(["bairro"=>"Luali","municipe_id"=>26]);

        //»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»» So Luanda »»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»
        //Luanda
        DB::table('street')->insert(["bairro"=>"Sambizanga","municipe_id"=>96]);
        DB::table('street')->insert(["bairro"=>"Rangel","municipe_id"=>96]);
        DB::table('street')->insert(["bairro"=>"Maianga","municipe_id"=>96]);
        DB::table('street')->insert(["bairro"=>"Ingobota","municipe_id"=>96]);
        DB::table('street')->insert(["bairro"=>"Samba","municipe_id"=>96]);
        DB::table('street')->insert(["bairro"=>"Neves Bendinha","municipe_id"=>96]);
        DB::table('street')->insert(["bairro"=>"Ngola Kiluange","municipe_id"=>96]);

        //Icolo e Bengo
        DB::table('street')->insert(["bairro"=>"Catete","municipe_id"=>95]);
        DB::table('street')->insert(["bairro"=>"Bela Vista","municipe_id"=>95]);
        DB::table('street')->insert(["bairro"=>"Cassoneca","municipe_id"=>95]);
        DB::table('street')->insert(["bairro"=>"Cabiri","municipe_id"=>95]);
        DB::table('street')->insert(["bairro"=>"Bom Jesus","municipe_id"=>95]);
        DB::table('street')->insert(["bairro"=>"Caculo Cahango","municipe_id"=>95]);
        DB::table('street')->insert(["bairro"=>"Quiminha","municipe_id"=>95]);


        //Quissama
        DB::table('street')->insert(["bairro"=>"Muxima","municipe_id"=>98]);
        DB::table('street')->insert(["bairro"=>"Demba Chio","municipe_id"=>98]);
        DB::table('street')->insert(["bairro"=>"Quixinge","municipe_id"=>98]);
        DB::table('street')->insert(["bairro"=>"Mumbondo","municipe_id"=>98]);
        DB::table('street')->insert(["bairro"=>"Cabo Ledo","municipe_id"=>98]);
     


       //Cacuaco
       DB::table('street')->insert(["bairro"=>"Kikolo","municipe_id"=>93]);
       DB::table('street')->insert(["bairro"=>"Cacuaco","municipe_id"=>93]);
       DB::table('street')->insert(["bairro"=>"Mulenvos de Baixo","municipe_id"=>93]);
       DB::table('street')->insert(["bairro"=>"Sequele","municipe_id"=>93]);
       DB::table('street')->insert(["bairro"=>"Funda","municipe_id"=>93]);

       //Cazenga
       DB::table('street')->insert(["bairro"=>"Cazenga","municipe_id"=>94]);
       DB::table('street')->insert(["bairro"=>"Hoji ya Henda","municipe_id"=>94]);
       DB::table('street')->insert(["bairro"=>"11 de Novembro","municipe_id"=>94]);
       DB::table('street')->insert(["bairro"=>"Kima Kieza","municipe_id"=>94]);
       DB::table('street')->insert(["bairro"=>"Tala Hadi","municipe_id"=>94]);
       DB::table('street')->insert(["bairro"=>"Kalawenda de Baixo","municipe_id"=>94]);


        //Viana
        DB::table('street')->insert(["bairro"=>"Viana","municipe_id"=>100]);
        DB::table('street')->insert(["bairro"=>"Estalagem","municipe_id"=>100]);
        DB::table('street')->insert(["bairro"=>"Kikuxi","municipe_id"=>100]);
        DB::table('street')->insert(["bairro"=>"Baía","municipe_id"=>100]);
        DB::table('street')->insert(["bairro"=>"Zango","municipe_id"=>100]);
        DB::table('street')->insert(["bairro"=>"Vila Flôr","municipe_id"=>100]);
        DB::table('street')->insert(["bairro"=>"Calumbo","municipe_id"=>100]);

        //Belas
        DB::table('street')->insert(["bairro"=>"Quenguela","municipe_id"=>92]);
        DB::table('street')->insert(["bairro"=>"Morro dos Veados","municipe_id"=>92]);
        DB::table('street')->insert(["bairro"=>"Ramiros","municipe_id"=>92]);
        DB::table('street')->insert(["bairro"=>"Vila Verde","municipe_id"=>92]);
        DB::table('street')->insert(["bairro"=>"Cabolombo","municipe_id"=>92]);
        DB::table('street')->insert(["bairro"=>"Kilamba","municipe_id"=>92]);
        DB::table('street')->insert(["bairro"=>"Barra do Cuanza","municipe_id"=>92]);
    
   
         //Kilamba Kiaxi
         DB::table('street')->insert(["bairro"=>"Golfe","municipe_id"=>97]);
         DB::table('street')->insert(["bairro"=>"Sapú","municipe_id"=>97]);
         DB::table('street')->insert(["bairro"=>"Palanca","municipe_id"=>97]);
         DB::table('street')->insert(["bairro"=>"Nova Vida","municipe_id"=>97]);

           //Talatona
        DB::table('street')->insert(["bairro"=>"Benfica","municipe_id"=>99]);
        DB::table('street')->insert(["bairro"=>"Futungo de Belas","municipe_id"=>99]);
        DB::table('street')->insert(["bairro"=>"Lar do Patriota","municipe_id"=>99]);
        DB::table('street')->insert(["bairro"=>"Talatona","municipe_id"=>99]);
        DB::table('street')->insert(["bairro"=>"Camama","municipe_id"=>99]);
        DB::table('street')->insert(["bairro"=>"Cidade Universitária","municipe_id"=>99]);
        DB::table('street')->insert(["bairro"=>"Mussulo","municipe_id"=>99]);




           //»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»» So Zaire »»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»
        //Soyo
        DB::table('street')->insert(["bairro"=>"Soyo","municipe_id"=>167]);
        DB::table('street')->insert(["bairro"=>"Sumba","municipe_id"=>167]);
        DB::table('street')->insert(["bairro"=>"Pedra de Feitiço","municipe_id"=>167]);
        DB::table('street')->insert(["bairro"=>"Quêlo","municipe_id"=>167]);
        DB::table('street')->insert(["bairro"=>"Mangue Grande","municipe_id"=>167]);

        //Mbanza Kongo
        DB::table('street')->insert(["bairro"=>"Mbanza Kongo","municipe_id"=>164]);
        DB::table('street')->insert(["bairro"=>"Luvo","municipe_id"=>164]);
        DB::table('street')->insert(["bairro"=>"Caluca","municipe_id"=>164]);
        DB::table('street')->insert(["bairro"=>"Madimba","municipe_id"=>164]);
        DB::table('street')->insert(["bairro"=>"Quiende","municipe_id"=>164]);
        DB::table('street')->insert(["bairro"=>"Calambata","municipe_id"=>164]);

        //Nzeto
        DB::table('street')->insert(["bairro"=>"Nzeto","municipe_id"=>166]);
        DB::table('street')->insert(["bairro"=>"Quindeje","municipe_id"=>166]);
        DB::table('street')->insert(["bairro"=>"Musserra","municipe_id"=>166]);
        DB::table('street')->insert(["bairro"=>"Quibala Norte","municipe_id"=>166]);
    
        //Tomboco
        DB::table('street')->insert(["bairro"=>"Tomboco","municipe_id"=>168]);
        DB::table('street')->insert(["bairro"=>"Quinsimba","municipe_id"=>168]);
        DB::table('street')->insert(["bairro"=>"Quinzau","municipe_id"=>168]);

        //Cuimba
        DB::table('street')->insert(["bairro"=>"Cuimba","municipe_id"=>162]);
        DB::table('street')->insert(["bairro"=>"Buela","municipe_id"=>162]);
        DB::table('street')->insert(["bairro"=>"Serra da Canda","municipe_id"=>162]);
        DB::table('street')->insert(["bairro"=>"Luvaca","municipe_id"=>162]);

        //Nóqui
        DB::table('street')->insert(["bairro"=>"Nóqui","municipe_id"=>165]);
        DB::table('street')->insert(["bairro"=>"Lufico","municipe_id"=>165]);
        DB::table('street')->insert(["bairro"=>"Mpala","municipe_id"=>165]);


           //»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»» So Uige »»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»
        //Dange - Quitexe
        DB::table('street')->insert(["bairro"=>"Quitexe","municipe_id"=>156]);
        DB::table('street')->insert(["bairro"=>"Aldeia Viçosa","municipe_id"=>156]);
        DB::table('street')->insert(["bairro"=>"Cambamba","municipe_id"=>156]);
        DB::table('street')->insert(["bairro"=>"Vista Alegre","municipe_id"=>156]);

        //Bungo
        DB::table('street')->insert(["bairro"=>"Bungo","municipe_id"=>149]);

        //Ambuíla
        DB::table('street')->insert(["bairro"=>"Nova Ambuíla","municipe_id"=>146]);
        DB::table('street')->insert(["bairro"=>"Quipedro","municipe_id"=>146]);


        //Negage
        DB::table('street')->insert(["bairro"=>"Dimuca","municipe_id"=>153]);
        DB::table('street')->insert(["bairro"=>"Quisseque","municipe_id"=>153]);
        DB::table('street')->insert(["bairro"=>"Negage","municipe_id"=>153]);

        //Puri
        DB::table('street')->insert(["bairro"=>"Puri","municipe_id"=>154]);

        //Maquela do Zombo
        DB::table('street')->insert(["bairro"=>"Maquela do Zombo","municipe_id"=>160]);
        DB::table('street')->insert(["bairro"=>"Quibocolo","municipe_id"=>160]);
        DB::table('street')->insert(["bairro"=>"Béu","municipe_id"=>160]);
        DB::table('street')->insert(["bairro"=>"Sacandica","municipe_id"=>160]);
        DB::table('street')->insert(["bairro"=>"Cuilo Futa","municipe_id"=>160]);
     
        //Damba
        DB::table('street')->insert(["bairro"=>"Damba","municipe_id"=>150]);
        DB::table('street')->insert(["bairro"=>"Nsosso","municipe_id"=>150]);
        DB::table('street')->insert(["bairro"=>"Camatambo","municipe_id"=>150]);
        DB::table('street')->insert(["bairro"=>"Lêmboa","municipe_id"=>150]);
        DB::table('street')->insert(["bairro"=>"Petecusso","municipe_id"=>150]);


         //Pombo
         DB::table('street')->insert(["bairro"=>"Sanza Pombo","municipe_id"=>157]);
         DB::table('street')->insert(["bairro"=>"Cuilo Pombo","municipe_id"=>157]);
         DB::table('street')->insert(["bairro"=>"Uamba","municipe_id"=>157]);
         DB::table('street')->insert(["bairro"=>"Alfândega","municipe_id"=>157]);

         //Bembe
         DB::table('street')->insert(["bairro"=>"Bembe","municipe_id"=>147]);
         DB::table('street')->insert(["bairro"=>"Lucunga","municipe_id"=>147]);
         DB::table('street')->insert(["bairro"=>"Mabaia","municipe_id"=>147]);


         //Milunga
         DB::table('street')->insert(["bairro"=>"Milunga","municipe_id"=>151]);
         DB::table('street')->insert(["bairro"=>"Macocola","municipe_id"=>151]);
         DB::table('street')->insert(["bairro"=>"Macolo","municipe_id"=>151]);
         DB::table('street')->insert(["bairro"=>"Massau","municipe_id"=>151]);


          //Songo
          DB::table('street')->insert(["bairro"=>"Songo","municipe_id"=>158]);
          DB::table('street')->insert(["bairro"=>"Quivuenga","municipe_id"=>158]);


           //Quimbele
         DB::table('street')->insert(["bairro"=>"Quimbele","municipe_id"=>155]);
         DB::table('street')->insert(["bairro"=>"Cuango","municipe_id"=>155]);
         DB::table('street')->insert(["bairro"=>"Icoca","municipe_id"=>155]);
         DB::table('street')->insert(["bairro"=>"Alto Zaza","municipe_id"=>155]);



         //Alto Cauale
         DB::table('street')->insert(["bairro"=>"Cangola","municipe_id"=>145]);
         DB::table('street')->insert(["bairro"=>"Bengo","municipe_id"=>145]);
         DB::table('street')->insert(["bairro"=>"Caiongo","municipe_id"=>145]);


         //Uíge
         DB::table('street')->insert(["bairro"=>"Cidade do Uíge","municipe_id"=>159]);



          //Mucaba
          DB::table('street')->insert(["bairro"=>"Mucaba","municipe_id"=>152]);
          DB::table('street')->insert(["bairro"=>"Uando Mucaba","municipe_id"=>152]);

          //Buengas
         DB::table('street')->insert(["bairro"=>"Buenga Sul","municipe_id"=>148]);
         DB::table('street')->insert(["bairro"=>"Nova Esperança","municipe_id"=>148]);
         DB::table('street')->insert(["bairro"=>"Cuilo Camboso","municipe_id"=>148]);

















         //»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»» So Lunda Norte »»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»
        //Chitato
        DB::table('street')->insert(["bairro"=>"Chitato","municipe_id"=>105]);
        DB::table('street')->insert(["bairro"=>"Dundo","municipe_id"=>105]);
        DB::table('street')->insert(["bairro"=>"Mussungue","municipe_id"=>105]);
      
    }
}
