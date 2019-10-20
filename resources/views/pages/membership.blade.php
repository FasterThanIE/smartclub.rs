@extends('layout')

@section('content')

    {{ Form::open(['action' => 'MembersController@newMember', 'method' => 'POST', 'class' => '']) }}

        <div>
            {{  Form::text('company_name' , '' ,['class' => '' , 'placeholder' => 'Unesite ime kompanije', 'required' ]) }}
        </div>

        <div>
            {{  Form::text('address' , '' ,['class' => '' , 'placeholder' => 'Unesite adresu kompanije', 'required' ]) }}
        </div>

        <div>
            {{  Form::number('pib' , '' ,['class' => '' , 'placeholder' => 'Unesite vaš PIB', 'required' ]) }}
        </div>

        <div>
            {{  Form::number('mb' , '' ,['class' => '' , 'placeholder' => 'Unesite vaš MB', 'required' ]) }}
        </div>

        <div>
            {{  Form::number('postal_code' , '' ,['class' => '' , 'placeholder' => 'Unesite vaš poštanski broj', 'required' ]) }}
        </div>

        <div>
            {{  Form::number('telephone' , '' ,['class' => '' , 'placeholder' => 'Unesite broj talofona', 'required' ]) }}
        </div>

        <div>
            {{  Form::email('email' , '' ,['class' => '' , 'placeholder' => 'Unesite vaš email', 'required' ]) }}
        </div>

        <div>
            {{  Form::text('location' , '' ,['class' => '' , 'placeholder' => 'Unesite vašu lokaciju', 'required' ]) }}
        </div>

        <div>
            {{  Form::text('contact_name' , '' ,['class' => '' , 'placeholder' => 'Unesite ime kontakt osobe', 'required' ]) }}
        </div>

        <div>
            {{  Form::text('job_code' , '' ,['class' => '' , 'placeholder' => 'Unesite šifru delatnosti', 'required' ]) }}
        </div>

        <div>
            {{ Form::select('package',['free' => 'besplatno', 'first' => 'kjksdjkdsj', 'second' => 'cxcvvcv', 'third' => 'lskjlsdj' ]) }}
        </div>

    {{ Form::submit('Pošalji', ['class' => 'submit btn mt-3 button colorYellow backgroundWhite']) }}


    {{ Form::close() }}

@endsection