@extends('layouts.app')
  @section('content')
    <section class="container flex">
                <!--Left Col-->
                <div class="pl-10 lg:w-1/2">
                    <p class="uppercase tracking-loose w-full mt-10">A simple, robust and reliable tool to calculate</p>
                    <h1 class="my-4 lg:text-3xl text-2xl font-bold leading-tight">
                        CROSS SECTION AND ATENUATION COEFFICIENTS OF ELEMENTS, COMPOUNDS AND MIXTURES
                    </h1>
                    <p class="leading-normal  tracking-loose mb-8">
                        All stored values are updated regualarly based on latest emperical results
                    </p>
                    <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Get Started
                    </button>
                </div>
                <!--Right Col-->
                <div class="lg:w-1/2 py-6 text-center">
                    <img class="w-full  z-50" src="{{ asset('assets/images/hero3.png')  }}">
                </div>

    </section>
  
        
  @endSection
  @push('js')
    <script type="text/javascript">
          $(document).ready(function() {
            $("#add").click(function() {
              var lastField = $("#buildyourform div:last");
              var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
              var fieldWrapper = $("<div class=\"form-group row\" id=\"field" + intId + "\"/>");
              fieldWrapper.data("idx", intId);

              var element = $('<div class="col-lg-4"><div class="st-form-field st-style1"><input type="text" id="uemail" name="uemail" placeholder="element 1" required></div></div>')

              var val1 = $('<div class="col-lg-4"><div class="st-form-field st-style1"><input type="text" id="unumber" name="unumber" placeholder="val1" required></div>')

              var val2 = $(' <div class="col-lg-4"><div class="st-form-field st-style1"><input type="text" id="unumber" name="unumber" placeholder="val2" required></div>')

              var removeButton = $('<i class="fa fa-minus remove"></i>');
              removeButton.click(function() {
                  $(this).parent().remove();
              });
              fieldWrapper.append(element);
              fieldWrapper.append(val1);
              fieldWrapper.append(val2);
              fieldWrapper.append(removeButton);
              $("#buildyourform").append(fieldWrapper);
            });
          });
    </script>

    <script type="text/javascript">
        // const regex = /([\w*-′]*([\[(]([\[(]?[a-zA-Zα-ωΑ-Ωµ\-′,:]+\d?[+-]?[\])]?)+[\])\d+-]{1,})[\w*-′]*)|(([A-z]+[a-z]*\d)+([A-z]+[a-z]*\d?)*)/g;

        // const regex = /([A-Z][a-z]?)(\d*)/ 
        const regex = /([A-Z][a-z]*)(\d*)/g;

        const str = `HOCH2CH2`; // Cu(NO3)2 + H2O - H12"
        let m;

        // while ((m = regex.exec(str)) !== null) {
        //     // This is necessary to avoid infinite loops with zero-width matches
        //     if (m.index === regex.lastIndex) {
        //         regex.lastIndex++;
        //     }
            
        //     // The result can be accessed through the `m`-variable.
        //     // m.forEach((match, groupIndex) => {
        //     //     console.log(`Found match, group ${groupIndex}: ${match}`);

        //     // });
        //     console.log(m)
        // }
        // for(e in m = regex.exec(str)){
        //   console.log(m[e])
        // }

        // m = regex.exec(str)
        // console.log(m)

        var userArray=  str.match(/(?:[A-Z][a-z]*|\d+|[()])/g); //(8) ['H', 'O', 'C', 'H', '2', 'C', 'H', '2']


        let  composition = str.match(/([A-Z][a-z]*)(\d*)/g); //(6) ['H', 'O', 'C', 'H2', 'C', 'H2']

        console.log(userArray)
    </script>

    <script type="text/javascript"></script>
  @endPush

