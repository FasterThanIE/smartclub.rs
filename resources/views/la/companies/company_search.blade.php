{{ Form::open(['action' => 'LA\CompaniesController@search', 'method' => 'GET']) }}
    {{ Form::text('pib', '',['placeholder' => 'PIB']) }}
    {{ Form::text('mb', '',['placeholder' => 'MB']) }}
    {{ Form::text('name', '',['placeholder' => 'Ime kompanije']) }}
    {{ Form::text('address', '',['placeholder' => 'Adresa kompanije']) }}
    {{ Form::select('county', $counties)}}
    {{ Form::select('score', $score)}}
    {{ Form::text('phone', '',['placeholder' => 'Telefon']) }}
    {{ Form::text('website', '',['placeholder' => 'Website']) }}
    <p>Activna sredstva</p>
    {{ Form::number('active_funds_from', '',['placeholder' => 'Od']) }}
    {{ Form::number('active_funds_to', '',['placeholder' => 'Do']) }}

    <p>Prihodi</p>
    {{ Form::number('income_from', '',['placeholder' => 'Od']) }}
    {{ Form::number('income_to', '',['placeholder' => 'Do']) }}

    <p>Neto</p>
    {{ Form::number('neto_from', '',['placeholder' => 'Od']) }}
    {{ Form::number('neto_to', '',['placeholder' => 'Do']) }}

    <p>Zaposleni</p>
    {{ Form::number('employees_from', '',['placeholder' => 'Od']) }}
    {{ Form::number('employees_to', '',['placeholder' => 'Do']) }}

    {{ Form::submit('Pretrazi') }}

{{ Form::close() }}