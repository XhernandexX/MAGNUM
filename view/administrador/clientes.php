<?php include("template/login.php"); ?>

<!DOCTYPE html>

<html lang="en"> 
<head>
    <title>Clientes</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/BANNERS/magnum.ico"> 

    <link id="theme-style" rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link id="text-css" rel="styletext" href="../assets/css/styletextlogin.css">

</head> 


<?php $url="http://".$_SERVER['HTTP_HOST']."/MAGNUM" ?>

  

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse" style="height: 5000px">
      <div class="position-sticky pt-3 sidebar-sticky">

      <span class="fs-4"><b>BACKOFFICE</b></span>

        <ul class="nav flex-column">

                <li class="nav-item">
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                <a href="inicio.php" class="nav-link text-white" aria-current="page">
                Inicio
                </a>
                </li>

                    <p>

                <li>
                <a href="usuarios.php" class="nav-link text-white">
                Usuarios
                </a>
                </li>

                    <p>

                <li>
                <a href="productos.php" class="nav-link text-white">
                Productos
                </a>
                </li>

                    <p>

                    <li>
                <a href="clientes.php" class="nav-link active">
                Clientes
                </a>
                </li>

                <p>

                <li>
                <a href="reportes.php" class="nav-link text-white">
                Reportes
                </a>
                </li>

                    <p>

        </ul>
                    <hr>

                    <div class="logout">
  
  <li>
  <a href="././index.php" class="nav-link text-white">
  Cierre Sesión
  </a>
  </li>

  </div>
        </nav> 

        <?php

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombreCliente=(isset($_POST['txtNombreCliente']))?$_POST['txtNombreCliente']:"";
$txtApellidoCliente=(isset($_POST['txtApellidoCliente']))?$_POST['txtApellidoCliente']:"";
$txtDocumentoCliente=(isset($_POST['txtDocumentoCliente']))?$_POST['txtDocumentoCliente']:"";
$txtDireccionCliente=(isset($_POST['txtDireccionCliente']))?$_POST['txtDireccionCliente']:"";
$txtEstadoEnvio=(isset($_POST['txtEstadoEnvio']))?$_POST['txtEstadoEnvio']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

//include("config/bd.php");

