<div class="col-12 col-md-6 col-lg-4 mt-2">
    <div class="form-group">
        <label for="type">Tipo</label>
        <select name="type" id="type" onchange="category(this.value)" class="form-control" required>

            @if (isset($registration->type))
                <option value="{{ $registration->type }}" class="text-primary h6" selected>
                    {{ $registration->type }}
                </option>
            @else
                <option disabled selected>Selecione o Tipo</option>
            @endif

            <option value="Individual">Individual</option>
            <option value="Empresa">Empresa</option>
        </select>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-12 mt-2">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
        placeholder="Informe o seu Primeiro e Último Nome" required />
</div>
<div class="col-lg-3 col-md-6 col-12 mt-2">
    <label for="company" class="form-label">Empresa/Organização/Governo</label>
    <input type="text" class="form-control" id="company" name="company" value="{{ old('company') }}"
        placeholder="Empresa/Organização/Governo" required />
</div>

<div class="col-lg-3 col-md-6 col-12 mt-2">
    <label for="quantity" class="form-label">Quantidade</label>
    <input type="text" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}"
        placeholder="Quantidade" required />
</div>

<div class="col-lg-3 col-md-6 col-12 mt-2">
    <label for="level">Nivel </label>
    <select name="level" id="level" class="form-control">

        <option value="" disabled selected>
            Selecione uma opção
        </option>

        <option value="Normal" selected>Normal</option>
        <option value="VIP">VIP</option>
    </select>
</div>
