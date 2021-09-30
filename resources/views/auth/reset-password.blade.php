<x-guest-layout>
@if ($errors->any())
	<ul class="alert alert-warning">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
	<div class="authincation section-padding">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-5 col-md-6">
                        <div class="mini-logo text-center my-5">
                            <img src="{{ asset('theme/images/m_logo.png') }}" alt="">
                        </div>
                        <div class="auth-form card">
                            <div class="card-header justify-content-center">
                                <h4 class="card-title">Recupera tu contraseña</h4>
                            </div>
                            <div class="card-body">
                                <form name="myform" class="signup_validate" method="POST" action="{{ route('password.update') }}">
            						@csrf
            						<input type="hidden" name="token" value="{{ $request->route('token') }}">
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" class="form-control" 
                                            name="email" value="{{$request->email}}">
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="password" class="form-control" 
                                            name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label>Confirma tu password</label>
                                        <input type="password" class="form-control" name="password_confirmation">
                                    </div>
                                    
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-success btn-block">Actualizar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>