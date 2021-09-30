@extends('layouts.dashboard')
@section('contenido')
<div class="page_title">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page_title-content">
                    <p>Bienvenido(a),
                        <span> {{Auth::user()->name}}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-xl-12 col-md-12">
                <form id="FormPerfil" class="personal_validate" >
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Información de la cuenta</h4>
                                </div>
                                <div class="card-body">
                                    
                                    <div class="row">
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Email</label>
                                            <input type="email" class="form-control" value="{{$user->email}}" name="email" required>
                                        </div>
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Password</label>
                                            <input type="text" class="form-control" placeholder="*****" name="password">
                                        </div>
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Foto (max 2mb)</label>
                                            <div class="file-upload-wrapper" data-text="Change Photo">
                                                <input type="file"
                                                    class="file-upload-field" value="" name="foto">
                                            </div>
                                        </div>                                            
                                    </div>                                    
                                </div>
                                
                            </div>

                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Información personal</h4>
                                </div>
                                <div class="card-body">                                        
                                    <div class="row">
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Nombre</label>
                                            <input type="text" class="form-control" value="{{$user->name}}" 
                                                name="nombre" required>
                                        </div>
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Fecha de cumpleaños</label>
                                            <input type="date" class="form-control" name="cumple" value="{{Carbon\Carbon::parse($user->cumple)->format('Y-m-d')}}">
                                        </div>
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Inversión</label>
                                            <input type="text" class="form-control" name="inversion" value="{{$user->inversion}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-12 text-center">
                            <button type="submit" class="btn btn-success ps-5 pe-5">Guardar</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $('#FormPerfil').submit(function(e){
        e.preventDefault();
        
        let token = '{{ csrf_token() }}';
        let data = new FormData(document.getElementById("FormPerfil"));
        let url = '{{ url('setPerfil') }}';
        
        $.ajax({
            headers: { 'X-CSRF-TOKEN': token },
            url: url,
            type: 'POST',
            contentType: false,
            data: data,
            processData: false,
            success: res => {
               $('.avatarfoto').attr('src', res.foto);
               $('.avatar').css('background-image', 'url('+res.foto+')');
            },
            error: error => {
                console.log(error);
            }
        });
    });
</script>
@endsection