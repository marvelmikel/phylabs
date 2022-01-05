<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\FormularTrait;
use App\Models\Element;


class NeutronXCSController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        return view('modules.neutrons.index');
    }

    public function fastNeutonPage()
    {
        return view('modules.neutrons.fast');
    }

    public function thermalNeutronPage()
    {
        return view('modules.neutrons.fast');
    }

   
    public function calcFastNeutronxcs(Request $request)
    {
        $composition = FormularTrait::parseFormular('NaOH+H2O+Cl2');
        
        $massCompositions = FormularTrait::massComposition($composition);

        $weightFractions = FormularTrait::weightFraction($massCompositions);
        
        $molarMass = FormularTrait::molarMass($composition);

        $partialDensities = $this->calcPartialDensity($weightFractions);

        $this->calcRemovalCrossSection($partialDensities);
    }

    

    public function calcRemovalCrossSection($partialDensities)
    {
        $removalCrossSections = [];
        foreach ($partialDensities as $element => $partialDensity) {
            $ele = Element::where('symbol' , $element)->first();
            if($ele){
                dd($ele);
            }
           // array_push($removalCrossSections,  [$element => ($value/$massCompositions['total']) ] );
        }

        // dd(array_merge(...$weightFractions));
    }

    public static function calcPartialDensity($weightFractions, $density = 3.6)
    {
        $calcPartialDensities = [];
        foreach ($weightFractions as $element => $weightFraction) {
           array_push($calcPartialDensities,  [$element => ($weightFraction * $density ) ] );
        }

       return (array_merge(...$calcPartialDensities));
    }
}
