<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>(Org) F.I - Auto Supply</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/ABeeZee.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Abhaya%20Libre.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Aboreto.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Belleza.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Cutive%20Mono.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/JetBrains%20Mono.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Montserrat.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Roboto.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/beautiful-danger-alert.css') }}" />
    <link rel="stylesheet" href=" {{ asset('css/Login-Form-Basic-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css')}}" />
</head>

<body style="background-color: var(--bs-gray-dark)">
    @include('components.navbar')
    <div class="container" style="margin-top: 15px">
        @include('components.alert')
        @include('components.error')
        <div class="d-flex justify-content-end">
            <i class="fas fa-plus text-white btn" style="font-size: 33px" data-bs-target="#modal-2" data-bs-toggle="modal"></i>
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
                    RECEIPT
                </caption>
                <thead class="table-light text-center text-dark">
                    <tr>
                        <th class="text-light text-bg-dark" style="
                                    margin-right: 0px;
                                    text-shadow: 4px 2px 3px #000000;
                                ">
                            Receipt ID
                        </th>
                        <th class="text-light text-bg-dark" style="text-shadow: 4px 2px 3px #000000">
                            Customer's Name
                        </th>
                        <th class="text-light text-bg-dark" style="
                                    text-shadow: 4px 2px 3px #000000;
                                    width: 190.3px;
                                ">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($receipts as $receipt)
                    <tr>
                        <td class="border rounded-0 border-light">{{ $receipt->receipt_id }}</td>
                        <td class="border rounded-0 border-light">
                            {{ $receipt->customer_name }}
                        </td>
                        <td class="border rounded-0 border-light" style="
                                    padding: 8px;
                                    padding-left: 15px;
                                    margin: 0px;
                                    margin-left: 1px;
                                    width: 144.3px;
                                ">
                            <a class="btn btn-info fw-semibold text-center link-light text-bg-dark border rounded border-2 border-light" role="button" style="margin-right: 12px" href="{{ route('edit.receipt.page', $receipt->receipt_id) }}">View</a><button class="btn btn-secondary fw-semibold text-center link-dark text-bg-light border rounded border-light delete" type="button" data-bs-target="#modal-1" data-bs-toggle="modal" data-id="{{ $receipt->receipt_id }}">
                                Delete
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-bg-dark" style="background: #343a40">
                        <i class="fas fa-shopping-cart text-info" style="
                                    font-size: 20px;
                                    background: var(--bs-gray-dark);
                                "></i>
                        <h3 class="modal-title fs-4 text-bg-dark" style="background: #343a40">
                            &nbsp;ADD
                        </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body fw-normal text-start text-bg-dark" style="background: #000000">
                        <form action="{{ route('add.receipt') }}" method="post" style="background: #343a40">
                            @csrf
                            <label class="form-label" style="
                                        padding: 20px;
                                        padding-top: 3px;
                                        background: #343a40;
                                        font-style: italic;
                                        color: #babfb7;
                                    ">Customer's Name<br /><input class="border rounded border-1 shadow form-control form-control-sm" type="text" name="customer_name" style="
                                            padding-top: 3px;
                                            background: #343a40;
                                            color: #ffffff;
                                            width: 177px;
                                        " /></label><label class="form-label" style="
                                        padding: 20px;
                                        padding-top: 3px;
                                        background: #343a40;
                                        font-style: italic;
                                        color: #babfb7;
                                    " input="text">Customer's Address:<br /><input class="border rounded border-1 shadow form-control form-control-sm" type="text" name="address" style="
                                            padding-top: 3px;
                                            background: #343a40;
                                            color: #ffffff;
                                            --bs-body-color: #ffffff;
                                            width: 177px;
                                        " /></label><label class="form-label" style="
                                        padding: 20px;
                                        padding-top: 3px;
                                        background: #343a40;
                                        font-style: italic;
                                        color: #babfb7;
                                    " input="text">Phone Number:<br /><input class="border rounded border-1 shadow form-control form-control-sm" type="text" name="phone_number" style="
                                            padding-top: 3px;
                                            background: #343a40;
                                            color: #ffffff;
                                            --bs-body-color: #ffffff;
                                            width: 177px;
                                        " /></label><label class="form-label" style="
                                        padding: 20px;
                                        padding-top: 3px;
                                        background: #343a40;
                                        font-style: italic;
                                        color: #babfb7;
                                    " input="text">Product:<br /><select class="form-select" style="
                                            background: #343a40;
                                            border-color: var(--bs-modal-bg);
                                            width: 177px;
                                            color: #ffffff;
                                        " name="product_id">
                                    @foreach ($products as $product)
                                    <option value="{{ $product->product_id }}">{{ $product->product_name }}</option>
                                    @endforeach
                                </select></label><label class="form-label" style="
                                        padding: 20px;
                                        margin-left: 113px;
                                        padding-top: 3px;
                                        background: #343a40;
                                        font-style: italic;
                                        color: #babfb7;
                                    " input="text">Quantity:<br /><input class="border rounded border-1 shadow form-control form-control-sm" type="number" name="quantity" style="
                                            padding-top: 3px;
                                            background: #343a40;
                                            color: #ffffff;
                                            --bs-body-color: #ffffff;
                                            width: 177px;
                                        " /></label>
                            <div class="modal-footer text-bg-dark" style="background: #343a40">
                                <a class="btn btn-secondary fw-semibold link-dark text-bg-light border rounded border-2 border-light" role="button" data-bs-dismiss="modal" href="product.html">Cancel</a><button class="btn btn-info fw-semibold link-light text-bg-dark border rounded border-2 border-white" type="submit">
                                    Add
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center" style="background: var(--bs-gray-dark)">
                    <i class="far fa-trash-alt text-danger" style="
                                font-size: 20px;
                                background: var(--bs-gray-dark);
                            "></i>
                    <h3 class="modal-title fs-4 text-white" style="background: var(--bs-gray-dark)">
                        &nbsp;DELETE
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('delete.receipt') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body text-center text-white border-0 border-dark" style="background: var(--bs-gray-dark)">
                        <input class="form-control" type="hidden" name="receipt_id" id="receipt_id" />
                        <p class="fs-6 text-center text-light" style="
                                    background: var(--bs-gray-dark);
                                    text-shadow: 10px 5px 4px #000000;
                                ">
                            <em>Do you want to delete this product?</em>
                        </p>
                    </div>
                    <div class="modal-footer text-center" style="background: var(--bs-gray-dark)">
                        <a class="btn btn-secondary fw-bold link-dark text-bg-light border rounded border-2 border-white" role="button" data-bs-dismiss="modal" href="product.html">No</a><button class="btn btn-info fw-bold link-light text-bg-dark border rounded border-2 border-white" type="submit">
                            Yes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/receipt.js') }}"></script>
</body>

</html>