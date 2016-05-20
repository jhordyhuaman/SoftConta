Añadir Producto : <a  id="add" class="btn bgm-cyan btn-icon waves-effect waves-button waves-float" data-toggle="modal"
                     href="#modalNarrower" style="width: 40px; height: 40px;">
    <i class="md md-add" style="font-size: 30px;"></i></a>

<hr>
<div style="height:40%; overflow-y: scroll; ">

<table id="tabla" class="table" >
    <thead>
         <tr>
             <th>Nombre</th>
             <th>Cantidad</th>
             <th>Precio</th>
             <th>IGV</th>
         </tr>
    </thead>
    <tbody>

    </tbody>

</table>
</div>
<hr>

<!-- Modal Small -->
<div class="modal fade modalprodu" id="modalNarrower" tabindex="-1" role="dialog" aria-hidden="true"
     style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Añadir Producto</h4>
            </div>
            <div class="modal-body">
                <div id="productos">
                <p>Producto :</p>
                <div class="input-group">
                    <span class="input-group-addon"><i class="md md-shopping-cart"></i></span>
                    <div class="col-md-3">
                        <div class="fg-line">
                            <input name="nombre_prod" type="text" class="form-control" placeholder="Nombre Producto">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fg-line">
                            <input name="descripcion" type="text" class="form-control" placeholder="Descripcion">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fg-line">
                            <input name="stock_actu" type="number" class="form-control" placeholder="Cantidad">
                        </div>
                    </div>
                </div><hr>
                <p>precio</p>
                <div class="input-group">
                    <span class="input-group-addon"><i class="md md-attach-money"></i></span>
                    <div class="col-md-3">
                        <div class="fg-line">
                            <input name="precio_compra" type="number" class="form-control" placeholder="Compra" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fg-line">
                            <input name="precio_venta" type="number" class="form-control" placeholder="Venta">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fg-line">
                            <input name="precio_normal" type="number" class="form-control" placeholder="precio normal">
                        </div>
                    </div>
                </div><hr>
                <p>Inventario</p>
                <div class="input-group">
                    <span class="input-group-addon"><i class="md md-add-box"></i></span>
                    <div class="col-md-3">
                        <div class="fg-line">
                            <select class="selectpicker" name="id_categoria">
                                <option value="1">limpieza</option>
                                <option value="2">verduras</option>
                                <option value="3">ferreteria</option>
                                <option value="4">otros</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fg-line">
                            <input name="stock_min" type="number" class="form-control" placeholder="stock minimo">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fg-line">
                            <input name="stock_max" type="number" class="form-control" placeholder="stock maximo">
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="md md-view-day"></i></span>
                    <div class="col-md-3">
                        <div class="fg-line">
                            <input name="fecha_reg" type="date" class="form-control" placeholder="fecha registro">
                        </div>
                    </div>
                    <div class="col-md-3" style="display: none;">
                        <div class="fg-line">
                            <input name="fecha_vent" type="date" class="form-control" placeholder="fecha venta">
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" ID="addproduct" class=" btn waves-effect waves-button waves-float bgm-teal">ADD
                </button>
            </div>
        </div>
    </div>
</div>