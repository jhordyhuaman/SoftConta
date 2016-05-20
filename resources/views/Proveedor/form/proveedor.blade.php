


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
            <label for="name"></label>
            <input id="name" name="name" type="text" class="form-control" placeholder="Nombre">
        </div>
    </div>
    <div class="col-sm-5">
        <div class="fg-line">
            <label for="apellido"></label>
            <input id="apellido" name="apellido" type="text" class="form-control" placeholder="Apellido">
        </div>
    </div>
</div>

<div style="display: none;" class="psocial input-group">
    <span class="input-group-addon"><i class="md md-person"></i></span>
    <div class="col-sm-10">
        <div class="fg-line">
            <label for="rsocial"></label>
            <input id="rsocial" name="nombre_razon_s" type="text" class="form-control" placeholder="Razon Social">
        </div>
    </div>
</div>
<br>

<div class="input-group">
    <span class="input-group-addon"><i class="md md-credit-card"></i></span>
    <div class="col-sm-4">
        <div class="fg-line select">
            <label for="tipodoc_id"></label>
            <select name="tipodoc_id" id="tipodoc" class="form-control" required>
                <option></option>
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="fg-line">
            <label for="ndoc"></label>
            <input id="ndoc" name="numero_doc" type="text" class="form-control" placeholder="Numero de Documento" required>
        </div>
    </div>
</div>
<br>
<div class="input-group">
    <span class="input-group-addon"><i class="md md-language"></i></span>
    <div class="col-sm-3">
        <div class="fg-line">
            <input name="pais" class="form-control" type="text" placeholder="pais">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="fg-line">
            <input name="ciudad" class="form-control" type="text" placeholder="ciudad">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="fg-line">
            <input name="provincia" class="form-control" id="provincia" type="text" placeholder="provincia">
        </div>
    </div>
</div>


