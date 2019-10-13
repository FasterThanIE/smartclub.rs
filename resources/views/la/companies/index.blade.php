@extends("la.layouts.app")


@section("main-content")

    @include("la/companies/company_search")

    @section("contentheader_title")
        <a href="{{ url(config('laraadmin.adminRoute') . '/companies') }}">Kompanije :</a>
    @endsection

    <table class="table">
        <tr>
            <th class="col">Naziv firme</th>
            <th class="col">MB</th>
            <th class="col">PIB</th>
            <th class="col">Aktiva</th>
            <th class="col">Prihodi</th>
            <th class="col">Neto D/G</th>
            <th class="col">Zaposleni</th>
            <th class="col">Scoring</th>
            <th class="col">Ukloni kompaniju</th>
        </tr>
        @foreach($data as $info)
            <tr>
                <td scope="row"><a href="/admin/company/{{ $info['pib'] }}">{{ substr($info['name'] ,0,20) }}</a></td>
                <td>{{ $info['mb'] }}</td>
                <td>{{ $info['pib'] }}</td>
                <td>{{ $info['active_funds'] }}</td>
                <td>{{ $info['income'] }}</td>
                <td>{{ $info['neto'] }}</td>
                <td>{{ $info['employees'] }}</td>
                <td>{{ $info['score'] }}</td>
                <td  data-company="{{ $info['pib'] }}">
                    <button class="remove">Ukloni kompaniju</button>
                </td>
            </tr>
        @endforeach
    </table>





@endsection