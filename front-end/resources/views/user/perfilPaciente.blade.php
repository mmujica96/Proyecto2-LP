<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Citas Psicologos</title> <!--title, estable el nombre del titulo de la pagina @yield('title') -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
 <!-- Font awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
   <header>
    <nav class="navbar navbar-expand-lg p-0" style="background-color: #5B559B;">
      <div class="col navbar-nav">
          <div class="col col-4 d-flex justify-content-center pl-4 pt-1 pb-1 align-items-center " style="background-color: #77BCFB; border-radius:0 32px 32px 0">
              <div class="" id="imagenAvatar">
                  <img 
              src="https://www.gravatar.com/avatar/d9691184a54bfa1defe3dc7d625bc959p" 
              class="rounded-circle" 
              style="width: 50px;"
              alt="Avatar" />
              </div>
              <div class="col h4 text-center pl-2">David Rendon</div>
          </div>
        </div>
          <div class="col-sm col-8" style="text-align: right;"S>
              <a class="nav-link text-white" href="login"><i class="fas fa-sign-out-alt"></i></a>
          </div>
      </div>
   </nav>
   </header>
   <section class="vh-100">
    <div class="container my-4 py-4 h-100" id="cuerpo">
        <div class="row d-flex justify-content-center">
            <div class="col py-2 shadow p-3 mb-5 bg-body rounded" id="busqueda" style="background-color: #f8f9fa">
                <div class="p-2 " id="buscar">
                    <form action="" method="get">
                      <label for="browser" class="form-label h5">Buscar por sector:</label>
                    <select id="sector" name="sector" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                      <option value="" selected>Escoge el sector</option>  
                      <option value="N">Norte</option>
                            <option value="C">Centro</option>
                            <option value="S">Sur</option>
                            <option value="SA">Samborondon</option>
                            <option value="DA">Daule</option>
                      </select>
                      <input type="submit" value="Buscar">
                    </form>
                </div>
                <div class="row mx-1">
                    <div class="col">
                      <?php 
                          if(isset($_GET["sector"])) {
                            $sector = $_GET["sector"];
                            $url = "http://localhost:8000/psicologos/psicologos/";
                            $json = file_get_contents($url);
                            $data = json_decode($json, true);
                            $psicologos=$data["psicologos"];
                            foreach ($psicologos as $psicologo) {
                              $nombre=$psicologo["nombre"];
                              $categoria= $psicologo["categoria"];
                              $ub=$psicologo["sector"];
                              $descripcion = $psicologo["descripcion"];
                              $id = $psicologo["id"];
                              if ($ub == $sector) {
                                echo "<div class='d-flex flex-start' style='align-items: center;''>
                                <img class='rounded-circle shadow-1-strong me-3 img-thumbnail'
                                  src='https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png' alt='avatar' width='60
                                  height='60' />
                                <div class='flex-grow-1 flex-shrink-1 pl-1 text center'>
                                  <div class='' style='background-color: #5B559B; border-radius:15px'>
                                    <div class='d-flex justify-content-center'>
                                      <p class='mb-1 h6 text-white'>
                                        <a class='text-white text-decoration-none' href='https://localhost/CitasPsicologos/front-end/public/perfilPsicologo/$id'>
                                          $nombre - $categoria <span class='small'></span>
                                        </a>
                                      </p>
                                    </div>
                                    <p class='small mb-0 text-white-50 text-center'>
                                        $descripcion
                                    </p>
                                  </div>
                                </div>
                              </div>
                              ";
                              }    
                            }
                          }




                        ?>
                    </div>
                  </div>
                </div>
            <div class="col " id="recomendaciones" >
                <div class="" style="background-color: #f8f9fa; border-radius:10px">
                    <div class="h4 text-center p-4" id="titulo">
                        Recomendaciones de tu última visita.
                    </div>
                    <div class="row mx-1 pb-4">
                        <div class="col mx-4">
                          <div class="d-flex flex-start" style="align-items: center;">
                            <img class="rounded-circle shadow-1-strong me-3"
                              src="https://th.bing.com/th/id/R.59eefe1aa673d9156b40c1e63ecdd909?rik=IdQhiNBzqd3Gqw&riu=http%3a%2f%2fclipart-library.com%2fimages_k%2fgreen-check-mark-transparent%2fgreen-check-mark-transparent-7.png&ehk=hjuFDS0FWdCRSAxZy4UmMTl%2bCV5%2bVZgEdwa4cGA8Rko%3d&risl=&pid=ImgRaw&r=0" alt="avatar" width="40"
                              height="40" />
                            <div class="flex-grow-1 flex-shrink-1 pl-1">
                              <div class="" style="background-color: #5B559B; border-radius:10px">
                                <div class="d-flex justify-content-center">
                                  <p class="mb-1 h6 text-white">
                                   Meditar.
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
          
                          <div class="d-flex flex-start mt-4" style="align-items: center;">
                            <img class="rounded-circle shadow-1-strong me-3"
                              src="https://th.bing.com/th/id/R.59eefe1aa673d9156b40c1e63ecdd909?rik=IdQhiNBzqd3Gqw&riu=http%3a%2f%2fclipart-library.com%2fimages_k%2fgreen-check-mark-transparent%2fgreen-check-mark-transparent-7.png&ehk=hjuFDS0FWdCRSAxZy4UmMTl%2bCV5%2bVZgEdwa4cGA8Rko%3d&risl=&pid=ImgRaw&r=0" alt="avatar" width="40"
                              height="40" />
                              <div class="flex-grow-1 flex-shrink-1 pl-1">
                                <div class="" style="background-color: #5B559B; border-radius:10px">
                                  <div class="d-flex justify-content-center">
                                    <p class="mb-1 h6 text-white">
                                     Hacer ejercicios.
                                    </p>
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="d-flex flex-start mt-4" style="align-items: center;">
                            <img class="rounded-circle shadow-1-strong me-3"
                              src="https://th.bing.com/th/id/R.59eefe1aa673d9156b40c1e63ecdd909?rik=IdQhiNBzqd3Gqw&riu=http%3a%2f%2fclipart-library.com%2fimages_k%2fgreen-check-mark-transparent%2fgreen-check-mark-transparent-7.png&ehk=hjuFDS0FWdCRSAxZy4UmMTl%2bCV5%2bVZgEdwa4cGA8Rko%3d&risl=&pid=ImgRaw&r=0" alt="avatar" width="40"
                              height="40" />
                              <div class="flex-grow-1 flex-shrink-1 pl-1">
                                <div class="" style="background-color: #5B559B; border-radius:10px">
                                  <div class="d-flex justify-content-center">
                                    <p class="mb-1 h6 text-white">
                                     Visistar familiares.
                                    </p>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
       </div>
   </section>
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 border-top" style="background-color: #BEBEBE;">
        <div class="d-flex align-items-center">
            <span class="mb-3 mb-md-0 text-muted">© 2023 Compañia, Psicologos Gye</span>
        </div>
    </footer>
</body>

</html>
<<<<<<< HEAD
=======


                          
>>>>>>> e128d5d81e087178bb0cfe733f44bed899b8b05b