switch($accion){

    case"Agregar":

        $sentenciaSQL= $conexion->prepare("INSERT INTO clientes (nombre_cliente,apellido_cliente,documento_cliente,direccion_cliente,estado_envio) VALUES (:nombre_cliente,:apellido_cliente,:documento_cliente,:direccion_cliente,:estado_envio);");
        $sentenciaSQL->bindParam(':nombre_cliente',$txtNombreCliente);
        $sentenciaSQL->bindParam(':apellido_cliente',$txtApellidoCliente);
        $sentenciaSQL->bindParam(':documento_cliente',$txtDocumentoCliente);
        $sentenciaSQL->bindParam(':direccion_cliente',$txtDireccionCliente);
        $sentenciaSQL->bindParam(':estado_envio',$txtEstadoEnvio);   

        $sentenciaSQL->execute();

        header("Location:clientes.php");
        break;

    case"Modificar":

        $sentenciaSQL= $conexion->prepare("UPDATE clientes SET nombre_cliente=:nombre_cliente  WHERE id=:id");
        $sentenciaSQL->bindParam(':nombre_cliente',$txtNombreCliente);
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();


        $sentenciaSQL= $conexion->prepare("UPDATE clientes SET apellido_cliente=:apellido_cliente WHERE id=:id");
        $sentenciaSQL->bindParam(':apellido_cliente',$txtApellidoCliente);
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();

        $sentenciaSQL= $conexion->prepare("UPDATE clientes SET documento_cliente=:documento_cliente WHERE id=:id");
        $sentenciaSQL->bindParam(':documento_cliente',$txtDocumentoCliente);
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();

        $sentenciaSQL= $conexion->prepare("UPDATE clientes SET direccion_cliente=:direccion_cliente WHERE id=:id");
        $sentenciaSQL->bindParam(':direccion_cliente',$txtDireccionCliente);
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();

        $sentenciaSQL= $conexion->prepare("UPDATE clientes SET estado_envio=:estado_envio WHERE id=:id");
        $sentenciaSQL->bindParam(':estado_envio',$txtEstadoEnvio);
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
    
        $cliente=$sentenciaSQL->fetch(PDO::FETCH_LAZY);



        header("Location: clientes.php");
        break;

    case"Cancelar":
        header("Location: clientes.php");
        break;

    case"Seleccionar":

        $sentenciaSQL= $conexion->prepare("SELECT * FROM clientes WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        $clientes=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $txtNombreCliente=$clientes['nombre_cliente'];
        $txtApellidoCliente=$clientes['apellido_cliente'];
        $txtDocumentoCliente=$clientes['documento_cliente'];
        $txtDireccionCliente=$clientes['direccion_cliente'];
        $txtDocumentoCliente=$clientes['estado_envio'];

        break;

    case"Borrar":

        $sentenciaSQL= $conexion->prepare("SELECT clientes FROM clientes WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        $clientes=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if(isset($cliente["cliente"]) &&($cliente["cliente"]!="cliente") ){

            if(date_exists("../bd.php".$cliente["cliente"])){

            unlink("../bd.php".$cliente["cliente"]);
            }

        }
       $sentenciaSQL= $conexion->prepare("DELETE FROM clientes WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        header("Location: clientes.php");
        
        break;
}

$sentenciaSQL= $conexion->prepare("SELECT * FROM clientes");
$sentenciaSQL->execute();
$listaClientes=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>




<main class="col-md-9 ms-sm-auto col-lg-10 px-md-2">
    <div class="chartjs-size-monitor">
    </div>



<div class="col-mb-3">
    



    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-1 mb-3">

      
    <div class="col-md-4">

        <div class="card text-white bg-dark mb-3">
        <div class="card-header">Módulo Clientes</div>
        <div class="card-body">
        <h2 class="card-title">Clientes</h2>
        <p class="card-text">
        
    <p class="card-text">En este módulo podrás administrar todos tus clientes
        <p>
        Crear, modificar o eliminar
    </p>
        </p>
        </div>
        </div>
        </div>


        <div class="col-md-7 ">

        <form method="POST" enctype="multipart/form-data">


<div class = "form-group">
<label for="txtID">ID:</label>
<input type="text" required readonly class="form-control" value="<?php echo $txtID;  ?>" name="txtID" id="txtID" placeholder="ID">
</div>

<div class = "form-group">
<label for="txtNombreCliente">Nombre Cliente:</label>
<input type="text" required class="form-control" value="<?php echo $txtNombreCliente;  ?>" name="txtNombreCliente" id="txtNombreCliente" placeholder="Nombre Cliente">
</div>

<div class = "form-group">
<label for="txtApellidoCliente">Apellido Cliente:</label>
<input type="text" required class="form-control" value="<?php echo $txtApellidoCliente;  ?>" name="txtApellidoCliente" id="txtApellidoCliente" placeholder="Apellido Cliente">
</div>

<div class = "form-group">
<label for="txtDocumentoCliente">Documento Cliente:</label>
<input type="text" required class="form-control" value="<?php echo $txtDocumentoCliente;  ?>" name="txtDocumentoCliente" id="txtDocumentoCliente" placeholder="Documento Cliente">
</div>

<div class = "form-group">
<label for="txtDireccionCliente">Direccion Cliente:</label>
<input type="text" required class="form-control" value="<?php echo $txtDireccionCliente;  ?>" name="txtDireccionCliente" id="txtDireccionCliente" placeholder="Direccion Cliente">
</div>

<div class = "form-group">
<label for="txtEstadoEnvio">Estado Envio:</label>
<input type="text" required class="form-control" value="<?php echo $txtEstadoEnvio;  ?>" name="txtEstadoEnvio" id="txtEstadoEnvio" placeholder="Estado Envio">
</div>

<br/>


<div class="btn-group" role="group" aria-label="">
    <button type="submit" name="accion" <?php echo ($accion=="Seleccionar")?"disabled":""?> value="Agregar" class="btn btn-success">Agregar</button>
    <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":""?> value="Modificar" class="btn btn-warning">Modificar</button>
    <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":""?> value="Cancelar" class="btn btn-info">Cancelar</button>
</div>


</form>

</div>



</div>
          
        </div>



        <div class="col-md-12">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Direccion</th>
            <th>Estado Envio</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($listaClientes as $clientes) { ?>
        <tr>
            <td><?php echo $clientes['id']; ?></td>
            <td><?php echo $clientes['nombre_cliente']; ?></td>
            <td><?php echo $clientes['apellido_cliente']; ?></td>
            <td><?php echo $clientes['documento_cliente']; ?></td>
            <td><?php echo $clientes['direccion_cliente']; ?></td>
            <td><?php echo $clientes['estado_envio']; ?></td>

            <td>
                
        
            </td>

            <td>
    
            <form method="post">

                <input type="hidden" name="txtID" id="txtID" value="<?php echo $clientes['id']; ?>" />

                <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />

                <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />
    
            </form>


            </td>




        </tr>
        <?php } ?>
    </tbody>
</table>
</div>



</main>




