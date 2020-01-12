<div class="row">
    

<div class="col-lg-4 ml-2">
    <div class="card shadow mb-4 border-left-primary"> 
        <div class="card-body">

            <form action="<?php echo base_url();?>cingresos/guardarProd" method="POST">

                <p class='text-gray-800'> <strong> Ingrese la Información </strong> </p>

                <input type="text" name="txtNombre" placeholder="Fecha" class="form-control form-control-user">
                <br>

                <p class='text-gray-800'> Tipo de Ejercicio  </p>

                <select id="cboCategoria" name="txtCategoria" class="form-control">
                    <option  value="">Seleccione...</option>
                </select>
                
                <br>
                
                <input type="number" min="0" name="txtCantidad" placeholder="Serie" class="form-control form-control-user">
                <option  value="">Seleccione...</option>
                <br>
                
                <input type="number" min="0" name="txtPrecio" placeholder="Tiempo" class="form-control form-control-user">
                
                <br>
                <p class='text-gray-800'> Entrenador </p>

                <select id="cboProveedor" name="txtProveedor" class="form-control">
                    <option  value="">Seleccione...</option>
                </select>
                
                <br>
                
                <input type="submit" value="Ingresar." class="btn btn-primary">

            </form>

        </div>
        
    </div>
</div>

        <div class="col-lg-6">
            <div class="box box-primary">
                <table id="tblProductos" class="table table-bordered table-striped">
                            <tr>
                              <th style="width: 30%">Fecha/Dia</th>
                              <th style="width: 25%">Ejercicio</th>
                              <th style="width: 10%">Series</th>
                              <th style="width: 10%">Tiempo</th>
                              <th style="width: 40%">Entrenador</th>
                              <th style="width: 10%">Borrar</th>
                            </tr>
                </table>
            </div>
        </div>

</div> <!-- end row -->

<div class="row">
    <div class="col-lg-6">
        
    </div>

    <div class="col-lg-2">
        <button type="button" class="btn btn-block btn-primary" id="btnGuardarProd">Guardar</button>
    </div>

    <div class="col-lg-2">
        <button type="button" class="btn btn-block btn-primary" id="btnBorrarProd">Eliminar</button>
    </div>
    
</div>
<div class="w3-container">
  <h2>El cambio esta en ti</h2>
  <p>Se el cambio para el mundo pero primero cambia tu forma de vida haciendo ejercicio</p>

  <div class="jjjjjjjjj">
    <img src="https://image.freepik.com/foto-gratis/mujer-sexy-ropa-deportiva-usando-banda-resistencia-su-rutina-ejercicios_125398-21.jpg" alt="Lights" style="width:100%">

  </div>
<script type="text/javascript">
	var baseurl = "<?php echo base_url();?>";
</script>