<div class="row mb-2">
    <div class="col-lg-4 col-md-6 col-12 mt-2">
        <label for="nif" class="form-label">Número de Identificação Fiscal (NIF)</label>
        <input type="text" class="form-control" id="nif"
            value="{{ isset($company->nif) ? $company->nif : old('nif') }}" name="nif"
            placeholder="Informe o seu Número" required />
    </div>

    <div class="col-lg-4 col-md-6 col-12 mt-2">
        <label for="company" class="form-label">Empresa/Organização/Ministério</label>
        <input type="text" class="form-control" id="company" name="company"
            value="{{ isset($company->company) ? $company->company : old('company') }}"
            placeholder="Empresa/Organização/Ministério" required />
    </div>


    <div class="col-lg-4 col-md-6 col-12 mt-2">
        <label for="phone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="phone" name="phone"
            value="{{ isset($company->phone) ? $company->phone : old('phone') }}"
            placeholder="Informe o seu Telefone" required />
    </div>

    <div class="col-lg-4 col-md-6 col-12 mt-2">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email"
            value="{{ isset($company->email) ? $company->email : old('email') }}"
            placeholder="Informe o seu Email" required />
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-2">
        <label for="email" class="form-label">Ramo de Actuação</small></label>
        <input type="text" class="form-control" id="lineBusiness" name="lineBusiness"
            value="{{ isset($company->lineBusiness) ? $company->lineBusiness : old('lineBusiness') }}"
            placeholder="Informe o Ramo de Actuação" required />
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-2">
        <label for="Website" class="form-label">Website</small></label>
        <input type="text" class="form-control" id="Website" name="Website"
            value="{{ isset($company->Website) ? $company->Website : old('Website') }}"
            placeholder="Informe o seu Website"  />
    </div>
    <div class="col-lg-12 col-md-12 col-12 mt-2">
        <label for="logo" class="form-label">Carregar Logo Empresa</label><br>
 <small class="text-danger">
    PNG ou JPG com alta resolução
 </small>
        <input type="file" class="form-control" name="logo" id="logo" />
    </div>

</div>
