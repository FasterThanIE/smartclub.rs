<a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite p-lg-0" href="#">
    <img class="w-100 h-auto" src="/images/about.jpg" alt="image" />
    <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">O NAMA</p>
</a>

<a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite p-lg-0" href="#">
    <img class="w-100 h-auto" src="/images/loan.jpg" alt="image" />
    <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">KREDITI</p>
</a>

<a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite p-lg-0" href="#">
    <img class="w-100 h-auto" src="/images/deal.jpg" alt="image" />
    <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">OSIGURANJE</p>
</a>

<a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite p-lg-0" href="#">
    <img class="w-100 h-auto" src="/images/fonds.jpg" alt="image" />
    <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">FONDOVI</p>
</a>

<a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite p-lg-0" href="#">
    <img class="w-100 h-auto" src="/images/consulting.jpg" alt="image" />
    <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">CONSULTING</p>
</a>

<a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite p-lg-0" href="#">
    <img class="w-100 h-auto" src="/images/car.jpg" alt="image" />
    <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">AUTO</p>
</a>

<a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite p-lg-0" href="#">
    <img class="w-100 h-auto" src="/images/education.jpg" alt="image" />
    <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">EDUKACIJE</p>
</a>

<a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite p-lg-0" href="#">
    <img class="w-100 h-auto" src="/images/web.jpg" alt="image" />
    <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">WEB</p>
</a>

<a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite p-lg-0" href="#">
    <img class="w-100 h-auto" src="/images/loyalti.jpg" alt="image" />
    <p class="backgroundBlue colorWhite p-2  pl-4 fontWeight600">LOYALTI</p>
</a>


@foreach($data as $pageName => $pageInfo)
    <a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite p-lg-0" href="{{ $pageInfo['url'] }}">
        <img class="w-100 h-auto" src="images/{{ $pageInfo['image'] }}" alt="image" />
        <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">{{ strtoupper($pageName) }}</p>
    </a>
@endforeach
