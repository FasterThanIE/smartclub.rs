@foreach($data as $pageName => $pageInfo)
    <a class="mt-lg-4 ml-lg-4 mr-lg-4 col-10 col-md-6 col-lg-3 list-group-item w-100 d-flex flex-column nounderline borderNone hoverWhite p-lg-0" href="{{ $pageInfo['url'] }}">
        <img class="w-100 imageHomepage" src="images/{{ $pageInfo['image'] }}" alt="image" />
        <p class="backgroundBlue colorWhite p-2 pl-4 fontWeight600">{{ strtoupper($pageName) }}</p>
    </a>
@endforeach
