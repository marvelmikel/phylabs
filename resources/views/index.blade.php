@extends('layouts.app')
  @section('content')
  <div class="lg:w-1/2 lg:px-4">
    <!-- Summaries -->
    <div class="lg:flex lg:-mx-4">
        <div class="lg:w-1/3 lg:px-4">
          <a href="#">
            <div
              class="card px-4 py-8 text-center lg:transform hover:scale-110 hover:shadow-lg transition-transform duration-200 ">
              <span class="text-primary text-5xl leading-none la la-sun cursor pointer"></span>
              <p class="mt-2">Charged Particles</p>
              <div class="text-primary mt-5 text-3xl leading-none">.</div>
            </div>
          </a>
        </div>

        <div class="lg:w-1/3 lg:px-4 pt-5 lg:pt-0">
          <a href="#">
            <div
                class="card px-4 py-8 text-center lg:transform hover:scale-110 hover:shadow-lg transition-transform duration-200">
                <span class="text-primary text-5xl leading-none la la-cloud"></span>
                <p class="mt-2">Photons</p>
                <div class="text-primary mt-5 text-3xl leading-none">.</div>
            </div>
          </a>
        </div>
        <div class="lg:w-1/3 lg:px-4 pt-5 lg:pt-0">
          <a href="#">
            <div
                class="card px-4 py-8 text-center lg:transform hover:scale-110 hover:shadow-lg transition-transform duration-200">
                <span class="text-primary text-5xl leading-none la la-layer-group"></span>
                <p class="mt-2">Neutrons</p>
                <div class="text-primary mt-5 text-3xl leading-none">.</div>
            </div>
          </a>
        </div>
    </div>

    <!-- Visitors -->
    <div class="card mt-5 p-5">
        <h3>Visitors</h3>
        <div class="mt-5">
            <canvas id="visitorsChart"></canvas>
        </div>
    </div>

  </div>
  <div class="lg:w-1/2 lg:px-4 pt-5 lg:pt-0">

      <!-- Lines -->
      <div class="card p-5">
          <div class="flex flex-wrap -mx-4">
              <div class="w-1/2 lg:w-1/4 px-4">
                  <h4 class="chart-value text-primary"></h4>
                  <small class="chart-label"></small>
                  <canvas id="lineWithAnnotationChart1"></canvas>
              </div>
              <div class="w-1/2 lg:w-1/4 px-4">
                  <h4 class="chart-value text-primary"></h4>
                  <small class="chart-label"></small>
                  <canvas id="lineWithAnnotationChart2"></canvas>
              </div>
              <div class="w-1/2 lg:w-1/4 px-4 mt-5 sm:mt-0">
                  <h4 class="chart-value text-primary"></h4>
                  <small class="chart-label"></small>
                  <canvas id="lineWithAnnotationChart3"></canvas>
              </div>
              <div class="w-1/2 lg:w-1/4 px-4 mt-5 sm:mt-0">
                  <h4 class="chart-value text-primary"></h4>
                  <small class="chart-label"></small>
                  <canvas id="lineWithAnnotationChart4"></canvas>
              </div>
          </div>
      </div>

      <!-- Recent Posts  -->
      <div class="card mt-5 p-5">
          <h3>Compounds</h3>
          <table class="table mt-3 w-full">
              <thead>
                  <tr>
                      <th class="text-left uppercase">Name</th>
                      <th class="uppercase">Density</th>
                      <th class="uppercase">Xcs</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                      <td class="text-center">100</td>
                      <td class="text-center">
                          <div class="badge badge_outlined badge_secondary uppercase">View</div>
                      </td>
                  </tr>
                  <tr>
                      <td>Donec tempor lacus quis ex ullamcorper, ut cursus dui pellentesque.</td>
                      <td class="text-center">150</td>
                      <td class="text-center">
                          <div class="badge badge_outlined badge_success uppercase">View</div>
                      </td>
                  </tr>
                  <tr>
                      <td>Quisque molestie velit sed elit finibus, nec gravida nunc finibus.</td>
                      <td class="text-center">300</td>
                      <td class="text-center">
                          <div class="badge badge_outlined badge_warning uppercase">View</div>
                      </td>
                  </tr>
                  <tr>
                      <td>Morbi nec nisl ac libero facilisis finibus vitae fringilla dolor.</td>
                      <td class="text-center">120</td>
                      <td class="text-center">
                          <div class="badge badge_outlined badge_success uppercase">View</div>
                      </td>
                  </tr>
                  <tr>
                      <td>Donec suscipit libero in nibh fringilla hendrerit.</td>
                      <td class="text-center">180</td>
                      <td class="text-center">
                          <div class="badge badge_outlined badge_secondary uppercase">View</div>
                      </td>
                  </tr>
              </tbody>
          </table>
          <a href="#" class="btn btn_primary mt-5">Show all</a>
      </div>

      
  </div>
        
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
  @endPush

