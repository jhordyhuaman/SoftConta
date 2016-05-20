getTipoTabla('2','#tipodoc');

    function getTipoTabla(n_tab,idhtml){
        var rv = {};
        $.get("tipotabla/"+n_tab+"",function(arr){
            for (var i = 0; i < arr.length; ++i){
                rv[i] = arr[i];
            }
            $.each(rv,function(i,data){
                var html = '<option value="'+data.id_tipo_tabla+'">('+data.numero+') '+data.descripcion+'</option>';
                $(idhtml).append(html);
            });
        });

    }

$(document).on('click',"input[type='radio'].btnchec",function () {
    var opt = $("input[type='radio'].btnchec:checked").val(); 
    if(opt == 1){
        $('.pnatural').show(200);
        $('.psocial').hide();
    }else{
        $('.psocial').show(200);
        $('.pnatural').hide();
    }

});

