                    @foreach($photos as $photo)
                        @isset($photo->img)
			<div class="col-12 col-sm-4 p-2 text-center thumb form-group">
				<a  data-fancybox="gallery" href="{{ asset('/storage/' . $photo->img) }}">
					<img class="img-fluid" src="{{ asset('/storage/' . $photo->img) }}">
					<div class="css-1quvv2t-mp">
						<a class="css-qczclw edit-link-icon me-2 mt-0"
							href="#"
							onclick="clickUpdatePhoto(event, {{ $photo->id }});"
							title="{{ __('Update photo') }}">
							<img src="/img/icons/edit-square-outline.svg">
						</a>
						<a class="css-qczclw delete-link-icon me-2"
							href="#"
							onclick="clickDeletePhoto(event, {{ $photo->id }}, {{ $post->id }});"
							title="{{ __('Delete photo') }}">
							<img src="/img/icons/delete-outline.svg">
						</a>
					</div>
				</a>
				<input name="file-{{ $photo->id }}[]" type="file" id="photo-file-{{ $photo->id }}" class="input input__file" onchange="updatePhoto({{ $photo->id }})">
			</div>
                        @endisset
                    @endforeach
			<div class="text-center" style="margin: 15px 0;">
			   <input name="file" type="file" id="photos-file" class=" input input__file" multiple onchange="addPhotos({{ $post->id }})">
			   <label for="photos-file">
			      <span class="input__file-button-text btn btn-success progress-button">{{ __('Add photos') }}</span>
			   </label>
			</div>
<script>
function clickUpdatePhoto(events, photo_id) {
	events.preventDefault();
	$('#photo-file-'+photo_id).click();
}
function clickDeletePhoto(events, photo_id, post_id) {
	events.preventDefault();
	Data = new FormData();
	Data.append('post_id', post_id);
	Data.append('photo_id', photo_id);
        var path = $('#program_folder').val();
        $.ajax({
            type: 'POST',
            url: path + 'edit/deletephoto',
            data: Data,
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	    processData: false,
	    contentType: false,
            success: function(data){
                $('#photo_gallery').html(data);
            },
            error: function(data){
		console.log(data);
            }
        });
}
</script>