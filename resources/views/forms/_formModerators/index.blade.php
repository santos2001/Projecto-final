@isset($moderators)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Foto Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $moderators->photo }}");background-position:center;background-size:cover;height:400px;width:500px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="name">Nome Completo</label>
        <input type="text" name="name" id="name" value="{{ isset($moderators->name) ? $moderators->name : '' }}"
            class="form-control border-secondary" placeholder="Nome Completo" required>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="function">Função</label>
        <input type="text" name="function" id="function" value="{{ isset($moderators->function) ? $moderators->function : '' }}"
            class="form-control border-secondary" placeholder="Função" required>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="company">Empresa/Governo/Instituição</label>
        <input type="text" name="company" id="company" value="{{ isset($moderators->company) ? $moderators->company : '' }}"
            class="form-control border-secondary" placeholder="Empresa/Governo/Instituição" required>
    </div>
</div> <!-- /.col -->


<div class="col-12">
    <div class="form-group">
        <label for="photo">Foto a carregar</label>
        <div class="custom-file">
            <input value="{{ isset($moderators->photo) ? $moderators->photo : '' }}" class="form-control border-secondary"
                type="file" name="photo" id="photo">

        </div>
    </div>
</div> <!-- /.col -->


<div class="col-12 mt-4 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Descrição do Orador</h5>
            <!-- Create the editor container -->
            <textarea name="description" id="editor1" style="min-height:300px; min-width:100%" >
                {{ isset($moderators->description) ? $moderators->description : old('description')}}
            </textarea>
        </div>
    </div>
</div>
