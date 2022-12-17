<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Login</title>
        <link href="{{asset('backend/css/styles.css')}}" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        
        <link href="{{asset('backend/css/custom.css')}}" rel="stylesheet" />

        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form 
                                        method="POST" 
                                        action="{{ route('login.store') }}" >

                                            @csrf
                                            
                                            <div class="form-floating mb-3">
                                                <input 
                                                class="form-control" id="inputEmail" 
                                                type="email" 
                                                placeholder="Enter email" 
                                                name="email" 
                                                required 
                                                autocomplete="off" 
                                                value="{{old('email')}}" />
                                                <label for="inputEmail">Enter Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input 
                                                class="form-control" id="inputPassword" 
                                                type="password" 
                                                placeholder="Enter password" 
                                                name="password" 
                                                required 
                                                autocomplete="off"
                                                minlength="8"
                                                />
                                                <label for="inputPassword">Enter Password</label>
                                            </div>

                                            <div class="mt-4 mb-4 text-end">
                                                {{-- d-flex align-items-center justify-content-between  --}}
                                                {{-- <a class="small" href="password.html">Forgot Password?</a> --}}
                                                <button 
                                                type="submit" 
                                                class="btn btn-primary">
                                                <i class="fa-solid fa-right-to-bracket"></i>&ensp;Login
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-dark mt-auto">
                    <div class="container-fluid px-4">
                        <div class="small text-center">
                            <div class="text-muted">
                                Copyright &copy; {{date('Y')}}, Saleh Ibne Omar
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('backend/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>

            toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "2500",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error('{{$error}}')
                @endforeach
            @endif

            @if (session('msg'))
                @if (session('type')==='success')
                    toastr.success('{{session('msg')}}')
                @elseif (session('type')==='error')
                    toastr.error('{{session('msg')}}')
                @elseif (session('type')==='warning')
                    toastr.warning('{{session('msg')}}')
                @elseif (session('type')==='info')
                    toastr.info('{{session('msg')}}')    
                @endif
            @endif

        </script>
    </body>
</html>
