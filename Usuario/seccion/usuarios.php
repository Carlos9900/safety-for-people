<?php include("../template/cabecera.php"); ?>

<div class="col-md-5">
    <form method="POST" entype="multipart/form-data" >
    <div class = "form-group">
    <label for="txtID">ID:</label>
    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="txtID">Nombre:</label>
    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre">
    </div>

    <div class = "form-group">
    <label for="txtID">Imagen:</label>
    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Imagen">
    </div>
    
    <div class="btn-group" role="group" aria-label="">
        <button type="button" class="btn btn-success">Agregar</button>
        <button type="button" class="btn btn-warning">Modificar</button>
        <button type="button" class="btn btn-info">Cancelar</button>
    </div>
    </form>
    
    


<?php include("../template/pie.php"); ?>