<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data</title>

	@include('Home.include.appstyle')
	@include('Home.include.calenders')
	@include('Home.include.tablestyle')
</head>
<body>

	<div class="container">

		@yield('content')

		</div>

</body>

@include('Home.include.appjs')
</html>