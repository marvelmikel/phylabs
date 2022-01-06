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
        $composition = FormularTrait::parseFormular($formular);
        
        $massCompositions = FormularTrait::massComposition($composition); //corect

        $molarMass = FormularTrait::molarMass($composition); //corect

        $weightFractions = FormularTrait::weightFraction($massCompositions, $molarMass); //corect
        

        $partialDensities = $this->calcPartialDensity($weightFractions);

        $massRemovalCrossSections = $this->calcRemovalCrossSection($weightFractions);

        dd(
            [ $formular, 'title' => 'formular'],
            [ $composition, 'title' => 'composition'],
            [ $massCompositions, 'title' => 'massCompositions'],
            [ $molarMass, 'title' => 'molarMass'],
            [ $weightFractions, 'title' => 'weightFractions'],
            [ $partialDensities, 'title' => 'partialDensities'],
            [ $massRemovalCrossSections, 'title' => 'massRemovalCrossSections']
        );
    }

    

    public function calcRemovalCrossSection($weightFractions, $density = 1)
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

    public static function calcPartialDensity($weightFractions, $density = 1)
    {
        $calcPartialDensities = [];
        foreach ($weightFractions as $element => $weightFraction) {
           array_push($calcPartialDensities,  [$element => ($weightFraction * $density ) ] );
        }

       return (array_merge(...$calcPartialDensities));
    }
}
