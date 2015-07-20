@extends('base')

@section('meta')
<title>Login | Dan Powell</title>
<meta name="robots" content="noindex">
@stop

@section('class')Auth _login @stop

@section('main')

    <section class="Section -hero -primary -lg">
	    <div class="_container -center">
            @if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form class="form" role="form" method="POST" action="{{ url() }}/auth/login">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label class="control-label">Username</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
				</div>

				<div class="form-group">
					<label class="control-label">Password</label>
                    <input type="password" class="form-control" name="password">
				</div>

				<div class="form-group">
				    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
					</div>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">
						Login
					</button>
				</div>
			</form>
	    </div>
    </section>

@stop

@section('sidebar')

@stop
