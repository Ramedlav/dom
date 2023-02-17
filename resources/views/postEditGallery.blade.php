                    @foreach($photos as $photo)
                        @isset($photo->img)

                       <div class="col-12 col-sm-4 p-2 text-center thumb">
				<a  data-fancybox="gallery" href="{{ asset('/storage/' . $photo->img) }}">
					<img class="img-fluid" src="{{ asset('/storage/' . $photo->img) }}">
				</a>
				   <input name="file" type="file" id="photo-file-{{ $photo->id }}" class="input input__file" onchange="updatePhoto({{ $photo->id }})">
				   <label for="photo-file-{{ $photo->id }}">
				      <span class="input__file-button-text btn btn-primary">{{ __('Update') }}</span>
				   </label>
				<a class="btn btn-danger">{{ __('Delete') }}</a>
		       </div>
                        @endisset
                    @endforeach
