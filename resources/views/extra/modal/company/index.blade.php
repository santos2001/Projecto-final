<form class="card-body" action="{{ route('admin.company.list') }}" target="_blank">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Imprimir Lista de Empresas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">STATUS <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <select required name="status" class="form-control">
                                <option value="PAGO">PAGO</option>
                                <option value="EMITIDO">EMITIDO</option>
                                <option value="RECEBIDO">RECEBIDO</option>
                                <option value="DUPLICADO">DUPLICADO</option>
                                <option value="APROVADO">APROVADO</option>
                                <option value="TODAS">TODAS</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <b class="col-md-12 text-center">Incluir Colunas no Documento</b>
                        <div class="col-md-12">
                            <div class="row text-left mx-2 mt-3">

                                <div class="form-check col-12 col-md-6 col-lg-6">
                                    <input type="checkbox" class="form-check-input" name="plafond" checked>
                                    <small>Plafond</small>
                                </div>
                                <div class="form-check col-12 col-md-6 col-lg-6">
                                    <input type="checkbox" class="form-check-input" name="code">
                                    <small>Código</small>
                                </div>
                                <div class="form-check col-12 col-md-6 col-lg-6">
                                    <input type="checkbox" class="form-check-input" name="nif" checked>
                                    <small>NIF</small>
                                </div>
                                <div class="form-check col-12 col-md-6 col-lg-6">
                                    <input type="checkbox" class="form-check-input" name="company" checked>
                                    <small>Empresa/Organização/Ministério</small>
                                </div>
                                <div class="form-check col-12 col-md-6 col-lg-6">
                                    <input type="checkbox" class="form-check-input" name="phone">
                                    <small>Telefone</small>
                                </div>
                                <div class="form-check col-12 col-md-6 col-lg-6">
                                    <input type="checkbox" class="form-check-input" name="email" checked>
                                    <small>Email</small>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Imprimir</button>
                    </div>
                </div>
            </div>
        </div>
</form>
