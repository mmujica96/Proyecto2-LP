<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Citas Psicologos</title> <!--title, estable el nombre del titulo de la pagina @yield('title') -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   <!-- Data Table -->
   
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/sc-2.0.3/sb-1.0.0/sp-1.2.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/sc-2.0.3/sb-1.0.0/sp-1.2.1/datatables.min.js"></script>

 <!-- Font awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

</head>
<body class="vh-100">
   <header>
    <nav class="navbar navbar-expand-lg p-0" style="background-color: #5B559B;">
        <div class="col navbar-nav">
            <div class="row pl-4 pt-1 pb-1 align-items-center w-50" style="background-color: #77BCFB; border-radius:0 32px 32px 0">
                <div class="" id="imagenAvatar">
                    <img 
                src="https://www.gravatar.com/avatar/d9691184a54bfa1defe3dc7d625bc959p" 
                class="rounded-circle" 
                style="width: 50px;"
                alt="Avatar" />
                </div>
                <div class="h4 text-center pl-2">David Rendon</div>
                <div class="500px"></div>
            </div>
            </div>
            <div class="col-sm-2-4" style="text-align: right;"S>
                <a class="nav-link text-white" href="login"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
     </nav>
   </header>

   <div class="container" id="cuerpo">
    <div class="row">
        <div class="col" id="busqueda">
            busqueda
        </div>
        <div class="col" id="recomendaciones">
            recomendaciones
        </div>
    </div>

   </div>
   
   
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 border-top" style="background-color: #BEBEBE;">
        <div class="d-flex align-items-center">
            <span class="mb-3 mb-md-0 text-muted">© 2023 Compañia, Psicologos Gye</span>
        </div>
    </footer>
</body>
</html>


