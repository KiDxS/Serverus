<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>F.I - Auto Supply</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css')}}" />
</head>

<body style="background-color: var(--bs-gray-dark)">
    <nav class="navbar navbar-light navbar-expand-md border rounded border-1">
        <div class="container-fluid">
            <a class="navbar-brand fs-4 fw-semibold link-light" href="#" style="padding-left: 30px; text-shadow: 7px 3px 5px #000000"><strong>Serverus</strong></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1" style="padding-left: 25px">
                <ul class="navbar-nav"></ul>
                <a href="#"></a>
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item" style="text-shadow: 7px 5px 4px #000000"></li>
                    <li class="nav-item" style="text-shadow: 7px 5px 4px #000000"></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
            <a class="btn fs-6 fw-bold link-light border rounded border-2" role="button" style="margin-right: 0px; padding-right: 11px" href="{{ route('logout') }}">Log Out</a>
        </div>
    </nav>
    <h1 class="display-6 text-center" style="margin-top: 80px; font-size: 30.4px">
        <strong><span style="color: rgb(255, 255, 255)">Customer's Receipt Information</span></strong>
    </h1>
    <div class="container" style="margin-top: 50px;">
        <form style="margin-left: 60px; margin-top: 20px" method="post" action="{{ route('edit.receipt') }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <input class="form-control" type="hidden" name="current_customer_name" id="current_customer_name" value="{{ $customer_receipt->customer_name }}" />
                    <label class="form-label" style="
                        padding: 20px;
                        padding-top: 3px;
                        background: #343a40;
                        font-style: italic;
                        color: white;
                    ">Customer name:<br /><input class="border rounded border-1 shadow form-control form-control-sm" type="text" name="customer_name" id="customer_name" style="
                            padding-top: 3px;
                            background: white;

                            
                        " disabled="" value="{{ $customer_receipt->customer_name }}" /></label><label class="form-label" style="
                        padding: 20px;
                        padding-top: 3px;
                        background: #343a40;
                        font-style: italic;
                        color: white;
                    ">Address:<br /><input class="border rounded border-1 shadow form-control form-control-sm" type="text" name="address" id="address" style="
                            padding-top: 3px;
                            background: white;
                            
                        " disabled="" value="{{ $customer_receipt->address }}" /></label><label class="form-label" style="
                        padding: 20px;
                        padding-top: 3px;
                        background: #343a40;
                        font-style: italic;
                        color: white;
                    ">Phone Number:<br /><input class="border rounded border-1 shadow form-control form-control-sm" type="text" name="phone_number" id="phone_number" style="
                            padding-top: 3px;
                            background: white;

                            
                        " disabled="" value="{{ $customer_receipt->phone_number }}" /></label>
                </div>
                <div class="col">
                    <label class="form-label" style="
                        padding: 20px;
                        padding-top: 3px;
                        background: #343a40;
                        font-style: italic;
                        color: white;
                    ">Product:<br /><select class="form-select" disabled="" style=" height: 35px; color: gray" name="product_id">
                            <option value="{{ $customer_receipt->product_id }}" selected="">{{ $customer_receipt->product_name }}</option>
                        </select></label><label class="form-label" style="
                        padding: 20px;
                        padding-top: 3px;
                        background: #343a40;
                        font-style: italic;
                        color: white;
                    ">Quantity<br /><input class="border rounded border-1 shadow form-control form-control-sm" type="number" name="quantity" style="
                            padding-top: 3px;
                            background: white;

                            
                        " disabled="" value="{{ $customer_receipt->quantity }}" /></label>
                </div>
            </div>

            <div class="row d-lg-flex">
                <div class="col d-lg-flex flex-row justify-content-end">
                    <button class="btn btn-primary fw-semibold link-light text-bg-dark border rounded border-2 border-white" type="button" style="margin-right: 10px" onclick="editBtnClicked()">
                        Edit</button>
                    <button id="save_button" class="btn btn-primary fw-semibold link-light text-bg-dark border rounded border-2 border-white" type="submit" style="margin-right: 10px" disabled="">
                        Save
                    </button><a class="btn btn-primary fw-semibold link-dark text-bg-light border rounded border-2 border-white" role="button" style="margin-right: 160px" href="{{ route('receipt.page') }}">Back</a>
                </div>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/edit_receipt.js') }}"></script>
</body>

</html>