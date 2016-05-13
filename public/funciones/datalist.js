


function f_DataTable(tblTabla) {
    var oTable = $('#' + tblTabla).dataTable({
        "sPaginationType": "full_numbers",
        "oLanguage": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "No hay registros disponibles en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(Filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            // "sSearchPlaceholder": "Elemento de búsqueda...",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "<i class='md md-more-horiz'></i>",
                "sLast": "<i class='md md-more-horiz'></i>",
                "sNext": "<i class='md md-chevron-right'></i>",
                "sPrevious": "<i class='md md-chevron-left'></i>"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
    return oTable;
}

var oTableClientes =f_DataTable('listventas');

listar_clientes();
function listar_clientes() {

    oTableClientes.fnClearTable();
    $.ajax({
        type: "GET",
        url: 'listventa',
        data: {},
        contentType: "application/json; charset=utf-8",
        dataType: 'json',
        error: function (data, status) {
         console.log(data);
            oTableClientes.fnDraw();
        },
        success: function (data) {
            console.log(data);

            $.each(data, function (i, r) {

                oTableClientes.fnAddData([

                    '<div style="text-align:center;">' + r.id + '</div>',
                    '<div style="text-align:center;">' + r.igv+ '</div>',
                    '<div style="text-align:center;">' + r.otros + '</div>',
                    '<div style="text-align:center;">' + '<button class="btn btn-icon command-delete" id="btn_Eli' + r.id + '" title="Eliminar"><span class="md md-delete"></span></button>' + '</div>'

                ]);

                $(document).on('click', '#btn_Eli' + r.id, function () {
                    swal({
                            title: "Desea eliminar",
                            showCancelButton: true,
                            confirmButtonText: "Aceptar",
                            cancelButtonText: "Cancelar",
                        },
                        function (isConfirm) {
                            if (isConfirm) {
                                alert("dfs");
                            }
                        })
                });

            });
            oTableClientes.fnDraw();
        }


    });
}/**
 * Created by JHORDY on 11/05/2016.
 */
