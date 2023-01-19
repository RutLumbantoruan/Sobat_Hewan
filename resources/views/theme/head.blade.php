<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Sobat Hewan" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- Stylesheets ============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('semicolon/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('semicolon/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('semicolon/css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('semicolon/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('semicolon/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('semicolon/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('semicolon/css/magnific-popup.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('semicolon/css/components/bs-datatable.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('semicolon/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="{{asset('css/toastr.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/swa2.css')}}" type="text/css" />
	<!-- Document Title ============================================= -->
	<title>{{ config('app.name') }} {{ '| ' . $title ?? ''}}</title>
    <link rel="shortcut icon" href="{{asset('images/orange.png')}}" />
	<style>
		.kotak{
			margin: 10px auto;
			background: #fff;
			
			width: 400px;
			padding: 20px 0px;
		}
		
		.kotak table tr td{
			padding: 5px;
		}
		
		.kotak table tr td input{
			padding: 5px;
			font-size: 12pt;
		}
	</style>
</head>