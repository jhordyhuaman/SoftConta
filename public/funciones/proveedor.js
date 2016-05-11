$('.shearp').keypress(function (d) {
     var busqueda= d.currentTarget.value;
    

    $.get("buscar/proveedor/"+busqueda+"",function(data){
        console.log(data);
        var rv = {};
        for (var i = 0; i < data.length; ++i){
            rv[i] = arr[i];
        }
      
    });
    
});