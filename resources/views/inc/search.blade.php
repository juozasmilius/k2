<form action="places" method="GET" class="form-row">
    @csrf
    <div class="col input-group mb-3">
        <input type="text" class="form-control" name="s" placeholder="Paieška" value="{{ isset($s) ? $s : '' }}">
        <div class="input-group-append">
            <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </div>
</form>
<hr>