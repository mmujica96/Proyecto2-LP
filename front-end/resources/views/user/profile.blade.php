<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Citas Psicologos</title> <!--title, estable el nombre del titulo de la pagina @yield('title') -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 <!-- Font awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body class="fondo-blur">
   <header>
    <nav class="navbar navbar-expand-lg p-0" style="background-color: #5B559B;">
        <div class="col navbar-nav">
            <div class="row d-flex justify-content-center pl-4 pt-1 pb-1 align-items-center " style="background-color: #77BCFB; border-radius:0 32px 32px 0">
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
            <div class="col-sm-2-4" style="text-align: right;"S>
                <a class="nav-link text-white" href="login"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
     </nav>
   </header>

   <section class="vh-100">
    <div class="container my-4 py-4" id="cuerpo">
        <div class="row d-flex justify-content-center">
            <div class="col py-2 shadow p-3 mb-5 bg-body rounded" id="busqueda" style="background-color: #f8f9fa">
                <div class="p-2 " id="buscar">
                    <label for="browser" class="form-label h5">Buscar por sector:</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected></option>
                        <option value="centro">Centro</option>
                        <option value="norte">Norte</option>
                        <option value="sur">Sur</option>
                      </select>
                </div>
                <div class="row mx-1">
                    <div class="col">
                      <div class="d-flex flex-start" style="align-items: center;">
                        <img class="rounded-circle shadow-1-strong me-3 img-thumbnail"
                          src="https://randomuser.me/api/portraits/women/76.jpg" alt="avatar" width="65"
                          height="65" />
                        <div class="flex-grow-1 flex-shrink-1 pl-1">
                          <div class="" style="background-color: #5B559B; border-radius:15px">
                            <div class="d-flex justify-content-center">
                              <p class="mb-1 h6 text-white">
                                Maria Smantha - Psicoanalista <span class="small"></span>
                              </p>
                            </div>
                            <p class="small mb-0 text-white-50 text-center">
                                “El mindfullnes puede ser importante para eliminar la ansiedad”
                            </p>
                          </div>
                        
                        </div>
                      </div>
      
                      <div class="d-flex flex-start mt-4" style="align-items: center;">
                        <img class="rounded-circle shadow-1-strong me-3 img-thumbnail"
                          src="https://randomuser.me/api/portraits/men/78.jpg" alt="avatar" width="65"
                          height="65" />
                        <div class="flex-grow-1 flex-shrink-1 pl-1">
                          <div style="background-color: #5B559B; border-radius:15px">
                            <div class="d-flex justify-content-center">
                              <p class="mb-1 h6 text-white">Jorge Garcia - Psicologo clinico.<span class="small"></span>
                              </p>
                            </div>
                            <p class="small mb-0 text-white-50 text-center" >
                                “Reconocerce a si mismo es lo importante”
                            </p>
                          </div>
                        </div>
                      </div>
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

