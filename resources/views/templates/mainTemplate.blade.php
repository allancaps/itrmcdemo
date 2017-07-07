<!DOCTYPE html>
<head>
	<title>@yield('pagetitle')</title>
	<link   rel="stylesheet" href="/css/bootstrap.min.css">
	<script src="/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
	<h1>@yield('pageheader')</h1>
		<hr />
		@include('menus/mainMenu')
		<hr />
	<div class="body">
		@yield('body')
	</div>
	<p class="footer">
		<hr />
		@include('menus/mainMenu')
	</p>
	</div>
</body>
</html>