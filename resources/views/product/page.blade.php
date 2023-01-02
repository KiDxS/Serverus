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
    <link rel="stylesheet" href=" {{ asset('css/Login-Form-Basic-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css')}}" />
</head>

<body class="flex-fill justify-content-center" style="background-color: var(--bs-gray-dark)">
    <nav class="navbar navbar-light navbar-expand-md border rounded border-1">
        <div class="container-fluid">
            <a class="navbar-brand fs-4 fw-semibold link-light" style="padding-left: 30px; text-shadow: 7px 3px 5px #000000"><strong>Serverus</strong></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav"></ul>
            </div>
            <a class="btn fs-6 fw-bold link-light border rounded border-2" role="button" style="margin-right: 0px; padding-right: 11px" href="{{ route('logout') }}">Log Out</a>
        </div>
    </nav>
    <div class="container" style="margin-top: 15px;">
        @if(session()->has('message'))
        <div class="alert alert-dark text-start text-success border rounded-0 border-2 border-success" role="alert">
            <span>
                <strong>{{ session('message') }}</strong>
            </span>
        </div>
        @endif
        <div class="d-flex justify-content-end">
            <i class="fas fa-plus text-white" style="font-size: 33px" data-bs-target="#modal-2" data-bs-toggle="modal"></i>
        </div>
        <div class="table-responsive text-center border-0 d-md-flex justify-content-md-end align-items-md-start" style="
                    padding: 0px;
                    padding-left: 0px;
                    padding-right: 0px;
                    padding-bottom: 0px;
                    margin-top: 30px;
                    margin-bottom: 0px;
                    padding-top: 10px;
                    caption-side: top;
                ">
            <table class="table table-striped table-hover table-dark table-bordered">
                <caption class="fw-bolder text-center text-light border rounded-pill border-white shadow caption-top" style="
                            margin-right: 85%;
                            margin-top: 30px;
                            padding: 5px;
                            margin-bottom: 10px;
                            caption-side: top;
                        ">
                    PRODUCT
                </caption>
                <thead class="table-light text-center text-dark">
                    <tr>
                        <th class="text-light text-bg-dark" style="
                                    margin-right: 0px;
                                    text-shadow: 4px 2px 3px #000000;
                                ">
                            Product ID
                        </th>
                        <th class="text-light text-bg-dark" style="text-shadow: 4px 2px 3px #000000">
                            Product Name
                        </th>
                        <th class="text-light text-bg-dark" style="text-shadow: 4px 2px 3px #000000">
                            Quantity
                        </th>
                        <th class="text-light text-bg-dark" style="text-shadow: 4px 2px 3px #000000">
                            Cost Price
                        </th>
                        <th class="text-light text-bg-dark" style="text-shadow: 4px 2px 3px #000000">
                            Sale Price
                        </th>
                        <th class="text-light text-bg-dark" style="text-shadow: 4px 2px 3px #000000">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td class="border rounded-0 border-light">{{ $product->product_id }}</td>
                        <td class="border rounded-0 border-light">{{ $product->product_name }}</td>
                        <td class="border rounded-0 border-white">{{ $product->quantity }}</td>
                        <td class="border rounded-0 border-light">{{ $product->cost_price }}</td>
                        <td class="border rounded-0 border-light">{{ $product->sale_price }}</td>
                        <td class="border rounded-0 border-light" style="
                                    padding: 8px;
                                    padding-left: 0px;
                                    margin: 0px;
                                    margin-left: 1px;
                                    width: 190.344px;
                                ">
                            <button class="btn btn-info fw-semibold text-center link-light text-bg-dark border rounded border-2 border-light editbtn" type="button" data-bs-target="#modal-3" data-bs-toggle="modal">
                                Edit</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Add modal -->
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-bg-dark" style="background: #343a40">
                        <i class="fas fa-shopping-cart text-info" style="
                                    font-size: 20px;
                                    background: var(--bs-gray-dark);
                                "></i>
                        <h3 class="modal-title fs-4 text-bg-dark" style="background: #343a40">
                            ADD
                        </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body fw-normal text-start text-bg-dark" style="background: #000000">
                        <form action="{{ route('add.product') }}" method="post" style="background: #343a40">
                            @csrf
                            <label class="form-label" style="
                                        padding: 20px;
                                        padding-top: 3px;
                                        background: #343a40;
                                        font-style: italic;
                                        color: #babfb7;
                                    ">Product Name:
                                <input class="border rounded border-1 shadow form-control form-control-sm" type="text" name="product_name" inputmode="numeric" style="
                                            padding-top: 3px;
                                            background: #343a40;
                                            color: #ffffff;
                                        " /></label><label class="form-label" style="
                                        padding: 20px;
                                        padding-top: 3px;
                                        background: #343a40;
                                        font-style: italic;
                                        color: #babfb7;
                                    ">Product Quantity: <input class="border rounded border-1 shadow form-control form-control-sm" type="number" name="quantity" style="
                                            padding-top: 3px;
                                            background: #343a40;
                                            color: #ffffff;
                                            --bs-body-color: #ffffff;
                                        " /></label><label class="form-label" style="
                                        padding: 20px;
                                        padding-top: 3px;
                                        background: #343a40;
                                        font-style: italic;
                                        color: #babfb7;
                                    ">Cost Price:
                                <input class="border rounded shadow form-control form-control-sm" type="number" name="cost_price" inputmode="numeric" style="
                                            padding-top: 3px;
                                            background: #343a40;
                                            color: #ffffff;
                                        " /></label><label class="form-label" style="
                                        padding: 20px;
                                        padding-top: 3px;
                                        background: #343a40;
                                        font-style: italic;
                                        color: #babfb7;
                                    ">Sale Price:
                                <input class="border rounded shadow form-control form-control-sm" type="number" name="sale_price" inputmode="numeric" style="
                                            background: #343a40;
                                            color: #ffffff;
                                        " /></label>
                            <div class="modal-footer text-bg-dark" style="background: #343a40">
                                <a class="btn btn-secondary fw-semibold link-dark text-bg-light border rounded border-2 border-light" role="button" data-bs-dismiss="modal" href="product.html">No</a><button class="btn btn-info fw-semibold link-light text-bg-dark border rounded border-2 border-white" type="submit">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- End of add modal -->

        <!-- Edit modal -->
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-3">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-bg-dark">
                        <i class="fas fa-pen text-success" style="
                                    font-size: 20px;
                                    background: var(--bs-gray-dark);
                                "></i>
                        <h3 class="modal-title fs-4 text-bg-dark">
                            EDIT
                        </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body fw-normal text-start text-bg-dark" style="background: #000000">
                        <form action="{{ route('edit.product') }}" method="post" style="background: #343a40">
                            @csrf @method('PUT')
                            <input id="id_update_field" name="product_id" hidden />
                            <label class="form-label" style="
                                        padding: 20px;
                                        padding-top: 3px;
                                        background: #343a40;
                                        font-style: italic;
                                        color: #babfb7;
                                    ">Product Name:
                                <input id="product_name_update_field" class="border rounded border-1 shadow form-control form-control-sm" type="text" name="product_name" inputmode="numeric" style="
                                            padding-top: 3px;
                                            background: #343a40;
                                            color: #ffffff;
                                        " /></label><label class="form-label" style="
                                        padding: 20px;
                                        padding-top: 3px;
                                        background: #343a40;
                                        font-style: italic;
                                        color: #babfb7;
                                    ">Product Quantity: <input id="quantity_update_field" class="border rounded border-1 shadow form-control form-control-sm" type="number" name="quantity" inputmode="numeric" style="
                                            padding-top: 3px;
                                            background: #343a40;
                                            color: #ffffff;
                                        " /></label><label class="form-label" style="
                                        padding: 20px;
                                        padding-top: 3px;
                                        background: #343a40;
                                        font-style: italic;
                                        color: #babfb7;
                                    ">Cost Price:
                                <input id="cost_price_update_field" class="border rounded shadow form-control form-control-sm" type="number" name="cost_price" inputmode="numeric" style="
                                            padding-top: 3px;
                                            background: #343a40;
                                            color: #ffffff;
                                        " /></label><label class="form-label" style="
                                        padding: 20px;
                                        padding-top: 3px;
                                        background: #343a40;
                                        font-style: italic;
                                        color: #babfb7;
                                    ">Sale Price:
                                <input id="sale_price_update_field" class="border rounded shadow form-control form-control-sm" type="number" name="sale_price" inputmode="numeric" style="
                                            background: #343a40;
                                            color: #ffffff;
                                        " /></label>
                            <div class="modal-footer text-bg-dark">
                                <a class="btn fw-semibold link-dark text-bg-light" role="button" data-bs-dismiss="modal">Cancel</a><button class="btn btn-info fw-semibold link-light text-bg-dark border rounded border-2 border-light" type="submit">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End of edit modal -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/product.js') }}"></script>
</body>

</html>