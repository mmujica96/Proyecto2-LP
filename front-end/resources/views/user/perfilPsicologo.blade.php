<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Citas Psicologos</title> <!--title, estable el nombre del titulo de la pagina @yield('title') -->
    <link rel="stylesheet" href="{{ asset('css/perfilPsicologo.css') }}">
    
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

   <main> 
   <div class="container" id="cuerpo">
    

        <div class="informacionContainer">
            <div class="informacion1">
                <div class="cuadroMorado">
                    <img src="https://uploads-ssl.webflow.com/6321fa4eb9021afb4a237ebb/63518b3451899cb324570c0e_IMA0000460000046712.jpeg" alt="">
                    <label for="">Andrea Salazar - Psicoanalista</label>
                    <div class="informacionPsicologo">
                        <label for="">Descripción: Apasionada del crecimiento personal, siempre buscando nuevas maneras de
                            llegar a mis pacientes me tomo enserio el valor de escuchar lo que sucede a cada persona.</label>
                    </div>
                </div>
            </div>
            <div class="ubicacion">
                <div class="cuadroGris"> 
                    <div class="more">+</div>
                    <p>Agendar cita</p>
                </div>

            </div>    
        </div>

        <div class="informacionContainer">
            <div class="informacion2">
                <div class="cuadroInformacion">
                        <h4>Informacion</h4>
                        <div id="contenedor">
                            <div>
                                <ul>
                                    <li><p><strong>Estudios de grado:</strong> Lic. en Psicologia</p></li>
                                    <li><p><strong>Estudios de post-grado:</strong> Msc. en Psicoanalisis</p></li>
                                    <li><p><strong>clientes atendidos:</strong> 57</p></li>
                                    
                                </ul>
                            </div>
                            <div>
                                <ul>
                                    <li><p><strong>Valoracion clientes:</strong> 4.5/5</p></li>
                                    <li><p><strong>Palabras clave:</strong> Ansiedad, crisis existencias, depresion</p></li>
                                </ul>
                            </div>
                        </div>

                </div>
            </div>
            <div class="ubicacion">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41924.12381698766!2d-79.89272617531739!3d-2.194899753994797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d13cbe855805f%3A0x8015a492f4fca473!2sGuayaquil!5e0!3m2!1ses!2sec!4v1674445157832!5m2!1ses!2sec" width="300vw" height="200vh" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>    
        </div>

   </div>

   

   </main>

   
   
   
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 border-top" style="background-color: #BEBEBE;">
        <div class="d-flex align-items-center">
            <span class="mb-3 mb-md-0 text-muted">© 2023 Compañia, Psicologos Gye</span>
        </div>
    </footer>
</body>
</html>


