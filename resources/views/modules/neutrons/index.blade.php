@extends('layouts.app')
  @section('content')
   <section class="">
      
      <!-- Actions -->
      <div class="lg:flex w-full lg:-mx-4">
          <div class="lg:w-1/3 lg:px-4">
              <a
                  href="{{ route('neutronxcs.fast') }}"
                  class="card block px-4 py-8 text-center cursor-pointer lg:transform hover:scale-110 hover:shadow-lg transition-transform duration-200" >
                  <span class="text-primary text-5xl leading-none la la-sun"></span>
                  <p class="mt-2">FAST NEUTRON</p>
                  <div class="text-primary mt-5 text-xl leading-none">CLICK HERE</div>
              </a>
          </div>
          <div class="lg:w-1/3 lg:px-4 pt-5 lg:pt-0">
              <div
                  class="card px-4 py-8 text-center lg:transform hover:scale-110 hover:shadow-lg transition-transform duration-200">
                  <span class="text-primary text-5xl leading-none la la-cloud"></span>
                  <p class="mt-2">THERMAL NEUTRON</p>
                  <div class="text-primary mt-5 text-xl leading-none">CLICK HERE</div>
              </div>
          </div>
          <div class="lg:w-1/3 lg:px-4 pt-5 lg:pt-0">
              <div
                  class="card px-4 py-8 text-center lg:transform hover:scale-110 hover:shadow-lg transition-transform duration-200">
                  <span class="text-primary text-5xl leading-none la la-cloud"></span>
                  <p class="mt-2">KNOWN COMPOUNDS</p>
                  <div class="text-primary mt-5 text-xl leading-none">VIEW</div>
              </div>
          </div>
      </div>
   </section>


   <!-- popular compounds -->
   <section class="mt-10">
            <div class="lg:w-full lg:px-4 pt-5 lg:pt-0">
                <div class="card p-5">
                    <div class="w-full  justify-between">
                       <h3 class="text-2xl" >Popular</h3>  <span></span>
                    </div>
                    <table class="table table_striped mt-3 w-full">
                        <thead>
                            <tr>
                                <th class="text-left uppercase">#</th>
                                <th class="text-left uppercase">Name</th>
                                <th class="text-left uppercase">Composition</th>
                                <th class="text-left uppercase">Density</th>
                                <th class="text-left uppercase">Total: Σ(R/P)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Glucose</td>
                                <td>CHOCHO</td>
                                <td>0.033</td>
                                <td>0.193</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Burated Polyethylene</td>
                                <td>CHONOBCHO</td>
                                <td>0.033</td>
                                <td>0.293</td>
                            </tr>
                             <tr>
                                <td>3</td>
                                <td>Bismuth Polyethylene</td>
                                <td>CHOCLCHO</td>
                                <td>0.083</td>
                                <td>0.993</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Borated Silicon</td>
                                <td>CB2OCHOSi5</td>
                                <td>0.133</td>
                                <td>0.193</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
   </section>


   <!-- recent calculations -->
   <section class="mt-10">
            <div class="lg:w-full lg:px-4 pt-5 lg:pt-0">
               

                <div class="card p-5">
                    <div class="w-full  justify-between">
                       <h3 class="text-2xl">Recent</h3>  <span>Fast Neutrons Effective Removal Cross Section for 5.5% Burated Polyethylene </span>
                    </div>
                    <table class="table table_striped mt-3 w-full">
                        <thead>
                            <tr>
                                <th class="text-left uppercase">#</th>
                                <th class="text-left uppercase">Element</th>
                                <th class="text-left uppercase">ΣR/p</th>
                                <th class="text-left uppercase">Fraction by wieght</th>
                                <th class="text-left uppercase">Partial Density</th>
                                <th class="text-left uppercase">Σ{R}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>H</td>
                                <td>0.004</td>
                                <td>0.0033</td>
                                <td>0.0033</td>
                                <td>0.0033</td>
                            </tr>
                           <tr>
                                <td>2</td>
                                <td>C</td>
                                <td>0.004</td>
                                <td>0.0033</td>
                                <td>0.0033</td>
                                <td>0.0033</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>N</td>
                                <td>0.004</td>
                                <td>0.0033</td>
                                <td>0.0033</td>
                                <td>0.0033</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>O</td>
                                <td>0.004</td>
                                <td>0.0033</td>
                                <td>0.0033</td>
                                <td>0.0033</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
   </section>
  
        
  @endSection
  @push('js')
  @endPush

