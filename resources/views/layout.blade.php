<html>
  
	<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

</head>
	<body>
		<div class="container">
		<p>Some content here</p>

@yield('conten')
      <nav>
        <li>home</li>
@yield('nav')
      </nav>
<p>Some additional content here</p>
				<div class="title">  My Website</div>
    @foreach ($items as $item)
        This is {{ $item }}
        @endforeach
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
  <footer>@yield('footer')</footer>
	</body>
</html>