

<div class="css-a2j764">
    <div class="css-91cl9w d-flex align-items-center">
        <p class="mb-0 d-none d-lg-block">
        </p>
        <button class=" css-1p7cuko d-flex ms-0 ms-sm-auto" type="button">
            <svg aria-hidden="true"
                 focusable="false"
                 data-prefix="fas"
                 data-icon="map-marker-alt"
                 class="svg-inline--fa fa-map-marker-alt fa-w-12 css-psw876 me-1"
                 role="img"
                 xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 384 512"
                 width="8"
                 height="12">
                 <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
            </svg>
            <font class="d-none d-sm-block" style="vertical-align: inherit;">
                {{__('See on the map')}}
            </font>
            <font class="d-sm-none" style="vertical-align: inherit;">
                {{__('The map')}}
            </font>
        </button>
        @auth
	@if (!Auth::user()->saved_search)
        <button  class="css-1319u8e" type="submit">
            <svg aria-hidden="true"
                focusable="false"
                data-prefix="fas"
                data-icon="bell"
                class="svg-inline--fa fa-bell fa-w-14 css-4bd2r9 me-2"
                role="img" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
                width="12"
                height="14">
                <path fill="currentColor" d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path>
            </svg>
            <font class="d-none d-sm-block" style="vertical-align: inherit;">
                {{__('Save Search')}}
            </font>
            <font class="d-sm-none" style="vertical-align: inherit;">
                {{__('Save')}}
            </font>
        </button>
	@endif
        @endauth
    </div>
</div>
