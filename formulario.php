<?php
?>
<?php include_once "encabezado.php" ?>
<div class="row">
    <div class="col-12">
        <h1>Agregar</h1>
        <form action="insertar.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input required name="nombre" type="text" id="nombre" placeholder="Nombre de Mascota" class="form-control">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input required name="edad" type="number" id="edad" placeholder="Edad de mascota" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
            <a href="./listar.php" class="btn btn-secondary btn-lg">Ver todas</a>
        </form>
    </div>
</div>
<?php include_once "pie.php" ?>

