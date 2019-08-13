
@extends('layout')

@section('content')
    <section class="d-lg-flex col-lg-8 m-auto mb-lg-5 pt-4">
        <article class="col-12 col-lg-7  d-flex img-fluid  position-relative">

            <img class="w-100" src="/images/contact.jpg" alt="image"/>
            <div class="position-absolute w-100 h-100 blueFilter"></div>

            <a href="tel:063452067" class="position-absolute colorWhite size15em nounderline absolutePosition"><i class="fas fa-phone"></i> 063/452067</a>
            <a href="tel:063452067" class="position-absolute colorWhite size15em nounderline absolutePosition absolutePositionSecond"><i class="fas fa-envelope"></i> mail.com</a>

        </article>

        <article class="col-12 col-lg-5">

            <div class="container pt-3">

                <h2 class="pb-lg-3">Kontakt forma</h2>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Ime i prezime" name="name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control"  placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control"  placeholder="Kontakt" name="phone">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control resizeNone" placeholder="Vaša poruka" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-default submit backgroundBlue colorWhite text-center">Pošalji</button>
                </form>
            </div>

        </article>

    </section>
@endsection