<div class="col-12 col-md-4 col-lg-4">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name"
            value="{{ isset($companyMember->name) ? $companyMember->name : '' }}"
            class="form-control border-secondary" placeholder="Nome Completo" required>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-4 col-lg-4">
    <div class="form-group">
        <label for="nif">NIF <small>(Número de Identificação Fiscal)</small></label>
        <input type="text" name="nif" id="nif"
            value="{{ isset($companyMember->nif) ? $companyMember->nif : '' }}"
            class="form-control border-secondary" placeholder="NIF" required>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-4 col-lg-4">
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control" required>

            @if (isset($companyMember->status))
                <option value="{{ $companyMember->status }}" class="text-primary h6" selected>
                    {{ $companyMember->status }}
                </option>
            @else
                <option disabled selected>Selecione o Status</option>
            @endif

            <option value="PENDENTE">PENDENTE </option>
            <option value="EMITIDO">EMITIDO</option>
            <option value="DUPLICADO">DUPLICADO</option>
            <option value="RECEBIDO">RECEBIDO</option>
        </select>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-12 col-lg-12">
    <div class="form-group">
        <label for="photo">Foto de Passe a carregar</label>
        <div class="custom-file">
            <input value="{{ isset($companyMember->file) ? $companyMember->file : '' }}"
                class="form-control border-secondary" type="file" name="photo" id="photo">

        </div>
    </div>
</div> <!-- /.col -->
