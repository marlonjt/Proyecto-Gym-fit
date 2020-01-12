<div class="row">
    

<div class="col-lg-4 ml-2">
    <div class="card shadow mb-4 border-left-primary"> 
        <div class="card-body">

            <form action="<?php echo base_url();?>cproveedores/guardarProve" method="POST">

                <p class='text-gray-800'> <strong> Nombre del Coach </strong> </p>

                <input type="text" name="txtNombre" placeholder="Nombre" class="form-control form-control-user">

                <br>
                
                <input type="submit" value="Ingresar." class="btn btn-primary">

            </form>

        </div>
        
    </div>
</div>

        <div class="col-lg-6">
            <div class="box box-primary">
                <table id="tblProveedores" class="table table-bordered table-striped">
                            <tr>
                              <th>Nombre</th>
                              <th>Eliminar</th>
                            </tr>

                </table>
            </div>
        </div>

</div> <!-- end row -->

<div class="row">
    <div class="col-lg-6">
        
    </div>

    <div class="col-lg-2">
        <button type="button" class="btn btn-block btn-primary" id="btnGuardarProv">Guardar</button>
    </div>
    <div class="col-lg-2">
        <button type="button" class="btn btn-block btn-primary" id="btnBorrarProv">Eliminar</button>
    </div>
</div>

</div>
<div class="w3-container">
  <h2>Coach </h2>
  <p>Es una persona profecional entrenador de personas comprometidas:</p>
  <div class="w3-card" style="width:50%">
    <img src="https://www.w3schools.com/w3css/img_avatar3.png" alt="Person" style="width:50%">
    <div class="w3-container">
      <h4><b>Abel</b></h4>
      <p>23 años </p>
    </div>
    <div class="w3-container">
  <p>Es una persona profecional entrenador de personas comprometidas:</p>
  <div class="w3-card" style="width:50%">
    <img src="https://image.freepik.com/foto-gratis/calentando_1098-19773.jpg" alt="Person" style="width:100%">
    <div class="w3-container">
      <h4><b>Jefferson</b></h4>
      <p>23 años </p>
    </div>
<script type="text/javascript">
	var baseurl = "<?php echo base_url();?>";
</script>