@extends('layouts.app')
@section('content')
<main class="profile-page">
    <section class="relative block" style="height: 300px;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url('{{ asset('assets/images/about_bg.png')  }}');"><span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span></div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px;"><svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg></div>
    </section>
    <section class="relative py-16 bg-blueGray-200">
        <div class="container mx-auto px-4">
            <div class="relative flex flex-col min-w-0 break-words card w-full mb-6 shadow-xs rounded-lg -mt-64">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                            <div class="relative"><img alt="..." src="{{ asset('assets/images/phylabs_icon.png') }}" class=" rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16" style="max-width: 150px;"></div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                            <div class="py-6 px-3 mt-32 hidden md:block sm:mt-0"><button class=" uppercase  font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">Contact</button></div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4 lg:order-1">
                            <div class="flex justify-center py-4 lg:pt-4 lg:pt-8 pt-20">
                                <div class="mr-4 p-3 text-center"><span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">2982</span><span class="text-sm text-blueGray-400">Views</span></div>
                                <div class="mr-4 p-3 text-center"><span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">10</span><span class="text-sm text-blueGray-400">Users Online</span></div>
                                <div class="lg:mr-4 p-3 text-center"><span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">19</span><span class="text-sm text-blueGray-400">Contributions</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-12">
                        <h3 class="text-4xl font-semibold leading-normal  text-blueGray-700 ">ABOUT</h3>
                        
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase"><i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i> PHYLABS </div>
                        
                        <!-- <div class="mb-2 text-blueGray-600 mt-10"><i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>Solution Manager - Creative Tim Officer</div> -->

                        <!-- <div class="mb-2 text-blueGray-600"><i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>Phylabs</div> -->
                    </div>
                    <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4">
                                <p class="mb-4 lg:text-xl text-lg  leading-relaxed text-blueGray-700">
                                  PHYLABS is the first program which is developed to perform the calculation of all parameters relevant to dosimetry and protection against all the types of radiations such as Photons (X-rays and gamma rays), Neutrons (fast and thermal neutrons) and Charged Particles (electrons, protons, and alpha particles). This program can be used as a comprehensive tool to study the radiation shielding ability of materials, compounds and mixtures. Moreover, PHYLABS program is very useful platform for who are interested in radiation protection, radiotherapy, dosimetry, and for several purposes whether this is in the nuclear or medical facilities.

                                </p>
                                <p  class=" lg:text-xl text-lg leading-relaxed text-blueGray-700">
                                  <em>This project is financially funded by Abdulguder Mohammed Saleh Al-Baidhani.</em>
                                </p>
                                <p  class="mb-2 lg:text-xl text-lg leading-relaxed text-blueGray-700">
                                    <i>Many thanks to his continous effort to support the Science.</i>
                                </p>
                                <div class="mt-20">
                                  <!-- <a href="#pablo" class="font-normal text-primary">Send Feedback</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endSection
