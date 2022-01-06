<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Element;
use App\Models\NeutronParameter;

use Illuminate\Support\Facades\DB;



class NeutronParametersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('neutron_parameters')->truncate();

        /*

            ∑R/P

        */
            
        // Elements with atomic mass less than  8
        $elements = Element::where('atomic_number',  '<=', 8)->get(['symbol', 'atomic_number', 'density']);
        foreach ($elements as $key => $element) {
            NeutronParameter::create([
                'element' => $element->symbol,
                'mass_removal_xcs' => ( 0.190 * pow($element->atomic_number, -0.743 ) )

            ]);
        }

        // Elements with atomic mass greater than  8
        $elements = Element::where('atomic_number',  '>', 8)->get(['symbol', 'atomic_number' ]);

        foreach ($elements as $key => $element) {
        	NeutronParameter::create([
        		'element' => $element->symbol,
        		'mass_removal_xcs' => (0.125 * pow($element->atomic_number, -0.565) )

        	]);
        }


    }
}
