<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') - Citas Psicologos</title> <!--title, estable el nombre del titulo de la pagina-->
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="">
    <nav class="navbar navbar-light p-3" style="background-color: #5B559B;">
        <div class="container-fluid justify-content-center">
            <span class="navbar-brand mb-0 h1 text-white">PSICOLOGOS GYE</span>
        </div>
    </nav>

    @yield('content')
    
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 border-top" style="background-color: #BEBEBE;">
        <div class="d-flex align-items-center">
            <span class="mb-3 mb-md-0 text-muted">© 2023 Compañia, Psicologos Gye</span>
        </div>
    </footer>
</body>
</html>