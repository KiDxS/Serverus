<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>F.I - Auto Supply</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Belleza&amp;display=swap" />
    <link rel="stylesheet" href="{{ asset('css/beautiful-danger-alert.css') }} " />
    <link rel="stylesheet" href=" {{ asset('css/Login-Form-Basic-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css')}}">
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
    <div class="container" style="margin-top: 15px;">
        @if(session()->has('message'))
        <div class="alert alert-success text-dark" role="alert"><span><strong>{{ session('message') }}</strong></span></div>
        @endif
        <div class="d-flex justify-content-end">
            <a class="btn" data-bs-target="#modal-2" data-bs-toggle="modal">
                <i class="fas fa-plus text-info" style="font-size: 33px;"></i>
            </a>

        </div>
        <div class="table-responsive text-center border-0 d-md-flex justify-content-md-end align-items-md-start" style="
                    caption-side: top;
                ">

            <table class="table table-striped table-hover table-dark table-bordered">

                <caption class="fw-bolder text-center text-light border rounded-pill border-info shadow caption-top" style="
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
                        <th style="margin-right: 0px">Product ID</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Cost Price</th>
                        <th>Sale Price</th>
                        <th>Actions</th>
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
                            <a class="btn btn-info text-center link-dark border-light editbtn" role="button" style="margin-right: 20px">Edit</a>
                            <button class="btn btn-secondary text-center link-dark border-light delete" type="button" data-bs-target="#modal-1" data-bs-toggle="modal" data-id={{ $product->product_id }}>
                                Delete
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Add modal -->
        <div id="modal-2" class="modal fade" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-bg-dark">
                        <h3 class="modal-title fs-4 text-bg-dark">Add product</h3><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-bg-dark">
                        <form method="post" action="{{ route('add.product') }}"><label class="form-label" style="padding: 20px;padding-top: 3px;">
                                @csrf
                                Product Name:         <input class="bg-secondary border rounded shadow form-control form-control-sm text-dark" type="text" name="product_name" style="padding-top: 3px;" /></label><label class="form-label" style="padding: 20px;padding-top: 3px;">Product Quantity:   <input class="bg-secondary border rounded shadow form-control form-control-sm text-dark" type="number" name="quantity" inputmode="numeric" style="padding-top: 3px;" /></label><label class="form-label" style="padding: 20px;padding-top: 3px;">Cost Price:                <input class="bg-secondary border rounded shadow form-control form-control-sm text-dark" type="text" name="cost_price" inputmode="numeric" style="padding-top: 3px;" /></label><label class="form-label" style="padding: 20px;padding-top: 3px;">Sale Price:                 <input class="bg-secondary border rounded shadow form-control form-control-sm text-dark" type="text" name="sale_price" inputmode="numeric" /></label>
                    </div>
                    <div class="modal-footer text-bg-dark"><a class="btn btn-secondary link-dark" role="button" data-bs-dismiss="modal">Cancel</a><button class="btn btn-info link-dark" type="submit">Save</button></div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End of add modal -->

        <!-- Edit modal -->
        <div id="modal-3" class="modal fade" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-bg-dark">
                        <h3 class="modal-title fs-4 text-bg-dark">Edit product</h3><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-bg-dark">
                        <form method="post" action="{{ route('edit.product') }}">
                            @csrf
                            @method('PUT')
                            <input id="id_update_field" name="product_id" hidden>
                            <label class="form-label" style="padding: 20px;padding-top: 3px;">Product Name:         
                                <input class="bg-secondary border rounded shadow form-control form-control-sm text-dark" type="text" name="product_name" style="padding-top: 3px;" id="product_name_update_field" />
                            </label>
                            <label class="form-label" style="padding: 20px;padding-top: 3px;">Product Quantity: 
                                 <input class="bg-secondary border rounded shadow form-control form-control-sm text-dark" type="text" name="quantity" inputmode="numeric" style="padding-top: 3px;" id="quantity_update_field" />
                            </label>
                            <label class="form-label" style="padding: 20px;padding-top: 3px;">Cost Price:                
                                <input class="bg-secondary border rounded shadow form-control form-control-sm text-dark" type="text" name="cost_price" inputmode="numeric" style="padding-top: 3px;" id="cost_price_update_field" />
                            </label>
                            <label class="form-label" style="padding: 20px;padding-top: 3px;">Sale Price:                 
                                <input class="bg-secondary border rounded shadow form-control form-control-sm text-dark" type="text" name="sale_price" inputmode="numeric" id="sale_price_update_field" />
                            </label>

                    </div>
                    <div class="modal-footer text-bg-dark">
                        <a class="btn btn-secondary link-dark" role="button" data-bs-dismiss="modal">Cancel</a><button class="btn btn-info link-dark" type="submit">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End of modal -->
        <!-- Delete modal -->
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-bg-dark">
                        <h3 class="modal-title fs-4 text-bg-dark">DELETE</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('delete.product') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input id="id" name="product_id" hidden>
                        <div class="modal-body text-bg-dark">
                            <p class="fs-6 text-center text-bg-dark">
                                <em>Do you want to delete this product?</em>
                            </p>
                        </div>
                        <div class="modal-footer text-bg-dark">
                            <a class="btn btn-secondary link-dark" role="button" data-bs-dismiss="modal">No</a><button class="btn btn-info link-dark" type="submit">
                                Yes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/product.js') }}"></script>
</body>

</html>