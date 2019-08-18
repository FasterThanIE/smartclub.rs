{{ Form::open(['action' => 'ContactController@mailToAdmin', 'method' => 'POST', 'class' => 'contact_form']) }}

    <div class="form-group">
        {{ Form::text('name','',['class' => 'form-control', 'placeholder' => "Unesite vaše ime"]) }}
    </div>

    <div class="form-group">
        {{ Form::number('date_of_birth','',['class' => 'form-control', 'placeholder' => "Godina rodjenja"]) }}
    </div>

    <div class="form-group">
        {{ Form::text('occupation','',['class' => 'form-control', 'placeholder' => "Zanimanje"]) }}
    </div>

    <div class="form-group">
        {{ Form::text('location','',['class' => 'form-control', 'placeholder' => "Mesto stanovanja"]) }}
    </div>

    <div class="form-group">
        {{ Form::number('credit_amount','',['class' => 'form-control', 'placeholder' => "Iznos kredita u evrima"]) }}
    </div>

    <div class="form-group">
        {{ Form::email('email','',['class' => 'form-control', 'placeholder' => "Kontakt email"]) }}
    </div>

    <div class="form-group">
        {{ Form::number('phone_number','',['class' => 'form-control', 'placeholder' => "Kontakt telefon"]) }}
    </div>

    {{ Form::submit('Pošalji', ['class' => 'btn btn-default submit backgroundBlue colorWhite text-center']) }}

    {{ Form::hidden('page_name', $page) }}


{{ Form::close() }}
<script src="/javascript/jquery.validate.js"></script>
<script>
    if ($(".contact_form").length > 0) {
        $(".contact_form").validate({
            rules: {
                name: {
                    required: true
                },
                credit_amount: {
                    required: true
                },
                email: {
                    required: true
                },
                phone_number: {
                    required: true
                },
            },
            messages: {

                name: {
                    required: "Morate uneti vaše ime"
                },

                credit_amount: {
                    required: "Morate uneti iznos kredita"
                },

                phone_number: {
                    required: "Morate uneti broj telefona"
                },

                email: {
                    required: "Morate uneti kontakt email"
                },
            },
        })
    }
</script>