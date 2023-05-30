@php
	$fc = json_decode($finish_conditions,true);
	$finish=[]; $finish[0] = '';
	foreach($fc as $c) $finish[$c['id']] = $c['title'];
	$finish_title = $finish[$post->finish_condition];
	$fc = json_decode($constructions,true);
	$construction=[]; $construction[0] = '';
	foreach($fc as $c) $construction[$c['id']] = $c['title'];
	$construction_title=$construction[$post->type_construction];
	$fc = json_decode($floors,true);
	$floor=[]; $floor[0] = '';
	foreach($fc as $c) $floor[$c['id']] = $c['title'];
	$bgt=[];
	if ($post->balkony) $bgt[]=__("balkony");
	if ($post->garden) $bgt[]=__("garden");
	if ($post->terrace) $bgt[]=__("terrace");
	$bgt=implode(',',$bgt);
@endphp

<div class="d-md-flex flex-wraper">
    <div class=" col-md-6 pe-md-3">
        <div aria-label="Square"
             class="css-1ccovha d-flex justify-content-between">
             <div class="d-flex">
                <div class="mr-3">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PHBhdGggZD0iTTYuNDMzIDBhMS4zMiAxLjMyIDAgMCAxIC4wNjYgMi42MzhsLS4wNjYuMDAxSDQuNTA1bDguODU1IDguODU1VjkuNTY3YTEuMzIgMS4zMiAwIDAgMSAyLjYzOC0uMDY2bC4wMDIuMDY2djMuMTM0YTMuMyAzLjMgMCAwIDEtMy4yMDcgMy4yOThsLS4wOTIuMDAxSDkuNTY3YTEuMzIgMS4zMiAwIDAgMS0uMDY2LTIuNjM4bC4wNjYtLjAwMSAxLjkyNy0uMDAxLTguODU1LTguODU1djEuOTI4YTEuMzIgMS4zMiAwIDAgMS0yLjYzNy4wNjZMMCA2LjQzM1YzLjI5OUEzLjMgMy4zIDAgMCAxIDMuMjA3LjAwMUwzLjI5OSAwaDMuMTM0eiIgZmlsbD0iIzgwODE4NCIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+"
                    alt=""
                    class="css-gjii1j">
                </div>
                <div class="css-1qzszy5">
                    <div data-cy="table-label-content" class="css-1h52dri estckra7">
                      {{__('Square') }}
                    </div>
                </div>
             </div>

            <div class="css-1qzszy5 estckra8">
                <div class="css-1wi2w6s estckra5">
                    {{ $post->square }}{{ 'м²' }}
                </div>
            </div>
        </div>
        <div aria-label="Number of rooms"
                class="css-1ccovha d-flex justify-content-between">
                <div class="d-flex">
                    <div class="mr-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PHBhdGggZD0iTTE2IDYuMzMzdjYuMzM0QTMuMzMzIDMuMzMzIDAgMCAxIDEyLjY2NyAxNkgzLjMzM0EzLjMzMyAzLjMzMyAwIDAgMSAwIDEyLjY2N1YzLjMzM0EzLjMzMyAzLjMzMyAwIDAgMSAzLjMzMyAwaDZ2Ni4zMzNIMTZ6TTEzLjMzMyA5aC00djQuMzM0aDMuMzM0Yy4zNjggMCAuNjY2LS4zLjY2Ni0uNjY3Vjl6TTIuNjY3IDEyLjY2N2MwIC4zNjguMjk4LjY2Ni42NjYuNjY2bDMuMzM0LjAwMS0uMDAxLTMuNjY4aC00djN6bTQtMTBIMy4zMzNhLjY2Ni42NjYgMCAwIDAtLjY2Ni42NjZsLS4wMDEgM2g0VjIuNjY3eiIgZmlsbD0iIzgwODE4NCIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+"
                            alt=""
                            class="css-gjii1j estckra6">
                    </div>
                    <div class="css-1qzszy5">
                        <div data-cy="table-label-content" class="css-1h52dri estckra7">
                        {{__('Number of rooms') }}
                        </div>
                    </div>
                </div>

            <div class="css-1qzszy5 estckra8">
                <div class="css-1wi2w6s estckra5">
                    {{ $post->rooms }}
                </div>
            </div>
        </div>
        <div aria-label="Floor"
                class="css-1ccovha d-flex justify-content-between">
                <div class="d-flex">
                    <div class="mr-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbHRlcj0idXJsKCNhKSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJtMTAuMjE4IDEwLjcyMy0xLjcwNSAxLjcwOS0xLjgzNi0xLjczNWExLjI0NCAxLjI0NCAwIDAgMC0xLjcwOCAxLjgwOWwxLjgzNiAxLjczNGEyLjQ4NyAyLjQ4NyAwIDAgMCAzLjQ2OC0uMDVsMS43MDYtMS43MWExLjI0NCAxLjI0NCAwIDAgMC0xLjc2LTEuNzU2ek04LjUxMiAzLjUxN2wxLjY4MSAxLjc4OGExLjI0NCAxLjI0NCAwIDAgMCAxLjgxMS0xLjcwNGwtMS42OC0xLjc4N2EyLjQ4NyAyLjQ4NyAwIDAgMC0zLjUxNi0uMTA2bC0uMDU2LjA1My0xLjgxIDEuODEzYTEuMjQzIDEuMjQzIDAgMSAwIDEuNzYgMS43NTZsMS44MS0xLjgxMnpNMi4zMiA5LjE5MmgxLjI0NGExLjI0NCAxLjI0NCAwIDEgMCAwLTIuNDg3SDIuMzJhMS4yNDQgMS4yNDQgMCAwIDAgMCAyLjQ4N3oiIGZpbGw9IiM4MDgxODQiLz48cGF0aCBkPSJNNy45MTcgOS4xOTJIOS4xNmExLjI0NCAxLjI0NCAwIDEgMCAwLTIuNDg3SDcuOTE3YTEuMjQ0IDEuMjQ0IDAgMCAwIDAgMi40ODd6bTUuNTk2IDBoMS4yNDNhMS4yNDQgMS4yNDQgMCAxIDAgMC0yLjQ4N2gtMS4yNDNhMS4yNDQgMS4yNDQgMCAwIDAgMCAyLjQ4N3oiIGZpbGw9IiM0MDQwNDEiLz48cGF0aCBkPSJNNy45MTcgOS4xOTJIOS4xNmExLjI0NCAxLjI0NCAwIDEgMCAwLTIuNDg3SDcuOTE3YTEuMjQ0IDEuMjQ0IDAgMCAwIDAgMi40ODd6bTUuNTk2IDBoMS4yNDNhMS4yNDQgMS4yNDQgMCAxIDAgMC0yLjQ4N2gtMS4yNDNhMS4yNDQgMS4yNDQgMCAwIDAgMCAyLjQ4N3oiIGZpbGw9IiM4MDgxODQiLz48L2c+PC9zdmc+"
                            alt=""
                            class="css-gjii1j estckra6">
                    </div>
                    <div class="css-1qzszy5">
                        <div data-cy="table-label-content" class="css-1h52dri estckra7">
                        {{__('Floor') }}
                        </div>
                    </div>
                </div>

            <div class="css-1qzszy5 estckra8">
                <div class="css-1wi2w6s estckra5">
                    {{-- {{ $floor[$post->floor] }} --}}
                    {{ $post->floor }}
                </div>
            </div>
        </div>
        <div aria-label="Available from"
                class="css-1ccovha d-flex justify-content-between">
                <div class="d-flex">
                    <div class="mr-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbHRlcj0idXJsKCNhKSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjNDA0MDQxIiBkPSJNMTUuNDkgNS4xMzJIMXY5LjM1OUExLjUxIDEuNTEgMCAwIDAgMi41MSAxNmgxMS40N2ExLjUxIDEuNTEgMCAwIDAgMS41MS0xLjUxVjUuMTMzek03Ljk0NCA3LjU0N3Y0LjUyOEgzLjQxNVY3LjU0N3Y2LjAzOGg5LjY2VjcuNTQ3SDcuOTQzem0xLjUxLTUuMjgzSDcuMzRWMS4yMDhhMS4yMDggMS4yMDggMCAxIDAtMi40MTUgMHYxLjA1NkgyLjM1OGExLjIwOCAxLjIwOCAwIDAgMCAwIDIuNDE1aDEyLjA3NmExLjIwNyAxLjIwNyAwIDEgMCAwLTIuNDE1aC0yLjU2NlYxLjIwOGExLjIwOCAxLjIwOCAwIDEgMC0yLjQxNSAwdjEuMDU2eiIvPjwvZz48L3N2Zz4="
                            alt=""
                            class="css-16tfihv estckra6">
                    </div>
                    <div class="css-1qzszy5">
                        <div data-cy="table-label-content" class="css-1h52dri estckra7">
                        {{__('Available from') }}
                        </div>
                    </div>
                </div>

            <div class="css-1qzszy5 estckra8">
                <div class="css-1wi2w6s estckra5">
                    <button data-cy="missing-info-button" class="css-lux9hg ekf916v1">{{ $post->available_date }}</button>
                </div>
            </div>
        </div>
        <div aria-label="remote support"
                class="css-1ccovha d-flex justify-content-between">
                <div class="d-flex">
                    <div class="mr-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbGw9IiM0MDQwNDEiIGZpbHRlcj0idXJsKCNhKSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMTUuODM1IDcuOTE4QTcuOTE4IDcuOTE4IDAgMSAwIDAgNy45MThhMS4zMiAxLjMyIDAgMCAwIDIuNjQgMCA1LjI3OCA1LjI3OCAwIDEgMSAxMC41NTYgMCAxLjMyIDEuMzIgMCAwIDAgMi42NCAweiIvPjxwYXRoIGQ9Ik0xMS44NzcgNy41ODhhMy45NiAzLjk2IDAgMCAwLTcuOTE4IDAgMS4zMiAxLjMyIDAgMCAwIDIuNjQgMCAxLjMyIDEuMzIgMCAxIDEgMi42MzkgMCAxLjMyIDEuMzIgMCAxIDAgMi42MzkgMHoiLz48cGF0aCBkPSJNNi43NjMgOS43MzJ2NC45NDhhMS4zMiAxLjMyIDAgMCAwIDIuNjQgMFY5LjczMmExLjMyIDEuMzIgMCAwIDAtMi42NCAweiIvPjwvZz48L3N2Zz4="
                            alt=""
                            class="css-16tfihv estckra6">
                    </div>
                    <div class="css-1qzszy5">
                        <div data-cy="table-label-content" class="css-1h52dri estckra7">
                        {{__('Remote support') }}
                        </div>
                    </div>
                </div>

            <div class="css-1qzszy5 estckra8">
                <div class="css-1wi2w6s estckra5">
                    <button data-cy="missing-info-button" class="css-lux9hg ekf916v1">
                        {{__('ask')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 ps-md-3">
        <div aria-label="Rent"
             class="css-1ccovha d-flex justify-content-between {{ ($post->sale_id == 1)?'d-none':'' }}">
             <div class="d-flex">
                <div class="mr-3">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbHRlcj0idXJsKCNhKSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNOCAxMC4zMzNjMi45ODggMCA1LjU1OC0xLjAxNyA2Ljg0NC0yLjI0OEMxNS42MjQgNy4zMzkgMTYgNi40ODcgMTYgNS42NjdjMC0uODItLjM3Ni0xLjY3Mi0xLjE1Ni0yLjQxOUMxMy41NTggMi4wMTggMTAuOTg4IDEgOCAxIDUuMDEyIDEgMi40NDIgMi4wMTcgMS4xNTYgMy4yNDguMzc2IDMuOTk1IDAgNC44NDcgMCA1LjY2N2MwIC44Mi4zNzYgMS42NzIgMS4xNTYgMi40MThDMi40NDIgOS4zMTYgNS4wMTIgMTAuMzMzIDggMTAuMzMzem0wLTIuNjY2Yy0xLjg5NCAwLTMuNTgxLS40ODMtNC42MjEtMS4yMDNhMi42MDYgMi42MDYgMCAwIDEtLjUzNS0uNDcxYy0uMDkxLS4xMS0uMTc3LS4yMS0uMTc3LS4zMjYgMC0uMTE3LjA4Ni0uMjE3LjE3Ny0uMzI3LjEzOC0uMTY2LjMyLS4zMjIuNTM1LS40N0M0LjQxOSA0LjE1IDYuMTA2IDMuNjY3IDggMy42NjdjMS44OTQgMCAzLjU4MS40ODIgNC42MjEgMS4yMDMuMjE1LjE0OC4zOTcuMzA0LjUzNS40Ny4wOTEuMTEuMTc3LjIxLjE3Ny4zMjcgMCAuMTE2LS4wODYuMjE2LS4xNzcuMzI2LS4xMzguMTY3LS4zMi4zMjMtLjUzNS40Ny0xLjA0LjcyMS0yLjcyNyAxLjIwNC00LjYyMSAxLjIwNHpNLjA2IDEwLjYwMWMuMDI2LjcyOS4zODQgMS41NSAxLjEyNCAyLjI5MiAxLjI1NSAxLjI1NyAzLjc0NiAyLjM5IDYuNzcxIDIuMjg1IDIuNTY0LS4wOSA0LjUwNi0uNzA0IDUuNjktMS42MzEgMS4wMDctLjc4OSAxLjU1LTEuODAzIDEuNjEyLTIuOTg4bC0yLjY2Mi0uMTRjLS4wMy41NTctLjQxLjk2NS0uOTg1IDEuMjg1LS44ODcuNDkzLTIuMTY1Ljc1NC0zLjc0OC44MDktMS44NTIuMDY1LTMuNDQtLjQ2LTQuNDItMS4xODdhMi41NzYgMi41NzYgMCAwIDEtLjYwMy0uNTkzYy0uMDU1LS4wNzktLjExLS4xNDgtLjExMy0uMjI0bC0yLjY2NS4wOTN6IiBmaWxsPSIjNDA0MDQxIi8+PC9nPjwvc3ZnPg=="
                         alt=""
                         class="css-gjii1j estckra6">
                </div>
                <div class="css-1qzszy5">
                    <div data-cy="table-label-content" class="css-1h52dri estckra7">
                       {{__('Rent') }}
                    </div>
                </div>
             </div>

            <div class="css-1qzszy5 estckra8">
                <div class="css-1wi2w6s estckra5">
                    {{ $post->rent_price }} &nbsp;{{__('€ / month')}}
                </div>
            </div>
        </div>
        <div aria-label="Price"
                class="css-1ccovha d-flex justify-content-between {{ ($post->sale_id == 2)?'d-none':'' }}">
                <div class="d-flex">
                    <div class="mr-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbHRlcj0idXJsKCNhKSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMTUgOC4yODZDMTUgNy41NzYgMTQuNDY3IDcgMTMuODA5IDdIMi4xOUMxLjUzMyA3IDEgNy41NzYgMSA4LjI4NnY2LjQyOEMxIDE1LjQyNCAxLjUzMyAxNiAyLjE5MSAxNkgxMy44MWMuNjU3IDAgMS4xOS0uNTc2IDEuMTktMS4yODZWOC4yODZ6TTEyLjYxNyA5LjU3djMuODZIMy4zODNWOS41N2g5LjIzNHpNMTMgNkE1IDUgMCAwIDAgMyA2aDIuMTA1YTIuODk1IDIuODk1IDAgMSAxIDUuNzkgMEgxM3oiIGZpbGw9IiM0MDQwNDEiLz48L2c+PC9zdmc+"
                             alt=""
                             class="css-gjii1j estckra6">
                    </div>
                    <div class="css-1qzszy5">
                        <div data-cy="table-label-content" class="css-1h52dri estckra7">
                           {{__('Price') }}
                        </div>
                    </div>
                </div>

            <div class="css-1qzszy5 estckra8">
                <div class="css-1wi2w6s estckra5">
			{{ $post->price }}&nbsp;€,
                </div>
            </div>
        </div>
        <div aria-label="Construction type"
                class="css-1ccovha d-flex justify-content-between">
                <div class="d-flex">
                <div class="mr-3">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbHRlcj0idXJsKCNhKSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjNDA0MDQxIiBkPSJNLjAwMyAxMC4zMTljLS4wMTMuMTk5LjAyLjQwMy4xMDIuNmwuMDI4LjA2Yy0uMDg1LjE3NC0uMTMzLjM3LS4xMzMuNTc3djQuMjg5aDE2di00LjI4OWMwLS4yMDctLjA0OC0uNDAzLS4xMzMtLjU3N2ExLjMxOSAxLjMxOSAwIDAgMC0uNjgxLTEuNzk2TDcuOTEgNi4xNjdsLTUuMjcgMi4yNFYzLjY0aDMuOTU5di4zM2ExLjMyIDEuMzIgMCAwIDAgMi42MzkgMFYxSDB2OS4yMzdjMCAuMDI3LjAwMS4wNTUuMDAzLjA4MnptMi42MDguOTY4Yy4wMTkuMDg3LjAyOC4xNzcuMDI4LjI3djEuNjQ5aDEwLjcyMnYtMS42NWMwLS4wOS4wMDktLjE3Ny4wMjYtLjI2Mkw3LjkyNCA5LjAzIDIuNjEgMTEuMjg3eiIvPjwvZz48L3N2Zz4="
                        alt=""
                        class="css-gjii1j estckra6">
                </div>
                <div class="css-1qzszy5">
                    <div data-cy="table-label-content" class="css-1h52dri estckra7">
                       {{__('Construction type') }}
                    </div>
                </div>
                </div>

            <div class="css-1qzszy5 estckra8">
                <div class="css-1wi2w6s estckra5">
                    {{ __("$construction_title") }}
                </div>
            </div>
        </div>
        <div aria-label="Balcony/garden/terrace"
                class="css-1ccovha d-flex justify-content-between">
                <div class="d-flex">
                <div class="mr-3">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbHRlcj0idXJsKCNhKSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjNDA0MDQxIiBkPSJNNy44NzMgOC4wNzggNS4wMjEgMGwtNC4zIDEyLjE4NWgzLjEyN3YyLjY0MWExLjE3NCAxLjE3NCAwIDAgMCAyLjM0NyAwdi0yLjY0MUg3YTQuMTIyIDQuMTIyIDAgMCAwIDIuNzE3IDIuNjE3di4wMjRhMS4xNzQgMS4xNzQgMCAwIDAgMi4zNDggMHYtLjAyNGE0LjExIDQuMTEgMCAxIDAtNC4xOTItNi43MjR6bTMuMDE4IDEuMDI1YTEuNzYyIDEuNzYyIDAgMSAxLTEuNzYxIDEuNzYyYzAtLjk3My43OS0xLjc2MiAxLjc2MS0xLjc2MnptLTYuODUuNzM0Ljk4LTIuNzgzLjk4MiAyLjc4M0g0LjA0eiIvPjwvZz48L3N2Zz4="
                         alt=""
                         class="css-gjii1j estckra6">
                </div>
                <div class="css-1qzszy5">
                    <div data-cy="table-label-content" class="css-1h52dri estckra7">
                        {{__('Balcony/garden/terrace') }}
                    </div>
                </div>
                </div>

            <div class="css-1qzszy5 estckra8">
                <div class="css-1wi2w6s estckra5">
                    {{ $bgt }}
                </div>
            </div>
        </div>
        <div aria-label="Finish condition"
                class="css-1ccovha d-flex justify-content-between">
                <div class="d-flex">
                <div class="mr-3">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbHRlcj0idXJsKCNhKSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjNDA0MDQxIiBkPSJNNS44NTkgNy45MjIuMzI2IDEzLjQ1NGExLjExNiAxLjExNiAwIDAgMCAxLjU3NyAxLjU3N2w1LjUzMy01LjUzMyAxLjA0NiAxLjA0N2ExLjM5MyAxLjM5MyAwIDAgMCAxLjk3IDBsMi4xMTgtMi4xMThhMS42NzIgMS42NzIgMCAwIDAgMC0yLjM2NUw3LjUxIDEgMS4wODMgMy4xNDYgNS44NiA3LjkyMnptOC4yMzguMzQtMy42MTIgMy42MTJhMS4xMTYgMS4xMTYgMCAwIDAgMS41NzYgMS41NzdsMy42MTItMy42MTJhMS4xMTQgMS4xMTQgMCAxIDAtMS41NzYtMS41Nzd6TTEwLjYgNy4yNDQgOS40NjcgOC4zNzcgNS4yMSA0LjExOWwxLjY5OC0uNTY3TDEwLjYgNy4yNDR6Ii8+PC9nPjwvc3ZnPg=="
                         alt=""
                         class="css-gjii1j estckra6">
                </div>
                <div class="css-1qzszy5">
                    <div data-cy="table-label-content" class="css-1h52dri estckra7">
                        {{__('Finish condition') }}
                    </div>
                </div>
                </div>
            <div class="css-1qzszy5 estckra8">
                <div class="css-1wi2w6s estckra5">
                    {{ __("$finish_title") }}
                </div>
            </div>
        </div>
    </div>
</div>
