<?php
namespace App\Traits;
use App\Models\Element;


/**
 *
 */
class FormularTrait
{

    public static function parseFormular($formular) {
        
        $regex1 = '/(?:[A-Z][a-z]*|\d+|[()])/' ; 
         //example (8) ['H', 'O', 'C', 'H', '2', 'C', 'H', '2']

        $regex2 = '/([A-Z][a-z]*)(\d*)/';
         // example (6) ['H', 'O', 'C', 'H2', 'C', 'H2']
        // /([A-Z][a-z]*)(\d*)/g


        preg_match_all($regex2, $formular, $groups,  PREG_PATTERN_ORDER, 0);

        foreach ($groups[0] as $group) {
           preg_match_all($regex1, $group, $composition[],  PREG_PATTERN_ORDER, 0);
        }

        return ( array_merge(...$composition) );
                    
    }


	public static function massComposition ($composition)
    {
        $massCompositions = [];
        foreach ($composition as  $value) {
           $element = Element::where('symbol', $value[0] )->first();
           if(array_key_exists(1, $value)){
            $mass =  $element->atomic_mass * ($value[1]) ;
           }else{
                $mass =  $element->atomic_mass ;
           }
            
            array_push($massCompositions, [$value[0] => $mass ]);
        }
        return array_merge(...$massCompositions);

    }


    public static function molarMass ($composition)
    {
        $total = 0;
        foreach ($composition as  $value) {
           $element = Element::where('symbol', $value[0] )->first();

           // if composition has a number at index 1
            if(array_key_exists(1, $value)){
                $mass =  $element->atomic_mass * ($value[1]) ;
            }else{
                $mass =  $element->atomic_mass ;
            }
            // add up mass compositions
            $total+=$mass;
        }
        return $total;
    }


    public static function weightFraction($massCompositions, $molarMass)
    {
        $weightFractions = [];
        foreach ($massCompositions as $element => $massComposition) {
           array_push($weightFractions,  [$element => ($massComposition/$molarMass) ] );
        }

       return array_merge(...$weightFractions);
    }


}