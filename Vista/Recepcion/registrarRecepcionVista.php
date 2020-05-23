<div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block"><span class="brand-text font-weight-light"> <?php echo $_SESSION['usuario'];?> </span></a>
        <a href="http://localhost:8080/soft_sertec/Login/logout" class="d-block"><span class="brand-text font-weight-light">Cerrar Sesión</span></a>
      </div>
    </div>
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Ordenes de Servicio
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost:8080/soft_sertec/Recepcion" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seguimiento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8080/soft_sertec/Recepcion/registrarRecepcionVista" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
  </aside>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registrar Orden de Servicio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registrar Orden de Servico</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Orden de servicio</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form  action="" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Número de orden</label>
                  <input type="text" name="numOrden" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Técnico asignado</label>
                  <select name="idTecnico" class="form-control select2" style="width: 100%;">
                    <?php if (!$_POST) { while ($fila = mysqli_fetch_array($datos)) { ?>
                    <option value="<?php echo $fila['idTecnico'];?>"><?php echo $fila['nombres'];?></option>
                    <?php } }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputName">Precio total estimado</label>
                  <input type="text" name="precioInicial" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Nombres</label>
                  <input type="text" name="nombre" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Apellidos</label>
                  <input type="text" name="apellido" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">DNI</label>
                  <input type="text" name="dni" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Dirección</label>
                  <input type="text" name="direccion" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Celular</label>
                  <input type="text" name="celular" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Email</label>
                  <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" name="btnRegistrarOrden" class="btn btn-secondary">Registrar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Datos del producto</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form  action="" method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Producto</label>
                <input type="text" name="tipo" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Marca</label>
                <input type="text" name="marca" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Modelo</label>
                <input type="text" name="modelo" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Número de serie</label>
                <input type="text" name="serie" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Descripción del problema</label>
                <textarea name="descProb" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputDescription">Descripción del trabajo a realizar</label>
                <textarea name="descTrab" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Precio estimado</label>
                <input type="number" name="precio" class="form-control">
              </div>
              <div class="form-group">
                <button type="submit" name="btnAgregarProducto" class="btn btn-secondary">Agregar</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
       <div class="container-fluid">
           <div class="card card-secondary">
             <div class="card-header">
               <h3 class="card-title">Lista de productos</h3>
               <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                   <i class="fas fa-minus"></i></button>
               </div>
             </div>
             <div class="card-body">
               <div class="form-group">
                 <div class="card-body p-0">
                   <div class="table-responsive">
                     <table class="table m-0">
                       <thead>
                       <tr>
                         <th>Orden</th>
                         <th>Producto</th>
                         <th>Marca</th>
                         <th>Modelo</th>
                         <th>S/N</th>
                         <th>Descripción</th>
                         <th>Acción</th>
                       </tr>
                       </thead>
                       <tbody>
                       <?php if (@$_POST) { $id = 0; while (@$row = mysqli_fetch_array(@$datos)) {?>
                       <tr>
                         <td><?php echo @$row['idOrden']; $id = @$row['idOrden'];?></td>
                         <td><?php echo @$row['tipo']; ?></td>
                         <td><?php echo @$row['marca']; ?></td>
                         <td><?php echo @$row['modelo']; ?></td>
                         <td><?php echo @$row['serie']; ?></td>
                         <td><?php echo @$row['descTrab']; ?></td>
                         <td>
                           <div class="btn-group">
                              <a class="btn btn-danger" href="">Eliminar</a>
                           </div>
                         </td>
                       </tr>
                       <?php } ?>
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>         
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <a class="btn btn-success float-right" href="<?php echo URL; ?>Recepcion/imprimirRecepcionVista/<?php echo @$id;?>">Mostrar resultado</a><?php }?>
        </div>
      </div>
    </section>
  </div>