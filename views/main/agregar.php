<main class="container-md mt-4 ">
       
        <div class="col-6 mx-auto">
        <?php foreach($errores as $error){ ?>
          <div class="m-1 p-2 text-center text-uppercase bg-danger color-blanco">
            <?php echo $error; ?>
          </div>
        <?php } ?>
            <form class="border p-3 rounded shadow" action="<?php echo URL ?>agregar" method="POST">
              <?php  include 'formulario.php' ?>
              <button type="submit" class="btn btn-primary">Agregar</button>

            </form>
        </div>
    </main>
