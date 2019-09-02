{{ Form::open(['action' => 'ContactController@mailToAdmin', 'method' => 'POST', 'class' => 'contact_form']) }}

    <div class="form-group">
        {{ Form::text('name','',['class' => 'form-control', 'placeholder' => "Unesite vaše ime i prezime"]) }}
    </div>

    <div class="form-group">
        {{ Form::number('date_of_birth','',['class' => 'form-control', 'placeholder' => "Godina rodjenja"]) }}
    </div>

    <div class="form-group">
        <p>Zdravsteno stanje:</p>
        {{ Form::radio('health', 'Zdrav' , true) }}
        {{ Form::radio('health', 'Imam zdravstvenih problema' , false) }}
    </div>


{{ Form::close() }}
<label class="control-label">Zdravsteno stanje:</label>
<div class="checkbox">
    <label><input type="checkbox"> Potpuno zdrav</label>
</div>
<div class="checkbox">
    <label><input type="checkbox"> Imam zdravstvenih problema</label>
</div>
<div class="form-group">
    <input type="text" class="form-control"  placeholder="Zanimanje" name="job">
</div>
<div class="form-group">
    <input type="text" class="form-control"  placeholder="Mesto stanovanja" name="city">
</div>
<label class="control-label">Pol:</label>
<div class="checkbox">
    <label><input type="checkbox"> Ženski</label>
</div>
<div class="checkbox">
    <label><input type="checkbox"> Muški</label>
</div>
<div class="form-group">
    <input type="text" class="form-control"  placeholder="Trajanje osiguranja u godinama" name="time">
</div>
<div class="form-group">
    <input type="email" class="form-control"  placeholder="Email" name="email">
</div>
<div class="form-group">
    <input type="number" class="form-control"  placeholder="Kontakt" name="phone">
</div>

<button type="submit" class="btn btn-default submit backgroundBlue colorWhite text-center">Pošalji</button>