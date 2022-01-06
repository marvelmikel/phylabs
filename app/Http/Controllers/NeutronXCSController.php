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
        $formular= $request->formular;
        $density= $request->density;


        $composition = FormularTrait::parseFormular($formular);
        
        $massCompositions = FormularTrait::massComposition($composition); //corect

        $molarMass = FormularTrait::molarMass($composition); //corect

        $weightFractions = FormularTrait::weightFraction($massCompositions, $molarMass); //corect
        

        $partialDensities = $this->calcPartialDensity($weightFractions, $density);

        $massRemovalCrossSections = $this->calcRemovalCrossSection($weightFractions, $density);

        dd(
            [ 'title' => 'formular', $formular],
            [ 'title' => 'density', $formular],
            [ 'title' => 'composition', $composition],
            [ 'title' => 'massCompositions', $massCompositions],
            [ 'title' => 'molarMass', $molarMass],
            [ 'title' => 'weightFractions', $weightFractions],
            [ 'title' => 'partialDensities', $partialDensities],
            [ 'title' => 'massRemovalCrossSections', $massRemovalCrossSections]
        );
    }

    

    public function calcRemovalCrossSection($weightFractions, $density)
    {
        // = wi (∑R)I   

        $massRemovalCrossSections = [];
        foreach ($weightFractions as $element => $weightFraction) {
            $ele = Element::where('symbol' , $element)->first();
            if($ele){
               $elementMassRemovalCrossSection = $ele->neutronParams->mass_removal_xcs;
               $effectiveMassRemovalCrossSection = $density * ( $weightFraction * ($elementMassRemovalCrossSection) );
            }
           array_push($massRemovalCrossSections,  
                [
                    $element => $effectiveMassRemovalCrossSection
                ] );
        }


        return (array_merge(...$massRemovalCrossSections));
    }

    public static function calcPartialDensity($weightFractions, $density)
    {
        $calcPartialDensities = [];
        foreach ($weightFractions as $element => $weightFraction) {
           array_push($calcPartialDensities,  [$element => ($weightFraction * $density ) ] );
        }

       return (array_merge(...$calcPartialDensities));
    }
}
