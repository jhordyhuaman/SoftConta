var form = $("#formcompra");

$("#example-basic").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    autoFocus: true,
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        form.submit();
    }
});

form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        name:"required",
        apellido:"required",
        nombre_razon_s:"required",
        tipodoc:"required",
        ndoc:"required"
    },
    messages:{
        name:"Requiere Nombre",
        apellido:"Requiere Apellido ",
        nombre_razon_s:"Requiere Nombre de la Razon Social",
        tipodoc_id:"Requiere tipo de Documento",
        numero_doc:"Requiere Numero de cocumento"
    }
});


// ********************************productos********************************************

$('#addproduct').click(function(){
    $('.modalprodu').modal('toggle');
    add_productos();
});


    //Funcion para añadir una nueva columna en la tabla

    $("#add").click(function(){

        var tds=$("#tabla thead tr:first th").length;
        var trs=$("#tabla tbody tr").length;
        console.log(tds  ,  trs);
        var nuevaFila="<tr>";
        for(var i=0;i<tds;i++){
            nuevaFila+="<td>columna "+(trs+1)+"</td>";
        }
        nuevaFila+='<td><a id="remo" class="btn bgm-red btn-icon waves-effect waves-button waves-float" >'+
                   '<i class="md md-remove" ></i></a></td>';
        $("#tabla").append(nuevaFila);
    });

    //Funcion para eliminar la ultima columna de la tabla.

    $(document).on('click',"#remo",function(){
        var parent = $(this).closest('tr').remove();
        console.log(parent);
        
    });

function add_productos() {
    var json = [];
    $('#productos input').each(function(i){
       var valor =$(this).val();
       var name =$(this).attr('name');
        var v =json.push("valor",valor);
        var ids =json.push("id",name);


    });
    console.log(json);
}