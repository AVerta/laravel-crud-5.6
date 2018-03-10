<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
<title></title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Bootstrap core CSS     -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!--  core CSS    -->
<link href="{{ asset('/css/style-main.css') }}" type="text/css" rel="stylesheet" media="all">
<link href="{{ asset('/css/style-seats.css') }}" type="text/css" rel="stylesheet" media="all">

<!-- js -->

<!-- //js -->

<!--     Fonts and icons     -->
<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

</head>
<body>

	@include('partials.header')
		 
	<div class="container">

		@yield('content')
		
		@include('partials.footer') 
	</div>   
    
</body>
	<!--   Core JS Files-->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	@yield('custom_script')
</html>