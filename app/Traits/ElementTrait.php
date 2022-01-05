<?php
namespace App\Traits;

/**
 *
 */
class ElementTrait
{


    public static function weightFraction($elementMass, $compoundMass)
    {
        
    }

    public static function partialDensity($elementMass, $compoundMass)
    {
        $massCompositions = [];
        foreach ($composition as  $value) {
           $element = Element::where('symbol', $value[0] )->first();
           if(array_key_exists(1, $value)){
            $mass =  $element->atomic_mass * ($value[1]) ;
           }else{
                $mass =  $element->atomic_mass ;
           }
            
            array_push($massCompositions, [$value[0] => $mass, 'total' => ($mass+=$mass) ]);
        }
        return array_merge(...$massCompositions);
    }
}