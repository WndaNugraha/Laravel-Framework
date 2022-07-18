<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class branchseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $branch = [
            ['brancehNo'=>'B005','bAddress'=>'22 Deer Rd,London'],
            ['brancehNo'=>'B007','bAddress'=>'16 Argyll St,Aberdeen'],
            ['brancehNo'=>'B003','bAddress'=>'163 Main St,Glasgow'],
        ];

        DB::table('branches')->insert($branch);
    }
}
