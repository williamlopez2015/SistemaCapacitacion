@extends('layouts.applogin')

@section('contenido')
<div class="account-container">
    
    <div class="content clearfix">
        
        <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
        
            <h1>Resetear contraseña</h1>       
            
            <div class="login-fields">
                
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                @endif

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="field">
                    <label for="email" class="col-md-4 control-label">Usuario</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="usuario@ejemplo.com">

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>

                      
                    
                
            </div> <!-- /login-fields -->
            <div class="login-actions">
                
                                    
                <button type="submit" class="button btn btn-success btn-large">Enviar link de reseteo de contraseña</button>
                
            </div> <!-- .actions -->

            
            
            
        </form>
        
    </div> <!-- /content -->
    
</div> <!-- /account-container -->
@endsection
