<form action="/places" method="GET">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="rajonas">Pagal savivaldybę</label>
            <select class="form-control" name="r" id="rajonas">
            <option>Visi</option>
            @foreach ($rajonai as $rajonas)
            <option>{{$rajonas->rajonas}}</option>
            @endforeach
            </select>
        </div>
    
        <div class="form-group col-md-4">
            <label for="parkas">Pagal regioninį parką</label>
            <select class="form-control" name="p" id="parkas">
            <option>Visi</option>
            @foreach ($parkai as $parkas)
            <option>{{$parkas->parkas}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="tipas">Pagal lankytinos vietos tipą</label>
            <select class="form-control" name="t" id="tipas">
            <option>Visi</option>
            @foreach ($tipai as $tipas)
            <option>{{$tipas->tipas}}</option>
            @endforeach
            </select>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="s" placeholder="Paieška" value="{{ isset($s) ? $s : '' }}">
        <div class="form-group-append">
            <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </div>
</form>
