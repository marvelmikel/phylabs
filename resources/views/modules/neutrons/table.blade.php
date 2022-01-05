
@extends('layouts.app')
  @section('content')

   <!-- recent calculations -->
   <section class="mt-10">
            <div class="lg:w-full lg:px-4 pt-5 lg:pt-0">
               

                <div class="card p-5">
                    <div class="w-full  justify-between">
                       <h3 class="text-2xl">Compound Result Table</h3> 
                         <span><strong style="color:blue;">NOTE:</strong> The Total Row shows the Effective Removal Cross Section <strong style="color:blue;">TOTAL Σ{R} (cm−1)</strong> for all the Element in the Compound Submitted </span> 
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
                            @if($data1 == null)
<?php $data1[5] = null ?>
 @else
                            <tr>
                                <!-- <td>1</td> -->
								<td>{{$data1[0]}}</td>
									<td>{{$data1[1]}}</td>
									<td>{{$data1[2]}}</td>
									<td>{{$data1[3]}}</td>
									<td>{{$data1[4]}}</td>
									<td>{{$data1[5]}}</td>
									
                            </tr>
                            @endif
                            <!-- ----------------PHASE2------------ -->
                            @if($data2 == null)
<?php $data2[5] = null ?>
 @else
                            <tr>
                                <!-- <td>1</td> -->
								<td>{{$data2[0]}}</td>
									<td>{{$data2[1]}}</td>
									<td>{{$data2[2]}}</td>
									<td>{{$data2[3]}}</td>
									<td>{{$data2[4]}}</td>
									<td>{{$data2[5]}}</td>
									
                            </tr>
                            @endif
                             <!-- ----------------PHASE3------------ -->
                            @if($data3 == null)
                            <?php $data3[5] = null ?>
                             @else
                             <tr>
                                <!-- <td>1</td> -->
								<td>{{$data3[0]}}</td>
									<td>{{$data3[1]}}</td>
									<td>{{$data3[2]}}</td>
									<td>{{$data3[3]}}</td>
									<td>{{$data3[4]}}</td>
									<td>{{$data3[5]}}</td>
									
                            </tr>
                            @endif
                                  <!-- ----------------PHASE4------------ -->
 @if($data4 == null)
 <?php $data4[5] = null ?>
  @else
  <tr>
     <!-- <td>1</td> -->
	<td>{{$data4[0]}}</td>
		<td>{{$data4[1]}}</td>
		<td>{{$data4[2]}}</td>
		<td>{{$data4[3]}}</td>
		<td>{{$data4[4]}}</td>
		<td>{{$data4[5]}}</td>
		
 </tr>
 @endif
   <!-- ----------------PHASE5------------ -->
   @if($data5 == null)
 <?php $data5[5] = null ?>
  @else
  <tr>
     <!-- <td>1</td> -->
	<td>{{$data5[0]}}</td>
		<td>{{$data5[1]}}</td>
		<td>{{$data5[2]}}</td>
		<td>{{$data5[3]}}</td>
		<td>{{$data5[4]}}</td>
		<td>{{$data5[5]}}</td>
		
 </tr>
 @endif
   <!-- ----------------PHASE6------------ -->
   @if($data6 == null)
 <?php $data6[5] = null ?>
  @else
  <tr>
     <!-- <td>1</td> -->
	<td>{{$data6[0]}}</td>
		<td>{{$data6[1]}}</td>
		<td>{{$data6[2]}}</td>
		<td>{{$data6[3]}}</td>
		<td>{{$data6[4]}}</td>
		<td>{{$data6[5]}}</td>
		
 </tr>
 @endif
   <!-- ----------------PHASE7------------ -->
   @if($data7 == null)
 <?php $data7[5] = null ?>
  @else
  <tr>
     <!-- <td>1</td> -->
	<td>{{$data7[0]}}</td>
		<td>{{$data7[1]}}</td>
		<td>{{$data7[2]}}</td>
		<td>{{$data7[3]}}</td>
		<td>{{$data7[4]}}</td>
		<td>{{$data7[5]}}</td>
		
 </tr>
 @endif
   <!-- ----------------PHASE8------------ -->
   @if($data8 == null)
 <?php $data8[5] = null ?>
  @else
  <tr>
     <!-- <td>1</td> -->
	<td>{{$data8[0]}}</td>
		<td>{{$data8[1]}}</td>
		<td>{{$data8[2]}}</td>
		<td>{{$data8[3]}}</td>
		<td>{{$data8[4]}}</td>
		<td>{{$data8[5]}}</td>
		
 </tr>
 @endif
   <!-- ----------------PHASE9------------ -->
   @if($data9 == null)
 <?php $data9[5] = null ?>
  @else
  <tr>
     <!-- <td>1</td> -->
	<td>{{$data9[0]}}</td>
		<td>{{$data9[1]}}</td>
		<td>{{$data9[2]}}</td>
		<td>{{$data9[3]}}</td>
		<td>{{$data9[4]}}</td>
		<td>{{$data9[5]}}</td>
		
 </tr>
 @endif
                            <thead>
 <!-- //////////////////////////////////-------------TOTAL Σ{R} (cm−1)--------------------////////////////////////////////////// -->
    <tr>
    @if($Tdata == null )
<?php $Tdata[5] = null ?>
 @endif
 @if($Tdata1 == null)
<?php $Tdata1[5] = null ?>
 @endif
 @if($Tdata2 == null)
<?php $Tdata2[5] = null ?>
 @endif
 @if($Tdata3 == null)
<?php $Tdata3[5] = null ?>
 @endif
 @if($Tdata4 == null)
<?php $Tdata4[5] = null ?>
 @endif
 @if($Tdata5 == null)
<?php $Tdata5[5] = null ?>
 @endif
 @if($Tdata6 == null)
<?php $Tdata6[5] = null ?>
 @endif
 @if($Tdata7 == null)
<?php $Tdata7[5] = null ?>
 @endif
 @if($Tdata8 == null)
<?php $Tdata8[5] = null ?>
 @endif
 @if($Tdata9 == null)
<?php $Tdata9[5] = null ?>
 @endif
        <!-- <th class="text-left uppercase">#</th> -->
		<th class="text-left ">TOTAL Σ{R} (cm−1)</th>
        <th class="text-left "></th>
        <th class="text-left "></th>
        <th class="text-left "></th>
        <th class="text-left "></th>
        <th class="text-left ">{{$Tdata[5] + $Tdata1[5] + $Tdata2[5] + $Tdata3[5]+ $Tdata4[5]+ $Tdata5[5]+ $Tdata6[5]+ $Tdata7[5]+ $Tdata8[5]+ $Tdata9[5]}}</th>
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