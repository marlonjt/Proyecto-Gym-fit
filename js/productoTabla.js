$.post(baseurl+"cingresos/getProductos", //se obtienen datos del controlador
	function(data){
		var obj = JSON.parse(data);
		var estilo = "background: transparent;border:0px;outline: none;text-align:center;width: 100%";
		var ids = [];
		$.each(obj, function(i, item){ //recorre los productos consultados y construye la tabla
			$('#tblProductos tbody').append(
				'<tr class="filaProuctos">'+
					'<td><input type="text" id="'+item.id+'" value="'+item.nombreprod+'" style="'+estilo+'" class="nombreprod"></div></td>'+
					'<td>'+
					'<select id="cboCategoriaM" name="txtCategoria" class="form-control categ">'+
					'<option  value="'+item.idcat+'">'+item.nombrecat+' :Predet.'+'</option>'+                
					'</select>'+
					'</td>'+
					'<td><input type="number" min="0" value="'+item.cantidad+'" style="'+estilo+'" class="cant"></td>'+
					'<td><input type="number" min="0" value="'+item.precio+'" style="'+estilo+'" class="precio"></td>'+
					'<td>'+          
					'<select id="cboProveedorM" name="txtProveedor" class="form-control prov">'+
                    '<option  value="'+item.idprov+'">'+item.nombre+' :Predet.'+'</option>'+
					'</select></td>'+
					'<td>'+
					'<input type="checkbox" class="elim'+item.id+'">'+
					'</td>'+
				'</tr>'
				);
				ids.push(item.id);
		});

$.post("http://localhost/proyectoCI/cingresos/getProveedor", //se obtienen datos del controlador
  {
    "sitreg" : 1
  },
  function (data) {
    var c = JSON.parse(data);
    $.each(c,function(i,item){
      $('#cboProveedorM').append('<option name="'+item.nombre+'" value="'+item.idprov+'">'+item.nombre+'</option>');
    }); 
  }); //Obtener proveedores en lista para la tabla.

$.post("http://localhost/proyectoCI/cingresos/getCategoria",
{
"sitregcat" : 1
},
function (data) {
var c = JSON.parse(data);
$.each(c,function(i,item){
	$('#cboCategoriaM').append('<option name="'+item.nombrecat+'" value="'+item.idcat+'">'+item.nombrecat+'</option>');
});
});
  

$('input[type=text]').focus(function(){
	$(this).select();
}); //Seleccionar todo el input(valores) al hacer clic

$('#btnGuardarProd').click(function(){
	var i = 0;
	$('#tblProductos .filaProuctos').each(function(){
		var id = $('.nombreprod:eq('+i+')').attr('id');
		var nombreprod = $('.nombreprod:eq('+i+')').val();
		var categ = $('.categ:eq('+i+')').val();
		var cant = $('.cant:eq('+i+')').val();
		var precio = $('.precio:eq('+i+')').val();
		var prov = $('.prov:eq('+i+')').val();

		$.post(baseurl+"cingresos/actualizarProducto", //se envian los datos al controlador
			{
				id: id,
				nombreprod:nombreprod,
				categ:categ,
				cant:cant,
				precio:precio,
				prov:prov,
			});
		i++;

	});
	alert('Se guardo satisfactoriamente');
	})//Funcion para guardar producto basado en lo que se modifico en la tabla

	$('#btnBorrarProd').click(function(){
		var i = 0;
		$('#tblProductos .filaProuctos').each(function(){
			var id = $('.nombreprod:eq('+i+')').attr('id');
			var elim = $('.elim'+ids[i]);
			
			if( elim.is( ':checked' ) ){
			$.post(baseurl+"cingresos/borrarProducto", //se envian los datos al controlador
				{
					id: id
				});
			}
			i++;
	
		});
		alert('Se elimino satisfactoriamente');
		});
});