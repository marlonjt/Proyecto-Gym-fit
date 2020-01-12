$.post(baseurl+"cproveedores/getProveedor", //se obtienen datos del controlador
	function(data){
    var obj = JSON.parse(data);
    var estilo = "background: transparent;border:0px;outline: none;text-align:center;width: 100%";
    var ids = [];
    $.each(obj, function(i, item){ //recorre los productos consultados y construye la tabla
        $('#tblProveedores tbody').append(
            '<tr class="filaProveedores">'+
                '<td><input type="text" id="'+item.idprov+'" value="'+item.nombre+'" style="'+estilo+'" class="nombre"></td>'+
                '<td>'+
                '<input type="checkbox" class="elim'+item.idprov+'">'+
                '</td>'+
            '</tr>'
            );
            ids.push(item.idprov);
    });

    $('#btnGuardarProv').click(function(){
      var i = 0;
      $('#tblProveedores .filaProveedores').each(function(){
        var id = $('.nombre:eq('+i+')').attr('id');
        var nombre = $('.nombre:eq('+i+')').val();

    
        $.post(baseurl+"cproveedores/actualizarProveedor", //se envian los datos al controlador
          {
            id: id,
            nombre:nombre
          });
        i++;
    
      });
      alert('Se guardo satisfactoriamente');
      })//Funcion para guardar producto basado en lo que se modifico en la tabla


      
	$('#btnBorrarProv').click(function(){
		var i = 0;
		$('#tblProveedores .filaProveedores').each(function(){
			var id = $('.nombre:eq('+i+')').attr('id');
			var elim = $('.elim'+ids[i]);
      var nombre = $('.nombre:eq('+i+')').val();

			if( elim.is( ':checked' ) ){
			$.post(baseurl+"cproveedores/borrarProveedor", //se envian los datos al controlador
				{
          id: id,
          nombre:nombre
				});
			}
			i++;
	
		});
		alert('Se elimino satisfactoriamente');
		});
  });
