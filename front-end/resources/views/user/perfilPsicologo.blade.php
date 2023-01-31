<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Citas Psicologos</title> <!--title, estable el nombre del titulo de la pagina @yield('title') -->
    <link rel="stylesheet" href="{{ asset('css/perfilPsicologo.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
 <!-- Font awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

</head>
<body class="vh-100">
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
                    <div class="container text-center py-1">
                        <button class="btn btn-success btn-sm" id="modal-button" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button> 
                    </div>
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
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Horarios Disponibles</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="" id="avatar">
                  <img class="rounded-circle shadow-1-strong me-3 img-thumbnail"
                              src="https://randomuser.me/api/portraits/men/78.jpg" alt="avatar" width="65"
                              height="65" />
                </div>
                <div>
                  <div class="bg-indigo">
                    Disponible
                  </div>
                  <div class="bg-gray">
                    No Disponible
                  </div>
                </div>
                <div id="horarios">
                    <div class="container pt-2">
                        <div><p><strong>Lunes 30 de enero</strong></p></div>
                        <hr>
                        <div class="d-block">
                            <p><strong>Unidad: </strong> DoctorPlus</p>
                            <p><strong>Direccion: </strong> garzota mz.9 </p>
                        </div>
                        <div id="horas">
                            <div class="d-flex align-content-around" id="am">
                                <p><strong>AM: </strong></p>
                                <div>9:00</div>
                                <div>10:00</div>
                                <div>11:00</div>
                                <div>12:00</div>                                
                            </div>
                            <div id="pm">
                                <p><strong>PM: </strong></p>
                                <div>14:00</div>
                                <div>15:00</div>
                                <div>16:00</div>
                                <div>17:00</div>
                                <div>18:00</div> 
                            </div>
                        </div>
                    </div>
                    <div class="container pt-2">
                        <div><p><strong>Lunes 30 de enero</strong></p></div>
                        <hr>
                        <div class="d-block">
                            <p><strong>Unidad: </strong> DoctorPlus</p>
                            <p><strong>Direccion: </strong> garzota mz.9 </p>
                        </div>
                        <div id="horas">
                            <div class="d-flex align-content-around" id="am">
                                <p><strong>AM: </strong></p>
                                <div>9:00</div>
                                <div>10:00</div>
                                <div>11:00</div>
                                <div>12:00</div>                                
                            </div>
                            <div id="pm">
                                <p><strong>PM: </strong></p>
                                <div>14:00</div>
                                <div>15:00</div>
                                <div>16:00</div>
                                <div>17:00</div>
                                <div>18:00</div> 
                            </div>
                        </div>
                    </div>
                    <div class="container pt-2">
                        <div><p><strong>Lunes 30 de enero</strong></p></div>
                        <hr>
                        <div class="d-block">
                            <p><strong>Unidad: </strong> DoctorPlus</p>
                            <p><strong>Direccion: </strong> garzota mz.9 </p>
                        </div>
                        <div id="horas">
                            <div class="d-flex align-content-around" id="am">
                                <p><strong>AM: </strong></p>
                                <div>9:00</div>
                                <div>10:00</div>
                                <div>11:00</div>
                                <div>12:00</div>                                
                            </div>
                            <div id="pm">
                                <p><strong>PM: </strong></p>
                                <div>14:00</div>
                                <div>15:00</div>
                                <div>16:00</div>
                                <div>17:00</div>
                                <div>18:00</div> 
                            </div>
                        </div>
                    </div>
                    <div class="container pt-2">
                        <div><p><strong>Lunes 30 de enero</strong></p></div>
                        <hr>
                        <div class="d-block">
                            <p><strong>Unidad: </strong> DoctorPlus</p>
                            <p><strong>Direccion: </strong> garzota mz.9 </p>
                        </div>
                        <div id="horas">
                            <div class="d-flex align-content-around" id="am">
                                <p><strong>AM: </strong></p>
                                <div>9:00</div>
                                <div>10:00</div>
                                <div>11:00</div>
                                <div>12:00</div>                                
                            </div>
                            <div id="pm">
                                <p><strong>PM: </strong></p>
                                <div>14:00</div>
                                <div>15:00</div>
                                <div>16:00</div>
                                <div>17:00</div>
                                <div>18:00</div> 
                            </div>
                        </div>
                    </div>
                </div>
                
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Grabar cita</button>
            </div>
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


