
@extends('layout')

@section('title')
    <title>{{ $data->title }}</title>
@endsection('title')

@section('content')
    <section class="d-lg-flex col-lg-8 m-auto">
        <article class="col-12 col-lg-7 pt-lg-5 p-3">
            @yield('page_data')
        </article>
        <aside class="col-12 col-lg-5 pt-lg-5">
            <div class="container">
                <h2 class="pb-lg-3">Popunite online upit</h2>
                <form>
                    @include("forms/".$form)
                </form>
            </div>

        </aside>
    </section>
@endsection