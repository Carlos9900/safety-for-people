<?php include("template/cabecera.php"); ?>

    <div class="col-md-12">
        <div class="jumbotron">
          <h1 class="display-3">Aqui atenderemos tu reporte de una forma mas segura</h1>
          <p class="lead">Jumbo helper text</p>
          <hr class="my-2">
          <p>More info</p>
          <p class="lead">
              <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
          </p>
        </div>  
              
    
    </div>
    
              <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form method="POST">
                    <div class = "form-group">
                    <label>id</label>
                    <input type="int" class="form-control" name="id" placeholder=" ">
                    </div>
                    <div class="form-group">
                    <label>nombre</label>
                    <input type="varchar" class="form-control" name="nombre" placeholder="Escribe tu nombre">
                    </div>

                    <div class="form-group">
                    <label>telefono</label>
                    <input type="varchar" class="form-control" name="telefono" placeholder="Escribe tu numero telefonico">
                    </div>
                    <div class="form-group">
                    <label>Edad</label>
                    <input type="varchar" class="form-control" name="Edad" placeholder="Escribe tu Edad">
                    </div>
                    <div class="form-group">
                    <label>·correo</label>
                    <input type="varchar" class="form-control" name="·correo" placeholder="Escribe tu ·correo">
                    </div>
                    <button type="submit" class="btn btn-primary">Entar</button>
                    </form>
                    
                </div>
                
                </div>
        </div>

<?php include("template/pie.php"); ?>