<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administration</title>
@include('adminincludes.header_include')
</head>

<body>
		
		@include('adminincludes.header')
		@include('adminincludes.sidebar')
		@yield('content')
		@include('adminincludes.footer_include')


</body>

<html>