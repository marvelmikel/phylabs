@extends('layouts.app')
  @section('content')
    <section class="container flex flex-wrap">
                <!--Left Col-->
                <div class="pl-10 lg:w-1/2">
                    <p class="uppercase tracking-loose w-full mt-10"></p>
                    <h1 class="my-4 lg:text-3xl text-2xl uppercase font-bold leading-tight">
                       A simple and comprehensive tool to calculate
                    </h1>
                    <p class="mb-4 lg:text-4xl text-2xl text-left  leading-relaxed text-blueGray-700">
                        the parameters relevant to dosimetry and protection against all the types of radiations such as Photons (X-rays and gamma rays), Neutrons (fast and thermal neutrons) and Charged Particles (electrons, protons, and alpha particles).

                      </p>

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
  @endPush

