<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js">
   <link rel="stylesheet" href="{{mix('css/app.css')}}">
   <script src="{{mix('js/app.js')}}" defer></script>
   <meta name="csrf-token" content="{{csrf_token()}}">
   <title>@yield('title')</title>
   
</head>
<body class="bg-gray-200 text-gray-900 tracking-wider leading-normal">
   <header>
      @include('partials.nav')
   </header>
   @yield('content')

   <!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>		
	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
</body>
</html>