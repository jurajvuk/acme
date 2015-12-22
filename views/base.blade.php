<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>{{ $title }}</title>
	<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/styles.css">
	
</head>
<body>

	@include('topnav')
	
	@yield('outsidecontainer')
	
	<div class="cointaner">
		<div class="row">
			<br><br>
		</div>
		@yield('content')
		
	</div>
	<div class="row footer-background">
		<div class="col-md-3">
			<div class="contact">
				<h4>Contact Us</h4>
				123 Main St.<br>
				Unionville, PA<br>
				76543<br>
				+1 (555) 555-2121
			</div>
		</div>
		<div class="col-md-6">
			
		</div>
		<div class="col-md-3">
			<img src="/assets/map-small.png" class="pull-right">
		</div>
	</div>
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
	@yield('bottomjs')
	
</body>
</html>