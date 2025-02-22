<div class="single-form-part">
    <div class="single-input">
        <div class="single-input-item">
            <div class="form-group">
                <label for="type">Tipo</label>
                <select name="type" id="type" onchange="category(this.value)" required>

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
        <div class="single-input">
            <div class="single-input-item" id="qnt">
                <label for="quantity">Quantidade de Credenciais</label>
                <input type="number" id="quantity" name="quantity"
                    value="{{ isset($registration->quantity) ? $registration->quantity : old('quantity') }}"
                    placeholder="Informe a Quantidade" min="1" max="500" step="1" />
            </div>
        </div>

    </div>

    <div class="single-input">
        <div class="single-input-item">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name"
                value="{{ isset($registration->name) ? $registration->name : old('name') }}"
                placeholder="Primeiro e Último Nome" required />
        </div>
        <div class="single-input">
            <div class="single-input-item">
                <label for="function">Função</label>
                <input type="text" id="function" name="function"
                    value="{{ isset($registration->function) ? $registration->function : old('function') }}"
                    placeholder="Informe a sua Função" {!! Auth::user() ? '' : 'required' !!} />
            </div>
        </div>

    </div>
    <div class="single-input">
        <div class="single-input-item">
            <label for="idCard">NIF</label>
            <input type="text" id="idCard"
                value="{{ isset($registration->idCard) ? $registration->idCard : old('idCard') }}" name="idCard"
                placeholder="Número de Identificação Fiscal" {!! Auth::user() ? '' : 'required' !!} />
        </div>

        <div class="single-input-item">
            <label for="company">Empresa/Organização/Governo</label>
            <input type="text" id="company" name="company"
                value="{{ isset($registration->company) ? $registration->company : old('company') }}"
                placeholder="Empresa/Organização/Governo" required />
        </div>
    </div>

    <div class="single-input">
        <div class="single-input-item">
            <label for="tel">Telefone</label>
            <input type="text" id="tel" name="tel"
                value="{{ isset($registration->tel) ? $registration->tel : old('tel') }}"
                placeholder="Informe o seu Telefone" {!! Auth::user() ? '' : 'required' !!} />
        </div>

        <div class="single-input-item">
            <label for="email">Email</label>
            <input type="email" id="email" name="email"
                value="{{ isset($registration->email) ? $registration->email : old('email') }}"
                placeholder="Informe o seu Email" {!! Auth::user() ? '' : 'required' !!} />
        </div>
    </div>

    @if (null !== Auth::user() && isset($registration->level))
        <div class="single-input">
            <div class="single-input-item">
                <label for="level">Nivel </label>
                <select name="level" id="level">

                    <option value="{{ $registration->level }}" class="text-primary h6" selected>
                        {{ $registration->level }}
                    </option>

                    <option value="Normal">Normal</option>
                    <option value="VIP">VIP</option>
                </select>
            </div>
        </div>
    @endif
</div>
