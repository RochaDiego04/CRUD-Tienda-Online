<?php include("template/cabecera.php"); ?>

<?php
include("administrador/config/bd.php");
$sentenciaSQL= $conexion->prepare("SELECT * FROM productos");
$sentenciaSQL->execute();
$listaProductos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>
<h1 class="titulo__producto ">Nuestros productos</h1>
<main class="contenedor">
<div class="grid">
<?php 
        foreach($listaProductos as $producto){

?>
            <div class="producto">
                <a href="#">
                    <img class="producto__imagen"src="./img/<?php echo $producto['imagen'] ?>">
                    <div class="producto__informacion">
                        <p class="producto__nombre"><?php echo $producto['nombre'];?></p>
                        <p class="producto__precio">$<?php echo $producto['precio'];?></p>
                    </div>
                </a>
            </div>
        


<?php } ?>  
</div>  
</main>

<?php include("template/pie.php"); ?>
