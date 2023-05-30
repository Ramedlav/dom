<div class="css-1md6vpy mt-4">
    <div class="1hbnbbd d-flex align-items-center ">
        <a href="{{ url('/') }}" class="css-1dgzebp">
            <svg aria-hidden="true"
                focusable="false"
                data-prefix="fas"
                data-icon="arrow-left"
                class="svg-inline--fa fa-arrow-left fa-w-14 "
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512">
                <path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
            </svg>
           {{__('To Main') }}
        </a>
        <a href="{{ route('showAll') }}" class="css-1in5nid">
          {{__('All posts') }}
            <div class="css-9c7r58 d-flex align-items-center">
                <svg aria-hidden="true"
                     focusable="false"
                     data-prefix="fas"
                     data-icon="chevron-right"
                     class="svg-inline--fa fa-chevron-right fa-w-10 css-1q4vxyr e1je57sb2"
                     role="img"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 320 512"
                     height="8"
                     width="5">
                     <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                </svg>
            </div>
        </a>
        <span class="css-oj2bc7">{{ $post->title }}</span>
    </div>
</div>
