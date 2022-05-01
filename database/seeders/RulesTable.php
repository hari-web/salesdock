<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rule;

class RulesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

       $rules = [
           ['name' => 'uploadSpeedLessThan100'],
           ['name' => 'uploadSpeedLessThan100andFiber'],
           ['name' => 'uploadSpeedLessThan100AndStaticIP'],
           ['name' => 'uploadSpeedLessThan100FiberAndStaticIP'],
           ['name' => 'downloadSpeedGreaterthan100'],
           ['name' => 'downloadSpeedGreaterthanAndFiber'],
           ['name' => 'downloadSpeedGreaterthanAndDialup'],
           ['name' => 'downloadSpeedGreaterthanAndDialupAndStaticIP']
       ];
            

       Rule::insert($rules);

       


    }
}
