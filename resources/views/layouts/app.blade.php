
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Merima.art</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Art & Design by Merima Pajalić" />
	<meta name="author" content="Merima Pajalić" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ mix('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ mix('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ mix('css/normalize.css') }}">
	<link rel="stylesheet" href="{{ mix('css/style.css') }}">
</head>
<body style="min-height: 100vh">
    @include('partials.navigation')

    @yield('content')

    @include('partials.footer')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

