@extends("la.layouts.app")


@section("main-content")

    @section("contentheader_title")
        <a href="{{ url(config('laraadmin.adminRoute') . '/companies') }}">Informacije o kompaniji :</a>
    @endsection

    <div class="container">
        <div class="row">
            <h1>Informacije</h1>
            <p class="col-4">Naziv firme: {{ $data['name'] }}</p>
            <p class="col-4">Puno ime: {{ $data['full_name'] }}</p>
            <p class="col-4">Telefon: {{ $data['phone'] }}</p>
            <p class="col-4">MB: {{ $data['mb'] }}</p>
            <p class="col-4">PIB: {{ $data['pib'] }}</p>
            <p class="col-4">Aktiva: {{ $data['active_funds'] }}</p>
            <p class="col-4">Prihodi: {{ $data['income'] }}</p>
            <p class="col-4">Neto D/G: {{ $data['neto'] }}</p>
            <p class="col-4">Zaposleni: {{ $data['employees'] }}</p>
            <p class="col-4">Scoring: {{ $data['score'] }}</p>
            <p class="col-4">Opština: {{ $data['county'] }}</p>
            <p class="col-4">Adresa: {{ $data['address'] }}</p>
            <p class="col-4">Lokacija: {{ $data['location'] }}</p>
            <p class="col-4">Websajt: {{ $data['website'] }}</p>
            <p class="col-4">Link do scoringa: <a target="_blank" href="{{ $data['url'] }}">Scoring</a></p>
        </div>

    </div>

@endsection