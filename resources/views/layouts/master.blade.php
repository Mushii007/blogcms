
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>

    @include('includes.header_include')


</head>

<body>
  @include('includes.header')

    @yield('content')

    @include('includes.footer_include')

    @include('includes.footer')




</body>


</html>