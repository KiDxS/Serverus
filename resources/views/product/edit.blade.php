<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>F.I - Auto Supply</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Belleza&amp;display=swap" />
    <link rel="stylesheet" href="{{ asset('css/beautiful-danger-alert.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Login-Form-Basic-icons.css') }}" />
</head>

<body class="text-bg-dark">
<nav class="navbar navbar-light navbar-expand-md bg-info">
        <div class="container-fluid">
            <a class="navbar-brand fs-4 fw-semibold link-dark" href="{{ route('dashboard') }}" style="padding-left: 30px"><strong>Serverus</strong></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav"></ul>
            </div>
            <a class="btn btn-secondary fs-6 fw-bold link-dark" role="button" style="margin-right: 0px; padding-right: 11px" href="{{ route('logout') }}">Log Out</a>
        </div>
    </nav>
    <div class="container text-center" style="
                padding: 5px;
                color: #6cc3d5;
                font-family: Montserrat, sans-serif;
                font-style: italic;
                font-weight: bold;
                margin-top: 20px;
            ">
        @if ($errors->any())
            <div class="alert alert-danger beautiful text-dark" role="alert">
                @foreach ($errors->all() as $error)
                    <span>
                        <strong>Warning!</strong>
                        {{ $error  }}
                    </span>

                    <br>
                @endforeach
            </div>
        @endif
        <div class="row">

            <form action="{{ route('edit.product', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col" style="padding: 200px">
                    <label class="form-label" style="padding: 20px">Product Name:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <input class="bg-secondary border rounded shadow form-control-sm" type="text" name="product_name" value="{{ $product->product_name }}" />
                    </label>
                    <label class="form-label" style="padding: 20px">Product Quantity:&nbsp; &nbsp;
                        <input class="bg-secondary border rounded shadow form-control-sm" type="text" name="quantity" inputmode="numeric" value="{{ $product->quantity }}" />
                    </label>
                    <label class="form-label" style="padding: 20px">Cost Price:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp;&nbsp;
                        <input class="bg-secondary border rounded shadow form-control-sm" type="text" name="cost_price" inputmode="numeric" value="{{ $product->cost_price }}" />
                    </label>
                    <label class="form-label" style="padding: 20px">Sale Price:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp;
                        <input class="bg-secondary border rounded shadow form-control-sm" type="text" name="sale_price" inputmode="numeric" value="{{ $product->sale_price }}" />
                    </label>
                </div>
                <button class="btn btn-info link-dark" type="submit" style="
                margin-left: 43%;
                margin-top: -26%;
                margin-right: 9px;
                padding-right: 30px;
                padding-left: 30px;
            ">
                    Save</button>
                <a class="btn btn-secondary link-dark" role="button" style="
                margin-right: 0px;
                margin-top: -26%;
                padding-right: 30px;
                padding-left: 30px;
            " href="{{ route('dashboard')}}">Back</a>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>