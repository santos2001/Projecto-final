<div class="col-12">
    <div class="form-group">
        <label for="theme">Tema</label>
        <input type="text" name="theme" id="theme"
            value="{{ isset($schedule->theme) ? $schedule->theme : old('theme') }}" class="form-control border-secondary"
            placeholder="Tema" required>
    </div>
</div> <!-- /.col -->


<div class="col-12">
    <div class="form-group">
        <label for="program">Programa</label>
        <input type="text" name="program" id="program"
            value="{{ isset($schedule->program) ? $schedule->program : old('program') }}"
            class="form-control border-secondary" placeholder="Programa" required>
    </div>
</div> <!-- /.col -->



<div class="col-12 col-md-6 col-lg-6">
    <div class="form-group">
        <label for="speaker">Orador</label>
        <input type="text" name="speaker" id="speaker"
            value="{{ isset($schedule->speaker) ? $schedule->speaker : old('speaker') }}"
            class="form-control border-secondary" placeholder="Oradores">
    </div>
</div> <!-- /.col -->


<div class="col-12 col-md-6 col-lg-6">
    <div class="form-group">
        <label for="title">Função/Cargo</label>
        <input type="text" name="title" id="title"
            value="{{ isset($schedule->title) ? $schedule->title : old('title') }}"
            class="form-control border-secondary" placeholder="Função/Cargo">
    </div>
</div> <!-- /.col -->
