<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="{{URL::to('/')}}/js/bootstrap.js"></script>
<link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap.css">
</head>
<body>
	@yield('navbar')
	<div class="nav navbar">
	</div>

	<div>
		@yield('content')
	</div>


</body>



</html>
