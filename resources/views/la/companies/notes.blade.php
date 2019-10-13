<div>
    <p>Beleske</p>
    {{ Form::open(['action' => 'LA\CompaniesController@addNewNote' , 'method' => 'POST']) }}
        {{ Form::text('note', '',['placeholder' => 'Unesite belesku']) }}
        {{ Form::hidden('pib', $pib) }}


        {{ Form::submit('Snimi') }}
    {{ Form::close() }}


</div>