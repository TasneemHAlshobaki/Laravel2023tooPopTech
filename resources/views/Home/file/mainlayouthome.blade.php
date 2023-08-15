<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book Store</title>

	@include('Home.include.appstylehome')
	@include('Home.include.calenders')
	@include('Home.include.tablestyle')
</head>
<body>

	<div class="container">

		@yield('contenthome')

		</div>

</body>

@include('Home.include.appjs')
</html>