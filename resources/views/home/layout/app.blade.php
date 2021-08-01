<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/index.css">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/datatables/style.css">
    <link rel="stylesheet" href="/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div id="app">

        @include('home.layout.navigation')


        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <!-- Page Heading -->
            @yield('content')

        </div>
        <!-- /.container-fluid -->



        @include('sweetalert::alert')
    </div>
    <!-- End of Content Wrapper -->



    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/js/main.js"></script>


</body>

</html>