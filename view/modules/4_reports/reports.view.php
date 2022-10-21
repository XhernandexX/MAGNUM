<main class="col-md-9 ms-sm-auto col-lg-10 px-md-2">
    <div class="chartjs-size-monitor"> </div>

<div class="col-mb-3">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-1 mb-3">
   
        <div class="col-md-4">

            <div class="card text-white bg-dark mb-3">
                <div class="card-header">Modulo Reportes</div>
                <div class="card-body">
                <h2 class="card-title">Reportes</h2>
                <p class="card-text">
        
                <p class="card-text">En este modulo podrás administrar todos tus reportes
                <p>
                Crear, modificar o eliminar
                </p>
        
            </div>
    </div>
</div>

<div class="col-md-7 ">

    <form method="POST" enctype="multipart/form-data">

        <div class = "form-group">
            <label for="txtID">ID:</label>
            <input type="text" required readonly class="form-control" value="" name="txtID" id="txtID" placeholder="ID">  
        </div>

        <div class = "form-group">
            <label for="txtID">Nombre:</label>
            <input type="text" required class="form-control" value="" name="txtNombre" id="txtNombre" placeholder="Nombre del Producto">
        </div>

        <div class = "form-group">
            <label for="txtContrasenia">Valor:</label>
            <input type="text" required class="form-control" value="" name="txtValor" id="txtValor" placeholder="Valor">
        </div>

        <br/>

        <div class="btn-group" role="group" aria-label="">
            <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
            <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
            <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
        </div>

    </form>

</div>

</div>
          
<div class="col-md-12">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>id</td>
                <td>nombre</td>
        
                    <form method="post">

                        <input type="hidden" name="txtID" id="txtID" value="" />
                        <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />
                        <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />
                    </form>
            </tr>
        </tbody>
    </table>
</div>

</main>