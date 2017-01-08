@extends('layout')

@section('title', 'Login')

@section('content')
	<form action="" class="form-signin col-xs-4">
		<h2 class="form-signin-heading">Uloguj se</h2>
			<label for="username" class="sr-only">Korisničko ime</label>
    		<input type="text" class="form-control" id="username" placeholder="Korisničko ime">
			<label for="password" class="sr-only">Lozinka</label>
    		<input type="password" class="form-control" id="password" placeholder="Lozinka">
		<button type="submit" class="btn btn-lg btn-primary btn-block">Uloguj se</button>
	</form>
@endsection