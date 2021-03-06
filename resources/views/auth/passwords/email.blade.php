<!doctype html>
<html class="h-100">

  @include('layouts-cliente.header')

    <body class="d-flex flex-column h-100">
    
        @include('layouts-cliente.topbar')
        <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mt-5">
                    <div class="card">
                        <div class="card-header">Resetar senha</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-mail cadastrado</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">Enviar e-mail de redefinição</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>

        <footer class="footer mt-auto py-3" >
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Moura Espetos 2020</span>
                </div>
            </div>
        </footer>

        @include('layouts.functions')
    </body>
</html>