
@extends('layouts.app')
  @section('content')

   <!-- recent calculations -->
   <section class="mt-10">
            <div class="lg:w-full lg:px-4 pt-5 lg:pt-0">
               

                <div class="card p-5">
                    <div class="w-full  justify-between">
                       <h3 class="text-2xl">Compound Result Table</h3>  <span>Fast Neutrons Effective Removal Cross Section for 5.5% Burated Polyethylene </span>
                    </div>
                    <table class="table table_striped mt-3 w-full">
                        <thead>
                            <tr>
                                <!-- <th class="text-left uppercase">#</th> -->
								<th class="text-left ">SYMBOL</th>
                                <th class="text-left ">ELEMENT</th>
                                <th class="text-left ">ΣR/ρ (cm2·g−1)</th>
                                <th class="text-left ">FRACTION BY WEIGHT (g)</th>
                                <th class="text-left ">PARTIAL DENSITY (g.cm-3)</th>
                                <th class="text-left ">Σ{R} (cm−1)</th>
                            </tr>
                        </thead>
                        <tbody>
						<!-- ----------------PHASE 0------------ -->
                            <tr>
                                <!-- <td>0</td> -->
								<td>{{$data[0]}}</td>
									<td>{{$data[1]}}</td>
									<td>{{$data[2]}}</td>
									<td>{{$data[3]}}</td>
									<td>{{$data[4]}}</td>
									<td>{{$data[5]}}</td>
									
                            </tr>
                        	<!-- ----------------PHASE 1------------ -->
                            <tr>
                                <!-- <td>1</td> -->
								<td>{{$data1[0]}}</td>
									<td>{{$data1[1]}}</td>
									<td>{{$data1[2]}}</td>
									<td>{{$data1[3]}}</td>
									<td>{{$data1[4]}}</td>
									<td>{{$data1[5]}}</td>
									
                            </tr>
                            <!-- ----------------PHASE2------------ -->
                            <tr>
                                <!-- <td>1</td> -->
								<td>{{$data2[0]}}</td>
									<td>{{$data2[1]}}</td>
									<td>{{$data2[2]}}</td>
									<td>{{$data2[3]}}</td>
									<td>{{$data2[4]}}</td>
									<td>{{$data2[5]}}</td>
									
                            </tr>
                             <!-- ----------------PHASE3------------ -->
                             <tr>
                                <!-- <td>1</td> -->
								<td>{{$data3[0]}}</td>
									<td>{{$data3[1]}}</td>
									<td>{{$data3[2]}}</td>
									<td>{{$data3[3]}}</td>
									<td>{{$data3[4]}}</td>
									<td>{{$data3[5]}}</td>
									
                            </tr>
                            <thead>
    <tr>
        <!-- <th class="text-left uppercase">#</th> -->
		<th class="text-left ">TOTAL Σ{R} (cm−1)</th>
        <th class="text-left "></th>
        <th class="text-left "></th>
        <th class="text-left "></th>
        <th class="text-left "></th>
        <th class="text-left ">{{$data[5] + $data1[5] + $data2[5] + $data3[5]}}</th>
    </tr>
</thead>
                            
                                                 </tbody>
                    </table>
                </div>
            </div>
   </section>

  @endSection
  @push('js')
  @endPush