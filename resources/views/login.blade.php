<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>F.I - Auto Supply</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Belleza&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('css/beautiful-danger-alert.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Login-Form-Basic-icons.css') }}">
</head>

<body class="text-bg-dark">
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger beautiful text-dark" role="alert">
                @foreach ($errors->all() as $error)
                    <strong>Warning!</strong>
                    {{ $error  }}
                @endforeach
                </div>
            @endif
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h1 class="text-info" style="margin-top: 20px;margin-bottom: -30px;"><strong>Serverus</strong></h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body text-bg-secondary bg-info border-5 border-secondary shadow d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-semi-white text-bg-dark bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person text-secondary text-bg-dark">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                            <form class="text-center" action="{{ route('auth') }}" method="post">
                                @csrf
                                <div class="mb-3"><input class="border rounded-pill border-1 border-white shadow form-control" type="text" name="username" placeholder="Username" style="color: black;"></div>
                                <div class="mb-3"><input class="border rounded-pill border-1 border-primary shadow form-control" type="password" name="password" placeholder="Password"></div>
                                <div class="mb-3"><button class="btn btn-secondary fs-6 fw-bold link-dark text-bg-secondary bg-dark border rounded border-1 border-info shadow d-block w-100" type="submit" rel="author" style="margin-top: 40px;">Login</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>