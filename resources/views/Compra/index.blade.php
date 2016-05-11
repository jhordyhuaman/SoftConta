@extends('layouts.app')
@section('content')


<div class="modal fade" id="preventClick" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog">
        {!! Form::open(['route'=>'Compra.store','method'=>'POST']) !!}
        {{ csrf_field() }}
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar Cliente</h4>
            </div>
            <div class="modal-body">



                    <select name="tipotabla_id" id="tabladatos">
                        <option>Tipo de documento</option>
                        <option value="11">Factura</option>
                        <option value="12">boleta</option>
                    </select><br/>
                    <input name="fecha_emi" type="date"><br/>
                    <input name="fecha_ven" type="date"><br/>
                    <input name="num_cpago" placeholder="N° doc pago" type="text"><br/>
                    <input name="anio_emision" placeholder="año de emision" type="text"><br/>
                    <input name="serie_codigo" placeholder="serie codigo" type="text"><br/>
                    <hr/>
                    <input name="num_corela" placeholder="numero corela" type="text"><br/>
                    <input name="tipo_adquisicion" placeholder="2 tipo adquisicion" type="text"><br/>
                    <input name="base" placeholder="base" type="text"><br/>
                    <input name="igv" placeholder="igv" type="text"><br/>
                    <input name="otros_trib" placeholder="otros trib" type="text"><br/>
                    <input name="importe_total" placeholder="" type="text"><br/>
                    <hr>
                    <select name="tipodoc_id" id="tabladatos">
                        <option>Tipo de documento</option>
                        <option value="9">otros tipos de documentos</option>
                        <option value="71">DNI</option>
                        <option value="72">carnet extrangeria</option>
                        <option value="73">pasaporte</option>
                        <option value="73">cedula diplomado</option>
                    </select><br/>
                    <input name="numero_doc" type="text" placeholder="numero doc">
                    <input name="nombre_razon_s" class="shearp form-control" type="text" placeholder="Nombre">
                    <div id="resultado"></div>
                    <input name="pais" type="text" placeholder="pais">
                    <input name="ciudad" type="text" placeholder="ciudad">
                    <input name="provincia" type="text" placeholder="provincia">

                    <button type="submit">Registar</button>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary bgm-teal">Registrar</button>
                <button type="button" class="btn btn-primary bgm-bluegray" data-dismiss="modal">Close</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>

    <div class="card">
        <div class="card-body card-padding">

            <div class="row">
                <div role="tabpanel" class="tab">
                    <ul class="tab-nav" role="tablist" tabindex="3" style="overflow: hidden; outline: none;">
                        <li class="active"><a href="#home9" aria-controls="home9" role="tab" data-toggle="tab">Compras</a>
                        </li>
                        <li><a href="#profile9" aria-controls="profile9" role="tab" data-toggle="tab">Facturas</a>
                        </li>
                        <li><a href="#messages9" aria-controls="messages9" role="tab" data-toggle="tab">Proveedores</a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane animated fadeInRight active" id="home9">
                            <div style="z-index: 2;position: absolute;margin-left:50%; ">
                                <button class="btn bgm-teal btn-icon waves-effect waves-button waves-float" data-toggle="modal" href="#preventClick" style="width: 60px;height: 60px;"><i style="font-size:40px;" class="md md-add"></i></button>
                                <button class="btn bgm-cyan btn-icon waves-effect waves-button waves-float"><i class="md md-sync"></i></button>
                                <button class="btn bgm-lightblue btn-icon waves-effect waves-button waves-float"><i class="md md-get-app"></i></button>
                                <button class="btn btn-primary btn-icon waves-effect waves-button waves-float"><i class="md md-home"></i></button>
                                <button class="btn bgm-lime btn-icon waves-effect waves-button waves-float"><i class="md md-apps"></i></button>
                            </div>
                            <table id="data-table-command" class="table table-striped table-vmiddle">
                                <thead>
                                <tr>
                                    <th data-column-id="numerocorela">Nº</th>
                                    <th data-column-id="fecha-emi">fecha-emicion</th>
                                    <th data-column-id="tipodoc">Tipo Doc</th>
                                    <th data-column-id="dase">Base</th>
                                    <th data-column-id="total">Total</th>
                                    <th data-column-id="otrosimportes">Otros Importes</th>
                                    <th data-column-id="proveedor">Proveedor</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
                                </tr>
                                </thead>
                                <tbody >
                                @foreach($compras as $compra)
                                    <tbody >
                                    <td>{{$compra ->compra->num_corela}}</td>
                                    @if($compra->compra->documento_pago != null)
                                     <td>{{$compra->compra->documento_pago -> fecha_emi}}</td>
                                     <td>{{$compra->compra->documento_pago->tipo_tabla->descripcion}}</td>
                                    @endif
                                    <td>{{$compra->compra-> base }}</td>
                                    <td>{{$compra->compra-> importe_total}}</td>
                                    <td>{{$compra->compra -> otros }}</td>
                                    <td>{{$compra->proveedor->nombre_razon_s}}</td>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>

                        <div role="tabpanel" class="tab-pane animated fadeInRight" id="profile9">
                            <p>Morbi mattis ullamcorper velit. Etiam rhoncus. Phasellus leo dolor, tempus non,
                                auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis.
                                Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus pede. Nulla sit
                                amet est. Donec mi odio, faucibus.</p>
                        </div>

                        <div role="tabpanel" class="tab-pane animated fadeInRight" id="messages9">
                            <p>Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Cras
                                id dui. Curabitur turpis.
                                Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus pede. Nulla sit
                                amet est. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Praesent
                                ac sem eget est egestas volutpat.</p>
                        </div>

                    </div>

                </div>
            </div>

            <br/><br/><br/>
        </div>
    </div>


@stop