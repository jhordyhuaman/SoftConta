@extends('layouts.app')
@section('content')
    <div class="modal fade" id="preventClick" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog">
            {!! Form::open(['route'=>'Venta.store','method'=>'POST']) !!}
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registrar Cliente</h4>
                </div>
                <div class="modal-body">

                    <label class="radio radio-inline m-r-20">
                        <input checked class="btnchec" type="radio" name="persona" value="1">
                        <i class="input-helper"></i>
                        Persona Natural
                    </label>
                    <label class="radio radio-inline m-r-20">
                        <input class="btnchec" type="radio" name="persona" value="2">
                        <i class="input-helper"></i>
                        Persona Juridica / Razón Social
                    </label>

                    <div class="pnatural input-group">
                        <span class="input-group-addon"><i class="md md-person"></i></span>
                        <div class="col-sm-5">
                            <div class="fg-line">
                                <input name="name" type="text" class="form-control" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="fg-line">
                                <input name="apellido" type="text" class="form-control" placeholder="Apellido">
                            </div>
                        </div>
                    </div>

                    <div style="display: none;" class="psocial input-group">
                        <span class="input-group-addon"><i class="md md-person"></i></span>
                        <div class="col-sm-10">
                            <div class="fg-line">
                                <input name="razonsocial" type="text" class="form-control" placeholder="Razon Social">
                            </div>
                        </div>
                    </div>
                    <br>


                    <div class="input-group">
                        <span class="input-group-addon"><i class="md md-credit-card"></i></span>
                        <div class="col-sm-4">
                            <div class="fg-line select">
                                <select name="tipodoc_id" id="tipodoc" class="form-control">
                                    <option>Tipo Doc</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="fg-line">
                                <input name="n_doc" type="text" class="form-control" placeholder="Numero de Documento">
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="md md-home"></i></span>
                        <div class="col-sm-6">
                            <div class="fg-line">
                                <input name="direccion" type="text" class="form-control" placeholder=" Direccion">
                            </div>
                        </div>
                    </div>
                    <br/>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="md md-phone"></i></span>
                        <div class="col-sm-6">
                            <div class="fg-line">
                                <input name="telefono1" type="text" class="form-control" placeholder=" Telefono">
                            </div>
                        </div>
                    </div>
                    <br/>

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
            <div style="z-index: 2;position: absolute;margin-left:50%; ">
                <button class="btn bgm-teal btn-icon waves-effect waves-button waves-float" data-toggle="modal" href="#preventClick" style="width: 60px;height: 60px;"><i style="font-size:40px;" class="md md-add"></i></button>
                <button class="btn bgm-cyan btn-icon waves-effect waves-button waves-float"><i class="md md-sync"></i></button>
                <button class="btn bgm-lightblue btn-icon waves-effect waves-button waves-float"><i class="md md-get-app"></i></button>
                <button class="btn btn-primary btn-icon waves-effect waves-button waves-float"><i class="md md-home"></i></button>
                <button class="btn bgm-lime btn-icon waves-effect waves-button waves-float"><i class="md md-apps"></i></button>
            </div>
            <div class="row">
                    <div role="tabpanel" class="tab">
                        <ul class="tab-nav" role="tablist" tabindex="3" style="overflow: hidden; outline: none;">
                            <li class="active"><a href="#home9" aria-controls="home9" role="tab" data-toggle="tab">Ventas</a>
                            </li>
                            <li><a href="#profile9" aria-controls="profile9" role="tab" data-toggle="tab">Facturas</a>
                            </li>
                            <li><a href="#messages9" aria-controls="messages9" role="tab" data-toggle="tab">Clientes</a>
                            </li>
                        </ul>

                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane animated fadeInRight active" id="home9">

                                <table id="listventas" class="table table-striped table-condensed">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Sender</th>
                                        <th>Received</th>
                                        <th>Commands</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
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
            <br/><br/><br/>
            <br/><br/><br/>
            <br/><br/><br/>
            <br/><br/><br/>
            <br/><br/><br/>
            <br/><br/><br/>
            <br/><br/><br/>
            <br/><br/><br/>
            <br/><br/><br/>
            <br/><br/><br/>
        </div>
    </div>

@stop

@section('footer')

{!! Html::script('funciones/datalist.js')!!}

@stop