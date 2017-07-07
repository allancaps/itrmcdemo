<!DOCTYPE html>
<head>
	<title>@yield('pagetitle')</title>
	<link   rel="stylesheet" href="/project1/public/css/bootstrap.min.css">
	<script src="/project1/public/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
	<h1>@yield('pageheader')</h1>
		<br />
		@include('day2/menu')
		<br /><br />
	<div id="body">
		@yield('body')
	</div>
	<p class="footer">
		@include('day2/menu')
	</p>
	</div>
</body>
</html>