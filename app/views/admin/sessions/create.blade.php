@extends('admin.layouts.master')

@section('content')

	<div class="row">
		<div class="small-6 small-centered columns">
			
			{{ Form::open(['route' => 'admin.sessions.store']) }}

				<div class="row">
					<div class="small-3 columns">
						<label for="f-email" class="inline {{ $errors->has('email') ? 'error' : '' }}">Email</label>
					</div>
					<div class="small-9 columns">
						<input type="text" name="email" id="f-email" class="{{ $errors->has('email') ? 'error' : '' }}" value="{{ Input::old('email') }}">
						@if ($errors->has('email'))
						<small class="error">
							{{ $errors->first('email') }}
						</small>
						@endif
					</div>
				</div>

				<div class="row">
					<div class="small-3 columns">
						<label for="f-password" class="inline {{ $errors->has('password') ? 'error' : '' }}">Password</label>
					</div>
					<div class="small-9 columns">
						<input type="password" name="password" id="f-password" class="{{ $errors->has('password') ? 'error' : '' }}">
						@if ($errors->has('password'))
						<small class="error">
							{{ $errors->first('password') }}
						</small>
						@endif
					</div>
				</div>

				<div class="row">
					<div class="small-9 small-offset-3 columns">
						<input type="submit" class="tiny button" value="Login">
					</div>
				</div>

			{{ Form::close() }}

		</div>
	</div>

@stop