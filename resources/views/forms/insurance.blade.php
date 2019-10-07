{{ Form::open(['action' => 'ContactController@mailToAdmin', 'method' => 'POST', 'class' => 'contact_form']) }}

    <div class="form-group">
        {{ Form::text('name','',['class' => 'form-control', 'placeholder' => "Unesite vaše ime i prezime"]) }}
    </div>

    <div class="form-group">
        {{ Form::number('date_of_birth','',['class' => 'form-control', 'placeholder' => "Godina rodjenja"]) }}
    </div>

    <div class="form-group">
        <p>Zdravsteno stanje:</p>
        {{ Form::select('health',['zdrav' => "Zdrav", "nezdrav" => "Imam zdravstvenih problema"],['class' => 'form-control', 'placeholder' => "Zdravstveno stanje"]) }}
    </div>

    <div class="form-group">
        <p>Zanimanje:</p>
        {{ Form::text('job','',['class' => 'form-control', 'placeholder' => "Unesite vaše zanimanje"]) }}
    </div>

    <div class="form-group">
        <p>Adresa:</p>
        {{ Form::text('location','',['class' => 'form-control', 'placeholder' => "Mesto stanovanja"]) }}
    </div>

    <div class="form-group">
        <p>Pol:</p>
        {{ Form::select('gender',['muško' => "Muški", "ženko" => "Ženski"],['class' => 'form-control', 'placeholder' => "Pol"]) }}
    </div>

    <div class="form-group">
        <p>Trajanje osiguranja u godinama:</p>
        {{ Form::text('insurance_length','',['class' => 'form-control', 'placeholder' => "Trajanje osiguranja"]) }}
    </div>

    <div class="form-group">
        <p>Kontakt mejl:</p>
        {{ Form::text('email','',['class' => 'form-control', 'placeholder' => "Kontakt mejl adresa"]) }}
    </div>

    <div class="form-group">
        <p>Kontakt telefon:</p>
        {{ Form::number('phone_number','',['class' => 'form-control', 'placeholder' => "Kontakt telefon"]) }}
    </div>

    {{ Form::submit('Pošalji', ['class' => 'btn btn-default submit backgroundBlue colorWhite text-center']) }}
    {{ Form::hidden('page_name', $page) }}

{{ Form::close() }}