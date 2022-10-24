<?php 
include "../config/bd.php";
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename= ReporteRefrigerios.xls");

?>

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
    <?php foreach($listaProductos as $producto) { ?>
        <tr>
            <td><?php echo $producto['id']; ?></td>
            <td><?php echo $producto['nombre']; ?></td>
            <td>
                
            <img src="../assets/img/<?php echo $producto['imagen']; ?>" width="50" alt="" srcset="">

        
            </td>

            <td>
    
            <form method="post">

                <input type="hidden" name="txtID" id="txtID" value="<?php echo $producto['id']; ?>" />

                <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />

                <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />
    
            </form>


            </td>




        </tr>
        <?php } ?>
    </tbody>
</table>