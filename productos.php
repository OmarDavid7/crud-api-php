<?php include("./template/cabecera.php");?>

<?php
include("administrador/config/bd.php");
$sentenciaSQL = $conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaLibros as $libro){?>
<div class="col-md-3">
<div class="card">
    <img class="card-img-top" src="https://avatars.githubusercontent.com/u/32949016?s=280&v=4" alt="Title">
    <div class="card-body">
        <h4 class="card-title"><?php echo $libro['nombre']; ?></h4>
        <a href="https://goalkicker.com/" class="btn btn-primary" target="_blank">Ver más</a>
    </div>
</div> 
</div>
<?php }?>
<?php
    include("./template/pie.php")
?>