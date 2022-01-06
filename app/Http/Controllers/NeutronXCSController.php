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

        $massRemovalCrossSections = $this->calcRemovalCrossSection($partialDensities, $weightFractions, $density);

        dd(
            [ 'title' => 'formular', $formular],
            [ 'title' => 'density', $density],
            [ 'title' => 'composition', $composition],
            [ 'title' => 'massCompositions', $massCompositions],
            [ 'title' => 'molarMass', $molarMass],
            [ 'title' => 'weightFractions', $weightFractions],
            [ 'title' => 'partialDensities',  'description' => 'weightfraction of element * density of substance ', $partialDensities],
            [ 'title' => 'massRemovalCrossSections', 'description' => 'partialDensity of element * elements MassRemovalCrossSection', $massRemovalCrossSections]
        );
    }

    

    public function calcRemovalCrossSection($partialDensities, $weightFractions, $density)
    {

        $massRemovalCrossSections = [];
        $total = 0;
        foreach ($partialDensities as $element => $partialDensity) {
            $ele = Element::where('symbol' , $element)->first();
            if($ele){
                
                //(∑R/P)i   = ∑wi∑R/P
               $elementMassRemovalCrossSection = ($ele->neutronParams->mass_removal_xcs) * $weightFractions[$element];

               // ∑R = partialDensity *  ∑R/P
               $effectiveMassRemovalCrossSection =  ( $partialDensity * ($elementMassRemovalCrossSection) );
            }
           array_push($massRemovalCrossSections,  
                [
                    $element => $effectiveMassRemovalCrossSection,
                    'total' => $total+=$effectiveMassRemovalCrossSection
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
