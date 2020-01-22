
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- mobile style -->
    <link rel="stylesheet" href="css/mobile-style.css">
    <!-- font awsome -->
    <script src="https://kit.fontawesome.com/4d5d34d37d.js" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
</head>
<style>
    .col-sm-6 .desc h6 {
   font-weight: bold;
   color: #012561;
   margin-bottom: 0;
   margin-top: 0;
}

.col-sm-6 .desc {
        display: inline-block;
        padding: 55px 12%;
        vertical-align: middle;
        width: 100%;
}

.col-sm-6 {
    background-color: #e1e6ea;
}


.bawah {
    background-color: #0065B3;
    padding: 40px 0;
    display: block;
}
</style>

<body>

        @include('includes.navbar')
    
    @yield('content')
     <!-- Bootstrap core JavaScript-->
 <script src="{{ url('backend/vendor/jquery/jquery.min.js') }}"></script>
 <script src="{{ url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>