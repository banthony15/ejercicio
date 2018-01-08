function LoadDireccion(tabla,item){
    $.ajax({
        url: BASE_URL +'ajax/LoadDireccion/'+tabla+'/'+item,
        type: 'post',
        dataType: 'json'
    })
    .done(function(data) {
        $('#'+tabla).empty();
            $('#'+tabla).append('<option>Seleccione</option>');     
        for (var i = 0; i < data.length; i++) {
            $('#'+tabla).append('<option value='+data[i][0]+'>'+data[i][1]+'</option>');
        };
    })
    .fail(function() {
        //alert("fail");
    })
    .always(function() {
        //alert("always");
    });
}