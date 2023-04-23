<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesUsaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('states')->insert([
        ['id'=>227001,'iso3'=>'ak','slug'=>'alaska','name'=>'Alaska','lat'=>63.588753,'lng'=>-154.493062,'country_id'=>227],
        ['id'=>227002,'iso3'=>'al','slug'=>'alabama','name'=>'Alabama','lat'=>32.318231,'lng'=>-86.902298,'country_id'=>227],
        ['id'=>227003,'iso3'=>'ar','slug'=>'arkansas','name'=>'Arkansas','lat'=>35.20105,'lng'=>-91.831833,'country_id'=>227],
        ['id'=>227004,'iso3'=>'az','slug'=>'arizona','name'=>'Arizona','lat'=>34.048928,'lng'=>-111.093731,'country_id'=>227],
        ['id'=>227005,'iso3'=>'ca','slug'=>'california','name'=>'California','lat'=>36.778261,'lng'=>-119.417932,'country_id'=>227],
        ['id'=>227006,'iso3'=>'co','slug'=>'colorado','name'=>'Colorado','lat'=>39.550051,'lng'=>-105.782067,'country_id'=>227],
        ['id'=>227007,'iso3'=>'ct','slug'=>'connecticut','name'=>'Connecticut','lat'=>41.603221,'lng'=>-73.087749,'country_id'=>227],
        ['id'=>227008,'iso3'=>'dc','slug'=>'columbia','name'=>'District of Columbia','lat'=>38.905985,'lng'=>-77.033418,'country_id'=>227],
        ['id'=>227009,'iso3'=>'de','slug'=>'delaware','name'=>'Delaware','lat'=>38.910832,'lng'=>-75.52767,'country_id'=>227],
        ['id'=>227010,'iso3'=>'fl','slug'=>'florida','name'=>'Florida','lat'=>27.664827,'lng'=>-81.515754,'country_id'=>227],
        ['id'=>227011,'iso3'=>'ga','slug'=>'georgia','name'=>'Georgia','lat'=>32.157435,'lng'=>-82.907123,'country_id'=>227],
        ['id'=>227012,'iso3'=>'hi','slug'=>'hawaii','name'=>'Hawaii','lat'=>19.898682,'lng'=>-155.665857,'country_id'=>227],
        ['id'=>227013,'iso3'=>'ia','slug'=>'iowa','name'=>'Iowa','lat'=>41.878003,'lng'=>-93.097702,'country_id'=>227],
        ['id'=>227014,'iso3'=>'id','slug'=>'idaho','name'=>'Idaho','lat'=>44.068202,'lng'=>-114.742041,'country_id'=>227],
        ['id'=>227015,'iso3'=>'il','slug'=>'illinois','name'=>'Illinois','lat'=>40.633125,'lng'=>-89.398528,'country_id'=>227],
        ['id'=>227016,'iso3'=>'in','slug'=>'indiana','name'=>'Indiana','lat'=>40.551217,'lng'=>-85.602364,'country_id'=>227],
        ['id'=>227017,'iso3'=>'ks','slug'=>'kansas','name'=>'Kansas','lat'=>39.011902,'lng'=>-98.484246,'country_id'=>227],
        ['id'=>227018,'iso3'=>'ky','slug'=>'kentucky','name'=>'Kentucky','lat'=>37.839333,'lng'=>-84.270018,'country_id'=>227],
        ['id'=>227019,'iso3'=>'la','slug'=>'louisiana','name'=>'Louisiana','lat'=>31.244823,'lng'=>-92.145024,'country_id'=>227],
        ['id'=>227020,'iso3'=>'ma','slug'=>'massachusetts','name'=>'Massachusetts','lat'=>42.407211,'lng'=>-71.382437,'country_id'=>227],
        ['id'=>227021,'iso3'=>'md','slug'=>'maryland','name'=>'Maryland','lat'=>39.045755,'lng'=>-76.641271,'country_id'=>227],
        ['id'=>227022,'iso3'=>'me','slug'=>'maine','name'=>'Maine','lat'=>45.253783,'lng'=>-69.445469,'country_id'=>227],
        ['id'=>227023,'iso3'=>'mi','slug'=>'michigan','name'=>'Michigan','lat'=>44.314844,'lng'=>-85.602364,'country_id'=>227],
        ['id'=>227024,'iso3'=>'mn','slug'=>'minnesota','name'=>'Minnesota','lat'=>46.729553,'lng'=>-94.6859,'country_id'=>227],
        ['id'=>227025,'iso3'=>'mo','slug'=>'missouri','name'=>'Missouri','lat'=>37.964253,'lng'=>-91.831833,'country_id'=>227],
        ['id'=>227026,'iso3'=>'ms','slug'=>'mississippi','name'=>'Mississippi','lat'=>32.354668,'lng'=>-89.398528,'country_id'=>227],
        ['id'=>227027,'iso3'=>'mt','slug'=>'montana','name'=>'Montana','lat'=>46.879682,'lng'=>-110.362566,'country_id'=>227],
        ['id'=>227028,'iso3'=>'nc','slug'=>'north-carolina','name'=>'North Carolina','lat'=>35.759573,'lng'=>-79.0193,'country_id'=>227],
        ['id'=>227029,'iso3'=>'nd','slug'=>'north-dakota','name'=>'North Dakota','lat'=>47.551493,'lng'=>-101.002012,'country_id'=>227],
        ['id'=>227030,'iso3'=>'ne','slug'=>'nebraska','name'=>'Nebraska','lat'=>41.492537,'lng'=>-99.901813,'country_id'=>227],
        ['id'=>227031,'iso3'=>'nh','slug'=>'new-hampshire','name'=>'New Hampshire','lat'=>43.193852,'lng'=>-71.572395,'country_id'=>227],
        ['id'=>227032,'iso3'=>'nj','slug'=>'new-jersey','name'=>'New Jersey','lat'=>40.058324,'lng'=>-74.405661,'country_id'=>227],
        ['id'=>227033,'iso3'=>'nm','slug'=>'new-mexico','name'=>'New Mexico','lat'=>34.97273,'lng'=>-105.032363,'country_id'=>227],
        ['id'=>227034,'iso3'=>'nv','slug'=>'nevada','name'=>'Nevada','lat'=>38.80261,'lng'=>-116.419389,'country_id'=>227],
        ['id'=>227035,'iso3'=>'ny','slug'=>'new-york','name'=>'New York','lat'=>43.299428,'lng'=>-74.217933,'country_id'=>227],
        ['id'=>227036,'iso3'=>'oh','slug'=>'ohio','name'=>'Ohio','lat'=>40.417287,'lng'=>-82.907123,'country_id'=>227],
        ['id'=>227037,'iso3'=>'ok','slug'=>'oklahoma','name'=>'Oklahoma','lat'=>35.007752,'lng'=>-97.092877,'country_id'=>227],
        ['id'=>227038,'iso3'=>'or','slug'=>'oregon','name'=>'Oregon','lat'=>43.804133,'lng'=>-120.554201,'country_id'=>227],
        ['id'=>227039,'iso3'=>'pa','slug'=>'pennsylvania','name'=>'Pennsylvania','lat'=>41.203322,'lng'=>-77.194525,'country_id'=>227],
        ['id'=>227040,'iso3'=>'pr','slug'=>'puerto-rico','name'=>'Puerto Rico','lat'=>18.220833,'lng'=>-66.590149,'country_id'=>227],
        ['id'=>227041,'iso3'=>'ri','slug'=>'rhode-island','name'=>'Rhode Island','lat'=>41.580095,'lng'=>-71.477429,'country_id'=>227],
        ['id'=>227042,'iso3'=>'sc','slug'=>'south-carolina','name'=>'South Carolina','lat'=>33.836081,'lng'=>-81.163725,'country_id'=>227],
        ['id'=>227043,'iso3'=>'sd','slug'=>'south-dakota','name'=>'South Dakota','lat'=>43.969515,'lng'=>-99.901813,'country_id'=>227],
        ['id'=>227044,'iso3'=>'tn','slug'=>'tennessee','name'=>'Tennessee','lat'=>35.517491,'lng'=>-86.580447,'country_id'=>227],
        ['id'=>227045,'iso3'=>'tx','slug'=>'texas','name'=>'Texas','lat'=>31.968599,'lng'=>-99.901813,'country_id'=>227],
        ['id'=>227046,'iso3'=>'ut','slug'=>'utah','name'=>'Utah','lat'=>39.32098,'lng'=>-111.093731,'country_id'=>227],
        ['id'=>227047,'iso3'=>'va','slug'=>'virginia','name'=>'Virginia','lat'=>37.431573,'lng'=>-78.656894,'country_id'=>227],
        ['id'=>227048,'iso3'=>'vt','slug'=>'vermont','name'=>'Vermont','lat'=>44.558803,'lng'=>-72.577841,'country_id'=>227],
        ['id'=>227049,'iso3'=>'wa','slug'=>'washington','name'=>'Washington','lat'=>47.751074,'lng'=>-120.740139,'country_id'=>227],
        ['id'=>227050,'iso3'=>'wi','slug'=>'wisconsin','name'=>'Wisconsin','lat'=>43.78444,'lng'=>-88.787868,'country_id'=>227],
        ['id'=>227051,'iso3'=>'wv','slug'=>'west-virginia','name'=>'West Virginia','lat'=>38.597626,'lng'=>-80.454903,'country_id'=>227],
        ['id'=>227052,'iso3'=>'wy','slug'=>'wyoming','name'=>'Wyoming','lat'=>43.075968,'lng'=>-107.290284,'country_id'=>227],
      ]);
    }
}
