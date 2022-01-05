<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Element;



class ElementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('elements')->truncate();

        $result = Http::get('https://neelpatel05.pythonanywhere.com/')->json();
        $elements = [];

      	foreach ($result as $key => $element) {
      		foreach ($element as $key => $value) {
  				$output = ltrim(strtolower(preg_replace('/[A-Z]([A-Z](?![a-z]))*/', '_$0', $key)), '_');
  				
  				if(is_array($value) ){
  					$array[ $output ]  = $value[0];

  				}else{
  					if($output == 'atomic_mass'){
	  					$value = (double) $value;
	  				}
  					$array[ $output ]  = $value;
  				}

  				$filtered = array_intersect_key($array,  /* main array*/
	                    array_flip( /* to be extracted */
	                      array('atomic_number', 'atomic_mass','name', 'symbol', 'density')
	               )
				);
  			}
  			array_push($elements, $filtered);
      	}

      	foreach ($elements as $key => $element) {
      		Element::create($element);
      	}

    }
}
