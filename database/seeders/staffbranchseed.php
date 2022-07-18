<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class staffbranchseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staffbranch = [
            ['staffNo'=>'SL21','sName'=>'John White','position'=>'Manager',
            'brancehNo'=>'B005','bAddress'=>'22 Deer Rd,London','salary'=>'30000'],

            ['staffNo'=>'SG21','sName'=>'Ann Beech','position'=>'Assistant',
            'brancehNo'=>'B003','bAddress'=>'163 Main St,Glasgow','salary'=>'12000'],

            ['staffNo'=>'SG14','sName'=>'David Ford','position'=>'Supervisor',
            'brancehNo'=>'B003','bAddress'=>'163 Main St,Glasgow','salary'=>'18000'],
        
            ['staffNo'=>'SA9','sName'=>'Marry Howe','position'=>'Assistant',
            'brancehNo'=>'B007','bAddress'=>'16 Argyll St,Aberdeen','salary'=>'9000'],

            ['staffNo'=>'SG5','sName'=>'Susan Brand','position'=>'Manager',
            'brancehNo'=>'B003','bAddress'=>'163 Main St,Glasgow','salary'=>'24000'],

            ['staffNo'=>'SL41','sName'=>'Julie Lee','position'=>'Assistant',
            'brancehNo'=>'B005','bAddress'=>'22 Deer Rd,London','salary'=>'9000'],
        ];
            
        DB::table('staffbranch')->insert($staffbranch);
    }
}
