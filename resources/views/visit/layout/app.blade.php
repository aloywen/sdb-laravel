<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/index.css">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/datatables/style.css">
    <link rel="stylesheet" href="/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" href="/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">

        @include('visit.layout.navigation')

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



    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <script src="/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <script src="/datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="/js/main.js"></script>

</body>

</html>