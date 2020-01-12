console.log('cargo');
$.post("http://localhost/proyectoCI/cingresos/getProveedor",
  {
    "sitreg" : 1
  },
  function (data) {
    var c = JSON.parse(data);
    $.each(c,function(i,item){
      $('#cboProveedor').append('<option name="'+item.nombre+'" value="'+item.idprov+'">'+item.nombre+'</option>');
    }); 
  });
  
$.post("http://localhost/proyectoCI/cingresos/getCategoria",

function (data) {
  var c = JSON.parse(data);
  $.each(c,function(i,item){
    $('#cboCategoria').append('<option name="'+item.nombrecat+'" value="'+item.idcat+'">'+item.nombrecat+'</option>');
  });
});

  
