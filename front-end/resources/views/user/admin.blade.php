@section("")

<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Admin</title>
  </head>
  <body>
    <header class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand">Admin</a>
    </header>
    <div class="container mt-5">
      <h2>Administrar Psicólogos</h2>
      <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target=".bd-example-modal">
        Agregar
      </button>
      <br>
      <br>
      <div class="list-group">
      <style>
            .circular-image {
            width: 75px;
            height: 75px;
            border-radius: 50%;
            object-fit: cover;
            overflow: hidden;
            }
        </style>
        
        <a href="#" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapseList">
          Lista de Psicólogos
        </a>
        <div id="collapseList" class="collapse">
          <ul class="list-group">
            <?php
                $url = "http://localhost:8000/psicologos/psicologos/";
                $json = file_get_contents($url);
                $data = json_decode($json, true);
                $psicologos=$data["psicologos"];
                foreach ($psicologos as $psicologo) {
                    $nombre=$psicologo["nombre"];
                    $categoria= $psicologo["categoria"];
                    $ub=$psicologo["sector"];
                    $id=$psicologo["id"];
                    $imagen=$psicologo["imagen"];
                    echo "<li class='list-group-item list-group-item-action' data-toggle='modal' data-target='#exampleModal1' onclick='mostrarForm(". json_encode($psicologo) . ")'> 
                    <img src='$imagen' class='circular-image'/>
                      $nombre          -       $categoria     -    Ubicación: $ub</li>";
                }
            ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade bd-example-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Calendario de citas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('registro.store')}}" method="post">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoría</label>
                            <input type="text" class="form-control" id="categoria" name="categoria" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="categoria">Foto URL</label>
                            <input type="text" class="form-control" id="imagen" name="imagen" >
                        </div>
                        <div class="form-group">
                            <label for="sector">Sector</label>
                            <select class="form-control" id="sector" name="sector">
                            <option value="N">Norte</option>
                            <option value="C">Centro</option>
                            <option value="S">Sur</option>
                            <option value="SA">Samborondon</option>
                            <option value="D">Daule</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
  function mostrarForm(psicologo) {
    let id=psicologo.id.toString();
    let srgi="http://localhost/Proyecto2-LP/front-end/public/update/"+id
    let dest="http://localhost/Proyecto2-LP/front-end/public/destroy/"+id
    console.log(psicologo.imagen)
    document.getElementById("formulario").setAttribute('action', srgi);
    document.getElementById("borrar_form").setAttribute('action', dest);
    document.getElementById("nombre1").value = psicologo.nombre;
    document.getElementById("imagen1").value = psicologo.imagen;
    document.getElementById("categoria1").value = psicologo.categoria;
    document.getElementById("descripcion1").value = psicologo.descripcion;
    document.getElementById("sector1").value = psicologo.sector;
  }
</script>

    <div class="modal fade bd-example-modal" id='exampleModal1' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informacion de psicologo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formulario"  method="post">
                        {{ csrf_field() }}
                        {{ method_field('put')}}
                      
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre1" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoría</label>
                            <input type="text" class="form-control" id="categoria1" name="categoria" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea class="form-control" id="descripcion1" name="descripcion" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="categoria">Foto URL</label>
                            <input type="text" class="form-control" id="imagen1" name="imagen" >
                        </div>
                        <div class="form-group">
                            <label for="sector">Sector</label>
                            <select class="form-control" id="sector1" name="sector">
                            <option value="N">Norte</option>
                            <option value="C">Centro</option>
                            <option value="S">Sur</option>
                            <option value="SA">Samborondon</option>
                            <option value="D">Daule</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                 
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-danger" data-toggle='modal' data-target='#confirmacion' >Eliminar</button>
            
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-2" role="dialog" id="confirmacion">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Seguro que quieres eliminar a este psicologo?</p>
            </div>
            <div class="modal-footer">
            <form  id="borrar_form" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('delete')}}
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-danger" >Eliminar</button>
            </form>
            </div>
            </div>
        </div>
    </div>

</body>
</html>
