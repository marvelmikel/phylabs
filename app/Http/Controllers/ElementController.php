<?php

namespace App\Http\Controllers;

use App\Models\Element;
use App\Models\Compound;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
//use Request;


class ElementController extends Controller
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
    public function fastneutron()
    {
        return view('modules.neutrons.fast');
    }
  
  
    public function faststore(Request $request)
    {
        //CREATING A DATABASE FOR USER'S INPUTTED COMPOUND
        // $store = new Compound();
        //      $store->name = $request->formular;
        //     $save = $store->save();
            //dd($save);

            ///PLEASE NOTE EVERY PARAMETER FROM THIS FUNCTION WAS PASSED TO THE CALCULATION FUNCTION 
            //SO THAT WE WILL BE ABLE TO GET THE LAST ID COMPOUND
           
             
    }




    public function calculation(Request $request)
    {
        //Requesting compound from the user and saving it
        $store = new Compound();
        $store->name = $request->formular;
       $save = $store->save();
        $id = $store->id; // Get data id
        
        $test = Compound::where('id', '=', $id )->first();
        $swt = $test->name;
//dd($swt);
        //This code split the compound inputted by the user(which is saved in compound database) into an array
        $re = '/(?:[A-Z][a-z]*|\|[()])/';
//This line of code is assigned to $keywords
        preg_match_all($re, $swt,$keywords , PREG_PATTERN_ORDER, 0);
       ///$win=var_dump($keywords);
$x =$keywords[0];
$k = array_unique($keywords[0]);



  
 /////////////////////////////////-------PHASE 0-----------////////////////////////////////

       $element = Element::where('symbol', '=', $k[0] )->first();
       //PHASE 
       $symbol = $element->symbol;
       $name = $element->name;
       $z = $element->atomic_number;
       $wi = $element->atomic_weight;
       $p = $element->density;
       
       //PHASE 2
       if($z <= 8){                         // when Z <= 8
        //Calculations for the mass cross section
           $a = 0.19 * $z - 0.743;  //summation R/P = 0.19z - 0.743
           //Calculations for the cross section
           $lessthan = $p * $z * $wi * $a; //summation R = PZWi(sumation R/P)i  
       }else {                               // when Z > 8
        //Calculations for the mass cross section
           $b = 0.125 * $z - 0.565  ;            //summation R/P = 0.125z - 0.565
           //Calculations for the cross section
           $greaterthan = $p * $z * $wi * $b;    //summation R = PZWi(sumation R/P)i 
       }
    
       if (empty($a)) {     //This is for mass removal cross section
           $crossmass = $b;
       }else {
           $crossmass = $a;
       }
         if (empty($lessthan)) {        //The variable result has been assigned to lessthan and greaterthan var..
             $result = $greaterthan;    //so it will output anyone that has value
         }else {
             $result = $lessthan;
         }
           $data = array($symbol,$name,$crossmass,$wi,$p,$result);
    

 /////////////////////////////////-------PHASE 1-----------////////////////////////////////
                if(empty($k[1])){
                    $data1 = NULL;
                }else {
                $element = Element::where('symbol', '=', $k[1] )->first();
                //PHASE 
                $symbol1 = $element->symbol;
                $name1 = $element->name;
                $z1 = $element->atomic_number;
                $wi1 = $element->atomic_weight;
                $p1 = $element->density;
                
                //PHASE 2
                if($z1 <= 8){                         // when Z <= 8
                //Calculations for the mass cross section
                    $a1 = 0.19 * $z1 - 0.743;  //summation R/P = 0.19z - 0.743
                    //Calculations for the cross section
                    $lessthan1 = $p1 * $z1 * $wi1 * $a1; //summation R = PZWi(sumation R/P)i  
                }else {                               // when Z > 8
                //Calculations for the mass cross section
                    $b1 = 0.125 * $z1 - 0.565  ;            //summation R/P = 0.125z - 0.565
                    //Calculations for the cross section
                    $greaterthan1 = $p1 * $z1 * $wi1 * $b1;    //summation R = PZWi(sumation R/P)i 
                }
            
                if (empty($a1)) {     //This is for mass removal cross section
                    $crossmass1 = $b1;
                }else {
                    $crossmass1 = $a1;
                }
                if (empty($lessthan1)) {        //The variable result has been assigned to lessthan and greaterthan var..
                    $result1 = $greaterthan1;    //so it will output anyone that has value
                }else {
                    $result1 = $lessthan1;
                }
                    $data1 = array($symbol1,$name1,$crossmass1,$wi1,$p1,$result1);
                    }
 /////////////////////////////////-------PHASE 2-----------////////////////////////////////
            if(empty($k[2])){
                $data2 = NULL;
            }else {
        $element = Element::where('symbol', '=', $k[2] )->first();
        //PHASE 
        $symbol2 = $element->symbol;
        $name2 = $element->name;
        $z2 = $element->atomic_number;
        $wi2 = $element->atomic_weight;
        $p2 = $element->density;
       
        //PHASE 2
        if($z2 <= 8){                         // when Z <= 8
        //Calculations for the mass cross section
            $a2 = 0.19 * $z2 - 0.743;  //summation R/P = 0.19z - 0.743
            //Calculations for the cross section
            $lessthan2 = $p2 * $z2 * $wi2 * $a2; //summation R = PZWi(sumation R/P)i  
        }else {                               // when Z > 8
        //Calculations for the mass cross section
            $b2 = 0.125 * $z2 - 0.565  ;            //summation R/P = 0.125z - 0.565
            //Calculations for the cross section
            $greaterthan2 = $p2 * $z2 * $wi2 * $b2;    //summation R = PZWi(sumation R/P)i 
        }
    
        if (empty($a2)) {     //This is for mass removal cross section
            $crossmass2 = $b2;
        }else {
            $crossmass2 = $a2;
        }
        if (empty($lessthan2)) {        //The variable result has been assigned to lessthan and greaterthan var..
            $result2 = $greaterthan2;    //so it will output anyone that has value
        }else {
            $result2 = $lessthan2;
        }
            $data2 = array($symbol2,$name2,$crossmass2,$wi2,$p2,$result2);
            }
        /////////////////////////////////-------PHASE 3-----------////////////////////////////////
        if(empty($k[3])){
            $data3 = NULL;
        }else {
        $element = Element::where('symbol', '=', $k[3] )->first();
        //PHASE 
        $symbol3 = $element->symbol;
        $name3 = $element->name;
        $z3 = $element->atomic_number;
        $wi3 = $element->atomic_weight;
        $p3 = $element->density;
      
        //PHASE 2
        if($z3 <= 8){                         // when Z <= 8
        //Calculations for the mass cross section
            $a3 = 0.19 * $z3 - 0.743;  //summation R/P = 0.19z - 0.743
            //Calculations for the cross section
            $lessthan3 = $p3 * $z3 * $wi3 * $a3; //summation R = PZWi(sumation R/P)i  
        }else {                               // when Z > 8
        //Calculations for the mass cross section
            $b3 = 0.125 * $z3 - 0.565  ;            //summation R/P = 0.125z - 0.565
            //Calculations for the cross section
            $greaterthan3 = $p3 * $z3 * $wi3 * $b3;    //summation R = PZWi(sumation R/P)i 
        }
       
        if (empty($a3)) {     //This is for mass removal cross section
            $crossmass3 = $b3;
        }else {
            $crossmass3 = $a3;
        }
            if (empty($lessthan3)) {        //The variable result has been assigned to lessthan and greaterthan var..
                $result3 = $greaterthan3;    //so it will output anyone that has value
            }else {
                $result3 = $lessthan3;
            }
            $data3 = array($symbol3,$name3,$crossmass3,$wi3,$p3,$result3);
       
            }

      /////////////////////////////////-------PHASE 4-----------////////////////////////////////
                    if(empty($k[4])){
                        $data4 = NULL;
                    }else {
                    $element = Element::where('symbol', '=', $k[4] )->first();
                    //PHASE 
                    $symbol4 = $element->symbol;
                    $name4 = $element->name;
                    $z4 = $element->atomic_number;
                    $wi4 = $element->atomic_weight;
                    $p4 = $element->density;
                    
                    //PHASE 2
                    if($z4 <= 8){                         // when Z <= 8
                    //Calculations for the mass cross section
                        $a4 = 0.19 * $z4 - 0.743;  //summation R/P = 0.19z - 0.743
                        //Calculations for the cross section
                        $lessthan4 = $p4 * $z4 * $wi4 * $a4; //summation R = PZWi(sumation R/P)i  
                    }else {                               // when Z > 8
                    //Calculations for the mass cross section
                        $b4 = 0.125 * $z4 - 0.565  ;            //summation R/P = 0.125z - 0.565
                        //Calculations for the cross section
                        $greaterthan4 = $p4 * $z4 * $wi4 * $b4;    //summation R = PZWi(sumation R/P)i 
                    }
                
                    if (empty($a4)) {     //This is for mass removal cross section
                        $crossmass4 = $b4;
                    }else {
                        $crossmass4 = $a4;
                    }
                        if (empty($lessthan4)) {        //The variable result has been assigned to lessthan and 
                            $result4 = $greaterthan4;    //so it will output anyone that has value
                        }else {
                            $result4 = $lessthan4;
                        }
                        $data4 = array($symbol4,$name4,$crossmass4,$wi4,$p4,$result4);
                    
                    
                    
                        }
          /////////////////////////////////-------PHASE 5-----------////////////////////////////////
        if(empty($k[5])){
            $data5 = NULL;
        }else {
        $element = Element::where('symbol', '=', $k[5] )->first();
        //PHASE 
        $symbol5 = $element->symbol;
        $name5 = $element->name;
        $z5 = $element->atomic_number;
        $wi5 = $element->atomic_weight;
        $p5 = $element->density;
      
        //PHASE 2
        if($z5 <= 8){                         // when Z <= 8
        //Calculations for the mass cross section
            $a5 = 0.19 * $z5 - 0.743;  //summation R/P = 0.19z - 0.743
            //Calculations for the cross section
            $lessthan5 = $p5 * $z5 * $wi5 * $a5; //summation R = PZWi(sumation R/P)i  
        }else {                               // when Z > 8
        //Calculations for the mass cross section
            $b5 = 0.125 * $z5 - 0.565  ;            //summation R/P = 0.125z - 0.565
            //Calculations for the cross section
            $greaterthan5 = $p5 * $z5 * $wi5 * $b5;    //summation R = PZWi(sumation R/P)i 
        }
       
        if (empty($a5)) {     //This is for mass removal cross section
            $crossmass5 = $b5;
        }else {
            $crossmass5 = $a5;
        }
            if (empty($lessthan5)) {        //The variable result has been assigned to lessthan and 
                $result5 = $greaterthan5;    //so it will output anyone that has value
            }else {
                $result5 = $lessthan5;
            }
            $data5 = array($symbol5,$name5,$crossmass5,$wi5,$p5,$result5);
       
        
        
            }
                    /////////////////////////////////-------PHASE 6-----------////////////////////////////////
        if(empty($k[6])){
            $data6 = NULL;
        }else {
        $element = Element::where('symbol', '=', $k[6] )->first();
        //PHASE 
        $symbol6 = $element->symbol;
        $name6 = $element->name;
        $z6 = $element->atomic_number;
        $wi6 = $element->atomic_weight;
        $p6 = $element->density;
      
        //PHASE 2
        if($z6 <= 8){                         // when Z <= 8
        //Calculations for the mass cross section
            $a6 = 0.19 * $z6 - 0.743;  //summation R/P = 0.19z - 0.743
            //Calculations for the cross section
            $lessthan6 = $p6 * $z6 * $wi6 * $a6; //summation R = PZWi(sumation R/P)i  
        }else {                               // when Z > 8
        //Calculations for the mass cross section
            $b6 = 0.125 * $z6 - 0.565  ;            //summation R/P = 0.125z - 0.565
            //Calculations for the cross section
            $greaterthan6 = $p6 * $z6 * $wi6 * $b6;    //summation R = PZWi(sumation R/P)i 
        }
       
        if (empty($a6)) {     //This is for mass removal cross section
            $crossmass6 = $b6;
        }else {
            $crossmass6 = $a6;
        }
            if (empty($lessthan6)) {        //The variable result has been assigned to lessthan and 
                $result6 = $greaterthan6;    //so it will output anyone that has value
            }else {
                $result6 = $lessthan6;
            }
            $data6 = array($symbol6,$name6,$crossmass6,$wi6,$p6,$result6);
       
        
        
            }
        
                    /////////////////////////////////-------PHASE 7-----------////////////////////////////////
        if(empty($k[7])){
            $data7 = NULL;
        }else {
        $element = Element::where('symbol', '=', $k[7] )->first();
        //PHASE 
        $symbol7 = $element->symbol;
        $name7 = $element->name;
        $z7 = $element->atomic_number;
        $wi7 = $element->atomic_weight;
        $p7 = $element->density;
      
        //PHASE 2
        if($z7 <= 8){                         // when Z <= 8
        //Calculations for the mass cross section
            $a7 = 0.19 * $z7 - 0.743;  //summation R/P = 0.19z - 0.743
            //Calculations for the cross section
            $lessthan7 = $p7 * $z7 * $wi7 * $a7; //summation R = PZWi(sumation R/P)i  
        }else {                               // when Z > 8
        //Calculations for the mass cross section
            $b7 = 0.125 * $z7 - 0.565  ;            //summation R/P = 0.125z - 0.565
            //Calculations for the cross section
            $greaterthan7 = $p7 * $z7 * $wi7 * $b7;    //summation R = PZWi(sumation R/P)i 
        }
       
        if (empty($a7)) {     //This is for mass removal cross section
            $crossmass7 = $b7;
        }else {
            $crossmass7 = $a7;
        }
            if (empty($lessthan7)) {        //The variable result has been assigned to lessthan and 
                $result7 = $greaterthan7;    //so it will output anyone that has value
            }else {
                $result7 = $lessthan7;
            }
            $data7 = array($symbol7,$name7,$crossmass7,$wi7,$p7,$result7);
       
        
        
            }
                /////////////////////////////////-------PHASE 8-----------////////////////////////////////
                if(empty($k[8])){
                    $data8 = NULL;
                }else {
                $element = Element::where('symbol', '=', $k[8] )->first();
                //PHASE 
                $symbol8 = $element->symbol;
                $name8 = $element->name;
                $z8 = $element->atomic_number;
                $wi8 = $element->atomic_weight;
                $p8 = $element->density;
      
                //PHASE 2
                if($z8 <= 8){                         // when Z <= 8
                //Calculations for the mass cross section
                    $a8 = 0.19 * $z8 - 0.743;  //summation R/P = 0.19z - 0.743
                    //Calculations for the cross section
                    $lessthan8 = $p8 * $z8 * $wi8 * $a8; //summation R = PZWi(sumation R/P)i  
                }else {                               // when Z > 8
                //Calculations for the mass cross section
                    $b8 = 0.125 * $z8 - 0.565  ;            //summation R/P = 0.125z - 0.565
                    //Calculations for the cross section
                    $greaterthan8 = $p8 * $z8 * $wi8 * $b8;    //summation R = PZWi(sumation R/P)i 
                }
       
                if (empty($a8)) {     //This is for mass removal cross section
                    $crossmass8 = $b8;
                }else {
                    $crossmass8 = $a8;
                }
                    if (empty($lessthan8)) {        //The variable result has been assigned to lessthan and 
                        $result8 = $greaterthan8;    //so it will output anyone that has value
                    }else {
                        $result8 = $lessthan8;
                    }
                    $data8 = array($symbol8,$name8,$crossmass8,$wi8,$p8,$result8);
       
        
        
                    }
                            /////////////////////////////////-------PHASE 9-----------////////////////////////////////
                if(empty($k[9])){
                    $data9 = NULL;
                }else {
                $element = Element::where('symbol', '=', $k[9] )->first();
                //PHASE 
                $symbol9 = $element->symbol;
                $name9 = $element->name;
                $z9 = $element->atomic_number;
                $wi9 = $element->atomic_weight;
                $p9 = $element->density;
      
                //PHASE 2
                if($z9 <= 8){                         // when Z <= 8
                //Calculations for the mass cross section
                    $a9 = 0.19 * $z9 - 0.743;  //summation R/P = 0.19z - 0.743
                    //Calculations for the cross section
                    $lessthan9 = $p9 * $z9 * $wi9 * $a9; //summation R = PZWi(sumation R/P)i  
                }else {                               // when Z > 9
                //Calculations for the mass cross section
                    $b9 = 0.125 * $z9 - 0.565  ;            //summation R/P = 0.125z - 0.565
                    //Calculations for the cross section
                    $greaterthan9 = $p9 * $z9 * $wi9 * $b9;    //summation R = PZWi(sumation R/P)i 
                }
       
                if (empty($a9)) {     //This is for mass removal cross section
                    $crossmass9 = $b9;
                }else {
                    $crossmass9 = $a9;
                }
                    if (empty($lessthan9)) {        //The variable result has been assigned to lessthan and 
                        $result9 = $greaterthan9;    //so it will output anyone that has value
                    }else {
                        $result9 = $lessthan9;
                    }
                    $data9 = array($symbol9,$name9,$crossmass9,$wi9,$p9,$result9);
       
        
        
                    }




 ////////////////////////////////////////////-------------TOTAL Σ{R} (cm−1)--------------------///////////////////////////////////////////////////


 /////////////////////////////////-------PHASE 0-----------////////////////////////////////

 $element = Element::where('symbol', '=', $x[0] )->first();
 //PHASE 
 $symbol = $element->symbol;
 $name = $element->name;
 $z = $element->atomic_number;
 $wi = $element->atomic_weight;
 $p = $element->density;
 
 //PHASE 2
 if($z <= 8){                         // when Z <= 8
  //Calculations for the mass cross section
     $a = 0.19 * $z - 0.743;  //summation R/P = 0.19z - 0.743
     //Calculations for the cross section
     $lessthan = $p * $z * $wi * $a; //summation R = PZWi(sumation R/P)i  
 }else {                               // when Z > 8
  //Calculations for the mass cross section
     $b = 0.125 * $z - 0.565  ;            //summation R/P = 0.125z - 0.565
     //Calculations for the cross section
     $greaterthan = $p * $z * $wi * $b;    //summation R = PZWi(sumation R/P)i 
 }

 if (empty($a)) {     //This is for mass removal cross section
     $crossmass = $b;
 }else {
     $crossmass = $a;
 }
   if (empty($lessthan)) {        //The variable result has been assigned to lessthan and greaterthan var..
       $result = $greaterthan;    //so it will output anyone that has value
   }else {
       $result = $lessthan;
   }
     $Tdata = array($symbol,$name,$crossmass,$wi,$p,$result);


/////////////////////////////////-------PHASE 1-----------////////////////////////////////
          if(empty($x[1])){
          }else {
          $element = Element::where('symbol', '=', $x[1] )->first();
          //PHASE 
          $symbol1 = $element->symbol;
          $name1 = $element->name;
          $z1 = $element->atomic_number;
          $wi1 = $element->atomic_weight;
          $p1 = $element->density;
          
          //PHASE 2
          if($z1 <= 8){                         // when Z <= 8
          //Calculations for the mass cross section
          }else {                               // when Z > 8
          //Calculations for the mass cross section
              $b1 = 0.125 * $z1 - 0.565  ;            //summation R/P = 0.125z - 0.565
              //Calculations for the cross section
              $greaterthan1 = $p1 * $z1 * $wi1 * $b1;    //summation R = PZWi(sumation R/P)i 
          }
      
          if (empty($a1)) {     //This is for mass removal cross section
              $crossmass1 = $b1;
          }else {
              $crossmass1 = $a1;
          }
          if (empty($lessthan1)) {        //The variable result has been assigned to lessthan and greaterthan var..
              $result1 = $greaterthan1;    //so it will output anyone that has value
          }else {
              $result1 = $lessthan1;
          }
              $Tdata1 = array($symbol1,$name1,$crossmass1,$wi1,$p1,$result1);
              }
/////////////////////////////////-------PHASE 2-----------////////////////////////////////
      if(empty($x[2])){
          $Tdata2 = NULL;
      }else {
  $element = Element::where('symbol', '=', $x[2] )->first();
  //PHASE 
  $symbol2 = $element->symbol;
  $name2 = $element->name;
  $z2 = $element->atomic_number;
  $wi2 = $element->atomic_weight;
  $p2 = $element->density;
 
  //PHASE 2
  if($z2 <= 8){                         // when Z <= 8
  //Calculations for the mass cross section
      $a2 = 0.19 * $z2 - 0.743;  //summation R/P = 0.19z - 0.743
      //Calculations for the cross section
      $lessthan2 = $p2 * $z2 * $wi2 * $a2; //summation R = PZWi(sumation R/P)i  
  }else {                               // when Z > 8
  //Calculations for the mass cross section
      $b2 = 0.125 * $z2 - 0.565  ;            //summation R/P = 0.125z - 0.565
      //Calculations for the cross section
      $greaterthan2 = $p2 * $z2 * $wi2 * $b2;    //summation R = PZWi(sumation R/P)i 
  }

  if (empty($a2)) {     //This is for mass removal cross section
      $crossmass2 = $b2;
  }else {
      $crossmass2 = $a2;
  }
  if (empty($lessthan2)) {        //The variable result has been assigned to lessthan and greaterthan var..
      $result2 = $greaterthan2;    //so it will output anyone that has value
  }else {
      $result2 = $lessthan2;
  }
      $Tdata2 = array($symbol2,$name2,$crossmass2,$wi2,$p2,$result2);
      }
  /////////////////////////////////-------PHASE 3-----------////////////////////////////////
  if(empty($x[3])){
      $Tdata3 = NULL;
  }else {
  $element = Element::where('symbol', '=', $x[3] )->first();
  //PHASE 
  $symbol3 = $element->symbol;
  $name3 = $element->name;
  $z3 = $element->atomic_number;
  $wi3 = $element->atomic_weight;
  $p3 = $element->density;

  //PHASE 2
  if($z3 <= 8){                         // when Z <= 8
  //Calculations for the mass cross section
      $a3 = 0.19 * $z3 - 0.743;  //summation R/P = 0.19z - 0.743
      //Calculations for the cross section
      $lessthan3 = $p3 * $z3 * $wi3 * $a3; //summation R = PZWi(sumation R/P)i  
  }else {                               // when Z > 8
  //Calculations for the mass cross section
      $b3 = 0.125 * $z3 - 0.565  ;            //summation R/P = 0.125z - 0.565
      //Calculations for the cross section
      $greaterthan3 = $p3 * $z3 * $wi3 * $b3;    //summation R = PZWi(sumation R/P)i 
  }
 
  if (empty($a3)) {     //This is for mass removal cross section
      $crossmass3 = $b3;
  }else {
      $crossmass3 = $a3;
  }
      if (empty($lessthan3)) {        //The variable result has been assigned to lessthan and greaterthan var..
          $result3 = $greaterthan3;    //so it will output anyone that has value
      }else {
          $result3 = $lessthan3;
      }
      $Tdata3 = array($symbol3,$name3,$crossmass3,$wi3,$p3,$result3);
 
      }

/////////////////////////////////-------PHASE 4-----------////////////////////////////////
              if(empty($x[4])){
                  $Tdata4 = NULL;
              }else {
              $element = Element::where('symbol', '=', $x[4] )->first();
              //PHASE 
              $symbol4 = $element->symbol;
              $name4 = $element->name;
              $z4 = $element->atomic_number;
              $wi4 = $element->atomic_weight;
              $p4 = $element->density;
              
              //PHASE 2
              if($z4 <= 8){                         // when Z <= 8
              //Calculations for the mass cross section
                  $a4 = 0.19 * $z4 - 0.743;  //summation R/P = 0.19z - 0.743
                  //Calculations for the cross section
                  $lessthan4 = $p4 * $z4 * $wi4 * $a4; //summation R = PZWi(sumation R/P)i  
              }else {                               // when Z > 8
              //Calculations for the mass cross section
                  $b4 = 0.125 * $z4 - 0.565  ;            //summation R/P = 0.125z - 0.565
                  //Calculations for the cross section
                  $greaterthan4 = $p4 * $z4 * $wi4 * $b4;    //summation R = PZWi(sumation R/P)i 
              }
          
              if (empty($a4)) {     //This is for mass removal cross section
                  $crossmass4 = $b4;
              }else {
                  $crossmass4 = $a4;
              }
                  if (empty($lessthan4)) {        //The variable result has been assigned to lessthan and 
                      $result4 = $greaterthan4;    //so it will output anyone that has value
                  }else {
                      $result4 = $lessthan4;
                  }
                  $Tdata4 = array($symbol4,$name4,$crossmass4,$wi4,$p4,$result4);
              
              
              
                  }
    /////////////////////////////////-------PHASE 5-----------////////////////////////////////
  if(empty($x[5])){
      $Tdata5 = NULL;
  }else {
  $element = Element::where('symbol', '=', $x[5] )->first();
  //PHASE 
  $symbol5 = $element->symbol;
  $name5 = $element->name;
  $z5 = $element->atomic_number;
  $wi5 = $element->atomic_weight;
  $p5 = $element->density;

  //PHASE 2
  if($z5 <= 8){                         // when Z <= 8
  //Calculations for the mass cross section
      $a5 = 0.19 * $z5 - 0.743;  //summation R/P = 0.19z - 0.743
      //Calculations for the cross section
      $lessthan5 = $p5 * $z5 * $wi5 * $a5; //summation R = PZWi(sumation R/P)i  
  }else {                               // when Z > 8
  //Calculations for the mass cross section
      $b5 = 0.125 * $z5 - 0.565  ;            //summation R/P = 0.125z - 0.565
      //Calculations for the cross section
      $greaterthan5 = $p5 * $z5 * $wi5 * $b5;    //summation R = PZWi(sumation R/P)i 
  }
 
  if (empty($a5)) {     //This is for mass removal cross section
      $crossmass5 = $b5;
  }else {
      $crossmass5 = $a5;
  }
      if (empty($lessthan5)) {        //The variable result has been assigned to lessthan and 
          $result5 = $greaterthan5;    //so it will output anyone that has value
      }else {
          $result5 = $lessthan5;
      }
      $Tdata5 = array($symbol5,$name5,$crossmass5,$wi5,$p5,$result5);
 
  
  
      }
              /////////////////////////////////-------PHASE 6-----------////////////////////////////////
  if(empty($x[6])){
      $Tdata6 = NULL;
  }else {
  $element = Element::where('symbol', '=', $x[6] )->first();
  //PHASE 
  $symbol6 = $element->symbol;
  $name6 = $element->name;
  $z6 = $element->atomic_number;
  $wi6 = $element->atomic_weight;
  $p6 = $element->density;

  //PHASE 2
  if($z6 <= 8){                         // when Z <= 8
  //Calculations for the mass cross section
      $a6 = 0.19 * $z6 - 0.743;  //summation R/P = 0.19z - 0.743
      //Calculations for the cross section
      $lessthan6 = $p6 * $z6 * $wi6 * $a6; //summation R = PZWi(sumation R/P)i  
  }else {                               // when Z > 8
  //Calculations for the mass cross section
      $b6 = 0.125 * $z6 - 0.565  ;            //summation R/P = 0.125z - 0.565
      //Calculations for the cross section
      $greaterthan6 = $p6 * $z6 * $wi6 * $b6;    //summation R = PZWi(sumation R/P)i 
  }
 
  if (empty($a6)) {     //This is for mass removal cross section
      $crossmass6 = $b6;
  }else {
      $crossmass6 = $a6;
  }
      if (empty($lessthan6)) {        //The variable result has been assigned to lessthan and 
          $result6 = $greaterthan6;    //so it will output anyone that has value
      }else {
          $result6 = $lessthan6;
      }
      $Tdata6 = array($symbol6,$name6,$crossmass6,$wi6,$p6,$result6);
 
  
  
      }
  
              /////////////////////////////////-------PHASE 7-----------////////////////////////////////
  if(empty($x[7])){
      $Tdata7 = NULL;
  }else {
  $element = Element::where('symbol', '=', $x[7] )->first();
  //PHASE 
  $symbol7 = $element->symbol;
  $name7 = $element->name;
  $z7 = $element->atomic_number;
  $wi7 = $element->atomic_weight;
  $p7 = $element->density;

  //PHASE 2
  if($z7 <= 8){                         // when Z <= 8
  //Calculations for the mass cross section
      $a7 = 0.19 * $z7 - 0.743;  //summation R/P = 0.19z - 0.743
      //Calculations for the cross section
      $lessthan7 = $p7 * $z7 * $wi7 * $a7; //summation R = PZWi(sumation R/P)i  
  }else {                               // when Z > 8
  //Calculations for the mass cross section
      $b7 = 0.125 * $z7 - 0.565  ;            //summation R/P = 0.125z - 0.565
      //Calculations for the cross section
      $greaterthan7 = $p7 * $z7 * $wi7 * $b7;    //summation R = PZWi(sumation R/P)i 
  }
 
  if (empty($a7)) {     //This is for mass removal cross section
      $crossmass7 = $b7;
  }else {
      $crossmass7 = $a7;
  }
      if (empty($lessthan7)) {        //The variable result has been assigned to lessthan and 
          $result7 = $greaterthan7;    //so it will output anyone that has value
      }else {
          $result7 = $lessthan7;
      }
      $Tdata7 = array($symbol7,$name7,$crossmass7,$wi7,$p7,$result7);
 
  
  
      }
          /////////////////////////////////-------PHASE 8-----------////////////////////////////////
          if(empty($x[8])){
              $Tdata8 = NULL;
          }else {
          $element = Element::where('symbol', '=', $x[8] )->first();
          //PHASE 
          $symbol8 = $element->symbol;
          $name8 = $element->name;
          $z8 = $element->atomic_number;
          $wi8 = $element->atomic_weight;
          $p8 = $element->density;

          //PHASE 2
          if($z8 <= 8){                         // when Z <= 8
          //Calculations for the mass cross section
              $a8 = 0.19 * $z8 - 0.743;  //summation R/P = 0.19z - 0.743
              //Calculations for the cross section
              $lessthan8 = $p8 * $z8 * $wi8 * $a8; //summation R = PZWi(sumation R/P)i  
          }else {                               // when Z > 8
          //Calculations for the mass cross section
              $b8 = 0.125 * $z8 - 0.565  ;            //summation R/P = 0.125z - 0.565
              //Calculations for the cross section
              $greaterthan8 = $p8 * $z8 * $wi8 * $b8;    //summation R = PZWi(sumation R/P)i 
          }
 
          if (empty($a8)) {     //This is for mass removal cross section
              $crossmass8 = $b8;
          }else {
              $crossmass8 = $a8;
          }
              if (empty($lessthan8)) {        //The variable result has been assigned to lessthan and 
                  $result8 = $greaterthan8;    //so it will output anyone that has value
              }else {
                  $result8 = $lessthan8;
              }
              $Tdata8 = array($symbol8,$name8,$crossmass8,$wi8,$p8,$result8);
 
  
  
              }
                      /////////////////////////////////-------PHASE 9-----------////////////////////////////////
          if(empty($x[9])){
              $Tdata9 = NULL;
          }else {
          $element = Element::where('symbol', '=', $x[9] )->first();
          //PHASE 
          $symbol9 = $element->symbol;
          $name9 = $element->name;
          $z9 = $element->atomic_number;
          $wi9 = $element->atomic_weight;
          $p9 = $element->density;

          //PHASE 2
          if($z9 <= 8){                         // when Z <= 8
          //Calculations for the mass cross section
              $a9 = 0.19 * $z9 - 0.743;  //summation R/P = 0.19z - 0.743
              //Calculations for the cross section
              $lessthan9 = $p9 * $z9 * $wi9 * $a9; //summation R = PZWi(sumation R/P)i  
          }else {                               // when Z > 9
          //Calculations for the mass cross section
              $b9 = 0.125 * $z9 - 0.565  ;            //summation R/P = 0.125z - 0.565
              //Calculations for the cross section
              $greaterthan9 = $p9 * $z9 * $wi9 * $b9;    //summation R = PZWi(sumation R/P)i 
          }
 
          if (empty($a9)) {     //This is for mass removal cross section
              $crossmass9 = $b9;
          }else {
              $crossmass9 = $a9;
          }
              if (empty($lessthan9)) {        //The variable result has been assigned to lessthan and 
                  $result9 = $greaterthan9;    //so it will output anyone that has value
              }else {
                  $result9 = $lessthan9;
              }
              $Tdata9 = array($symbol9,$name9,$crossmass9,$wi9,$p9,$result9);
 
  
  
              }

    
    
return view('modules.neutrons.table',compact('data','data1','data2','data3','data4','data5','data6','data7','data8','data9','Tdata','Tdata1','Tdata2','Tdata3','Tdata4','Tdata5','Tdata6','Tdata7','Tdata8','Tdata9'));
       
       
       
    }


      }
