<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from yetiadmin.yetithemes.net/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Feb 2021 12:35:07 GMT -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

   <title>Lab - Phylabs</title> 
  

    <!-- Generics -->
    <link rel="icon" href="{{asset('assets/images/favicon/favicon-32.png')}}" sizes="32x32">
    <link rel="icon" href="{{ asset('assets/images/favicon/favicon-128.png') }}" sizes="128x128">
    <link rel="icon" href="{{asset('assets/images/favicon/favicon-192.png')}}" sizes="192x192">
    
    <!-- Android -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon/favicon-196.png')}}" sizes="196x196">
    
    <!-- iOS -->
    <link rel="apple-touch-icon" href="{{asset('assets/images/favicon/favicon-152.png')}}" sizes="152x152">
    <link rel="apple-touch-icon" href="{{asset('assets/images/favicon/favicon-167.png')}}" sizes="167x167">
    <link rel="apple-touch-icon" href="{{asset('assets/images/favicon/favicon-180.png')}}" sizes="180x180">

  <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  @stack('css')

</head>

<body>

    <!-- Top Bar  -->
    @include('partials.header')

    <!-- Menu Bar -->
    @include('partials.sidebar')

    <!-- Workspace  -->
    <main class="workspace overflow-hidden">


        <div class="lg:-mx-4">
            @yield('content')
        </div>

        <!-- Footer  -->
        @include('partials.footer')
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('assets/js/vendor.js')}}"></script>
    <script src="{{asset('assets/js/Chart.min.js')}}"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
    <script src="{{asset('assets/js/script.js')}}"></script>

    @stack('js')

</body>

</html>
