@extends('layouts.app')
  @push('css')
        <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/ms-form.css') }}" rel="stylesheet">
    @endPush
  @section('content')
   

   <!-- popular compounds -->
   <section class="mt-10">
            <div class="lg:w-full lg:px-4 pt-5 lg:pt-0">
                <div class="card p-5 ">
                    <div class=" px-4 pt-4 pb-0 mt-3 mb-3">
                        <h3 id="heading">Neutron Cross Section</h3>
                        <p>Provide chemical formular</p>
                        <form id="msform" name="student-signup-msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li id="formular" class="active"><strong>Formular</strong></li>
                                <li id="energy"><strong>Parameters</strong></li>
                                <li id="calculations"><strong>Calculations</strong></li>
                                 <li id="account"><strong>Terms</strong></li>
                                <li id="confirm"><strong>Results</strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <br> 
                            <!-- fieldsets -->

                            <!-- Formular -->
                            <fieldset>
                                <div class="form-card">
                                    <label class="fieldlabels">Enter Compound Formular: *</label>
                                    <input type="text" id="formularInput" onchange="processFormular(event)" name="formular" placeholder="Eg: H2O+Cu(NO3)2 + H2O - H12" />
                                </div>
                                <pre id="resultHolder" class="h-20">
                                  
                                </pre>
                                <p class="mt-3">Having issue with formular ? <span><a class="text-danger" href="">see guide</a></span></p>
                                <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>

                            <!-- Energy -->
                            <fieldset>
                                <div class="form-card">
                                    
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" /> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>

                            <!-- Calculations -->
                            <fieldset>
                                <div class="form-card h-40">
                                    
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>

                             <!-- Account -->
<!--                             <fieldset>
                                <div class="form-card">
                                    <div class="input-group col-md-6">
                                        <label class="fieldlabels">Email: *</label>
                                        <input type="email" name="email" placeholder="Email" />
                                    </div>
                                    <div class="input-group col-md-6">
                                        <label class="fieldlabels">Username: *</label>
                                        <input type="text" name="username" placeholder="Username" />
                                    </div>
                                    <div class="input-group col-md-6">
                                        <label class="fieldlabels">Password: *</label>
                                        <input type="password" name="password" id="password" placeholder="Password" />
                                    </div>
                                    <div class="input-group col-md-6">
                                        <label class="fieldlabels">Confirm Password: *</label>
                                        <input type="password" name="confirm_password" placeholder="Confirm Password" />
                                    </div>
                                </div> 
                                <input type="button" name="next" class="next action-button" value="Next" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset> -->


                            <!-- Terms -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="px-3 row justify-content-center" style="height: 150px; overflow-y: scroll;">
                                        <!-- <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div> -->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5 class="purple-text text-center"></h5>
                                        </div>
                                    </div>

                                    <div class="">
                                        <input class="form-check-input" type="checkbox" name="terms" style="width: 60px" value="accepted" id="terms"> 
                                        <label class="form-check-label" style="margin-left:30px" for="flexCheckDefault">
                                           I have read and accept Lnaid Terms
                                        </label>
                                    </div>

                                </div>

                                <!-- <div id="ajaxLoading" style="position: relative; top: 60px"> -->
                                    <img id="ajaxLoading" src="{{asset('assets/images/spinners/preloader.gif')}} " title="working..." />
                                <!-- </div> -->
                                <input type="button" id="submit" name="next" class="action-button" value="Submit" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
   </section>
    
  @endSection
  @push('js')

    <script src=" {{ asset('assets/js/jquery.validate.min.js')}} "></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/js/ms-script.js') }}"></script>
     <script src="{{ asset('assets/js/chemparse.js') }}"></script>

     <script type="text/javascript">
        function processFormular(event){
          let formular = document.getElementById('formularInput').value
          let resultHolder = document.getElementById('resultHolder')
       
          let parsedFormular =  parseFormular(formular)

          resultHolder.innerHTML = `<p>${parsedFormular}</p>`
        }

        
    </script>
  @endPush

