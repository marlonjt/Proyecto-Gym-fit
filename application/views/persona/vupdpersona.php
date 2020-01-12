<div class="col-lg-4">

<?php echo "<h1 class='h3 mb-4 text-gray-800 p-3'>"."Usuario: ".$this->session->userdata('s_usuario')."</h1>"; ?>
    <div class="card shadow mb-4"> 
        <!-- py-3 border-left-primary p-5 -->
        <div class="card-body">

            <form action="<?php echo base_url();?>cpersona/actualizarDatos" method="POST">

                <p class='text-gray-800'> <strong> Actualiza tus datos </strong> </p>

                <input type="text" name="txtNombre" placeholder="Nombre" class="form-control form-control-user">
                <br>
                <input type="text" name="txtApPaterno" placeholder="Apellido Paterno" class="form-control form-control-user">
                <br>
             
                <input type="submit" value="Actualizar" class="btn btn-primary">

            </form>

            <form action="<?php echo base_url();?>cpersona/eliminarPersona" method="POST">

                <br>

                <p class='text-gray-800'> <strong> Eliminar por ID </strong> </p>

                <input type="text" name="txtIdPersona" placeholder="ID" class="form-control form-control-user">
                <br>
                <input type="submit" value="Eliminar" class="btn btn-primary center">

            </form>

        </div>
    </div>
</div>