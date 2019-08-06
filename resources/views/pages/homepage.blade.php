@extends('layout')

@section('content')

    <section class="jumbotron-fluid d-flex bg-white">


        <article class="col-12 col-md-12 col-lg-9 d-flex flex-wrap justify-content-center m-auto bg-white overflow-hidden">
            <a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite zoom" href="#">
                <img class="w-100 h-auto" src="/images/umbrella.jpg" alt="image" />
                <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">O NAMA</p>
            </a>

            <a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite" href="#">
                <img class="w-100 h-auto" src="/images/loan.jpg" alt="image" />
                <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">KREDITI</p>
            </a>

            <a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite" href="#">
                <img class="w-100 h-auto" src="/images/deal.jpg" alt="image" />
                <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">OSIGURANJE</p>
            </a>

            <a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite" href="#">
                <img class="w-100 h-auto" src="/images/fonds.jpg" alt="image" />
                <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">FONDOVI</p>
            </a>

            <a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite" href="#">
                <img class="w-100 h-auto" src="/images/consulting.jpg" alt="image" />
                <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">CONSULTING</p>
            </a>

            <a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite" href="#">
                <img class="w-100 h-auto" src="/images/car.jpg" alt="image" />
                <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">AUTO</p>
            </a>

            <a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite" href="#">
                <img class="w-100 h-auto" src="/images/education.jpg" alt="image" />
                <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">EDUKACIJE</p>
            </a>

            <a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite" href="#">
                <img class="w-100 h-auto" src="/images/web.jpg" alt="image" />
                <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">WEB</p>
            </a>

            <a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite" href="#">
                <img class="w-100 h-auto" src="/images/umbrella.jpg" alt="image" />
                <p class="backgroundBlue colorWhite p-2  pl-4 fontWeight600">LOYALTI</p>
            </a>

        </article>



    </section>

    <section class="container-fluid bg-info d-flex flex-row p-3 align-items-center justifyEvenly">
        <h5 class="colorWhite m-0">Imate pitanja? Kontaktirajte nas</h5>
        <a href="/kontakt" class="btn-primary submit m-0" role="button">Kontakt</a>
    </section>

    <section class="jumbotron-fluid grey d-flex flex-column">

        <h1 class="m-auto p-3 colorBlue pt-lg-5">Osiguranje</h1>

        <article class="col-12 col-md-12 col-lg-10  d-flex p-3 m-auto flex-wrap justify-content-center">
            <a class="col-md-6 col-lg-5 list-group-item w-100 grey d-flex flex-row nounderline borderNone hoverWhite m-lg-3 p-0" href="#">
                <i class="fas fa-road w-25 display-4 p-2 colorBlue hoverMove"></i>
                <div>
                    <h4 class="colorBlue">Putno osiguranje</h4>
                    <p class="fontGrey">Putno osiguranje je jedno od najrasprostranjenijih osiguranja koje se ugovara u Srbiji.
                        Odnos pokrića i cene je u korist klijenta pa tako za manje od 100 RSD po danu, klijent može da dobije zaštitu u slučaju nemilih događaja u inostranstvu.</p>
                    <p class="colorBlue">Detaljnije</p>
                </div>
            </a>

            <a class="col-md-6 col-lg-5 list-group-item w-100 grey d-flex flex-row nounderline borderNone hoverWhite m-lg-3 p-0" href="#">
                <i class="fas fa-car-crash w-25 display-4 p-2 colorBlue hoverMove"></i>
                <div>
                    <h4 class="colorBlue">Osiguranje od AO</h4>
                    <p class="fontGrey">Osiguranje od auto-odgovornosti je zakonski obavezno osiguranje vozila i bez njega se ne može izvršiti registracija.
                        Ovim je pokrivena odgovornost vlasnika, odnosno korisnika.</p>
                    <p class="colorBlue">Detaljnije</p>
                </div>
            </a>

            <a class="col-md-6 col-lg-5 list-group-item w-100 grey d-flex flex-row nounderline borderNone hoverWhite m-lg-3 p-0" href="#">
                <i class="fas fa-car w-25 display-4 p-2 colorBlue hoverMove"></i>
                <div>
                    <h4 class="colorBlue">Kasko osiguranje</h4>
                    <p class="fontGrey">Kasko osiguranje motornih vozila pruža osiguravajuću zaštitu od oštećenja ili potpunog uništenja sopstvenog vozila usled različitih rizika kao što su
                        delimična ili totalna šteta, saobraćajna nezgoda, prirodna nepogoda, krađa, razbojništvo i ostali rizici definisani ugovorom.</p>
                    <p class="colorBlue">Detaljnije</p>
                </div>
            </a>

            <a class="col-md-6 col-lg-5 list-group-item w-100 grey d-flex flex-row nounderline borderNone hoverWhite m-lg-3 p-0" href="#">
                <i class="fas fa-heartbeat w-25 display-4 p-2 colorBlue hoverMove"></i>
                <div>
                    <h4 class="colorBlue">Životno osiguranje</h4>
                    <p class="fontGrey">Životno osiguranje je najbitnije osiguranje za pojedinca i porodicu. Osim što pruža štednju i pravi neophodnu finansijsku rezervu,
                        ova vrsta osiguranja pomaže u nepredviđenim životnim situacijama.</p>
                    <p class="colorBlue">Detaljnije</p>
                </div>
            </a>

            <a class="col-md-6 col-lg-5 list-group-item w-100 grey d-flex flex-row nounderline borderNone hoverWhite m-lg-3 p-0" href="#">
                <i class="fas fa-home w-25 display-4 p-2 colorBlue hoverMove"></i>
                <div>
                    <h4 class="colorBlue">Osiguranje imovine</h4>
                    <p class="fontGrey">Ulaganje u imovinu zahteva velika finansijska sredstva. Potencijalni nemili događaji, koje vrlo često ne možete kontrolisati niti predvideti,
                        mogu značajno ugroziti imovinu i naneti velike materijalne štete, koje iziskuju nova novčana ulaganja.</p>
                    <p class="colorBlue">Detaljnije</p>
                </div>
            </a>
        </article>

    </section>

    <div class="jumbotron-fluid d-flex imageSection">

        <section class="col-12 col-md-12 col-lg-10  d-flex p-3 m-auto flex-wrap justify-content-center">
            <article class="col-12 col-lg-5 p-4">

                <h2>Mi smo Vaš lični zastupnik u osiguranju</h2>

                <p>Putno osiguranje je jedno od najrasprostranjenijih osiguranja koje se ugovara u Srbiji.
                    Odnos pokrića i cene je u korist klijenta pa tako za manje od 100 RSD po danu, klijent može da dobije zaštitu u slučaju nemilih događaja u inostranstvu
                    Putno osiguranje je jedno od najrasprostranjenijih osiguranja koje se ugovara u Srbiji.
                    Odnos pokrića i cene je u korist klijenta pa tako za manje od 100 RSD po danu, klijent može da dobije zaštitu u slučaju nemilih događaja u inostranstvu
                </p>
                <p>Putno osiguranje je jedno od najrasprostranjenijih osiguranja koje se ugovara u Srbiji.
                    Odnos pokrića i cene je u korist klijenta pa tako za manje od 100 RSD po danu, klijent može da dobije zaštitu u slučaju nemilih događaja u inostranstvu</p>


            </article>

            <form class="col-12 col-lg-3">
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


        </section>

    </div>

@endsection