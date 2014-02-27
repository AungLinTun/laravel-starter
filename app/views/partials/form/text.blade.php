<div class="row">
	<div class="small-3 columns">
		<label for="f-{{ $name }}" class="inline {{ $errors->has($name) ? 'error' : '' }}">
			{{ $title }}
		</label>
	</div>

	<div class="small-9 columns">
		<input type="text" name="{{ $name }}" id="f-{{ $name }}" class="{{ $errors->has($name) ? 'error' : '' }}" value="{{ Input::old($name) }}">
		
		@if ($errors->has($name))
			<small class="error">
				{{ $errors->first($name) }}
			</small>
		@endif
	</div>
</div>