getTipoTabla('2','#tipodoc');

    function getTipoTabla(n_tab,idhtml){
        var rv = {};
        $.get("tipotabla/"+n_tab+"",function(arr){
            for (var i = 0; i < arr.length; ++i){
                rv[i] = arr[i];
            }
            $.each(rv,function(i,data){
                var html = '<option value="'+data.id+'">('+data.numero+') '+data.descripcion+'</option>';
                $(idhtml).append(html);
            });
        });

    }

$("input[type='radio'].btnchec").click(function () {
    var opt = $("input[type='radio'].btnchec:checked").val(); 
    if(opt == 1){
        $('.pnatural').show(200);
        $('.psocial').hide();
    }else{
        $('.psocial').show(200);
        $('.pnatural').hide();
    }

});

$("#data-table-command").bootgrid({
    css: {
        icon: 'md icon',
        iconColumns: 'md-view-module',
        iconDown: 'md-expand-more',
        iconRefresh: 'md-refresh',
        iconUp: 'md-expand-less'
    },
    formatters: {
        "commands": function(column, row) {
            return "<button type=\"button\" class=\"btn btn-icon command-edit\" data-row-id=\"" + row.id + "\"><span class=\"md md-edit\"></span></button> " +
                "<button type=\"button\" class=\"btn btn-icon command-delete\" data-row-id=\"" + row.id + "\"><span class=\"md md-delete\"></span></button>";
        }
    }

});
