<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesColSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('states')->insert([
        ['id'=>4791,'iso3'=>'91','slug'=>'amazonas','name'=>'Amazonas','lat'=>1.992902,'lng'=>-71.72775,'country_id'=>47],
        ['id'=>4705,'iso3'=>'05','slug'=>'antioquia','name'=>'Antioquia','lat'=>7.093272,'lng'=>-75.773177,'country_id'=>47],
        ['id'=>4781,'iso3'=>'81','slug'=>'arauca','name'=>'Arauca','lat'=>6.591805,'lng'=>-71.017117,'country_id'=>47],
        ['id'=>4788,'iso3'=>'88','slug'=>'san-andres','name'=>'San Andres y Providencia','lat'=>12.950414,'lng'=>-81.561761,'country_id'=>47],
        ['id'=>4708,'iso3'=>'08','slug'=>'atlantico','name'=>'Atlántico','lat'=>10.705487,'lng'=>-75.002168,'country_id'=>47],
        ['id'=>4711,'iso3'=>'11','slug'=>'bogota-dc','name'=>'Bogotá D.C.','lat'=>4.651666,'lng'=>-74.11292,'country_id'=>47],
        ['id'=>4713,'iso3'=>'13','slug'=>'bolivar','name'=>'Bolívar','lat'=>8.93279,'lng'=>-74.332056,'country_id'=>47],
        ['id'=>4715,'iso3'=>'15','slug'=>'boyaca','name'=>'Boyacá','lat'=>5.68869,'lng'=>-72.874205,'country_id'=>47],
        ['id'=>4717,'iso3'=>'17','slug'=>'caldas','name'=>'Caldas','lat'=>5.304766,'lng'=>-75.343986,'country_id'=>47],
        ['id'=>4718,'iso3'=>'18','slug'=>'caqueta','name'=>'Caquetá','lat'=>0.920357,'lng'=>-74.10575,'country_id'=>47],
        ['id'=>4785,'iso3'=>'85','slug'=>'casanare','name'=>'Casanare','lat'=>5.347141,'lng'=>-71.598421,'country_id'=>47],
        ['id'=>4719,'iso3'=>'19','slug'=>'cauca','name'=>'Cauca','lat'=>2.215982,'lng'=>-77.035712,'country_id'=>47],
        ['id'=>4720,'iso3'=>'20','slug'=>'cesar','name'=>'Cesar','lat'=>9.145445,'lng'=>-73.637344,'country_id'=>47],
        ['id'=>4727,'iso3'=>'27','slug'=>'choco','name'=>'Chocó','lat'=>6.146162,'lng'=>-77.045672,'country_id'=>47],
        ['id'=>4723,'iso3'=>'23','slug'=>'cordoba','name'=>'Córdoba','lat'=>8.412848,'lng'=>-75.857181,'country_id'=>47],
        ['id'=>4725,'iso3'=>'25','slug'=>'cundinamarca','name'=>'Cundinamarca','lat'=>4.959231,'lng'=>-74.015873,'country_id'=>47],
        ['id'=>4794,'iso3'=>'94','slug'=>'guainia','name'=>'Guainía','lat'=>2.794734,'lng'=>-68.874785,'country_id'=>47],
        ['id'=>4795,'iso3'=>'95','slug'=>'guaviare','name'=>'Guaviare','lat'=>2.019007,'lng'=>-72.164052,'country_id'=>47],
        ['id'=>4741,'iso3'=>'41','slug'=>'huila','name'=>'Huila','lat'=>2.456948,'lng'=>-75.636304,'country_id'=>47],
        ['id'=>4744,'iso3'=>'44','slug'=>'guajira','name'=>'La Guajira','lat'=>11.381143,'lng'=>-72.644624,'country_id'=>47],
        ['id'=>4747,'iso3'=>'47','slug'=>'magdalena','name'=>'Magdalena','lat'=>10.182133,'lng'=>-74.421113,'country_id'=>47],
        ['id'=>4750,'iso3'=>'50','slug'=>'meta','name'=>'Meta','lat'=>3.444878,'lng'=>-72.980353,'country_id'=>47],
        ['id'=>4752,'iso3'=>'52','slug'=>'nariño','name'=>'Nariño','lat'=>1.561046,'lng'=>-77.856224,'country_id'=>47],
        ['id'=>4754,'iso3'=>'54','slug'=>'norte-de-santander','name'=>'Norte de Santander','lat'=>7.933621,'lng'=>-72.860309,'country_id'=>47],
        ['id'=>4786,'iso3'=>'86','slug'=>'putumayo','name'=>'Putumayo','lat'=>0.530985,'lng'=>-75.914286,'country_id'=>47],
        ['id'=>4763,'iso3'=>'63','slug'=>'quindio','name'=>'Quindío','lat'=>4.449373,'lng'=>-75.696939,'country_id'=>47],
        ['id'=>4766,'iso3'=>'66','slug'=>'risaralda','name'=>'Risaralda','lat'=>4.979072,'lng'=>-75.93829,'country_id'=>47],
        ['id'=>4768,'iso3'=>'68','slug'=>'santander','name'=>'Santander','lat'=>6.632892,'lng'=>-73.506661,'country_id'=>47],
        ['id'=>4770,'iso3'=>'70','slug'=>'sucre','name'=>'Sucre','lat'=>9.129224,'lng'=>-75.079917,'country_id'=>47],
        ['id'=>4773,'iso3'=>'73','slug'=>'tolima','name'=>'Tolima','lat'=>4.03647,'lng'=>-75.224149,'country_id'=>47],
        ['id'=>4776,'iso3'=>'76','slug'=>'valle-del-cauca','name'=>'Valle del Cauca','lat'=>3.821084,'lng'=>-76.414717,'country_id'=>47],
        ['id'=>4797,'iso3'=>'97','slug'=>'vaupes','name'=>'Vaupés','lat'=>0.706768,'lng'=>-70.767959,'country_id'=>47],
        ['id'=>4799,'iso3'=>'99','slug'=>'vichada','name'=>'Vichada','lat'=>4.723156,'lng'=>-69.609656,'country_id'=>47],
      ]);
    }
}
