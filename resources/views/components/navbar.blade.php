<nav class="navbar navbar-light navbar-expand-md border rounded border-1">
    <div class="container-fluid">
        <a class="navbar-brand fs-4 fw-semibold link-light" href="#" style="padding-left: 30px; text-shadow: 7px 3px 5px #000000"><strong>Serverus</strong></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1" style="padding-left: 25px">
            <ul class="navbar-nav"></ul>
            <a href="#"></a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active border rounded border-1 border-white" href="{{ route('product.page') }}" style="color: white; font-size: 15px">Product</a>
                </li>
                <!-- <li class="nav-item" style="text-shadow: 7px 5px 4px #000000">
                    <a class="nav-link border rounded border-1 border-white" href="report.html" style="
                                    text-shadow: 0px 0px 0px #343a40;
                                    color: white;
                                    margin-left: 7px;
                                    padding: 8px;
                                    font-size: 15px;
                                ">Report</a>
                </li> -->
                <li class="nav-item" style="text-shadow: 7px 5px 4px #000000">
                    <a class="nav-link border rounded border-1 border-white" href="{{ route('receipt.page') }}" style="
                                    text-shadow: 0px 0px 0px #343a40;
                                    color: white;
                                    margin-left: 7px;
                                    padding: 8px;
                                    font-size: 15px;
                                ">Receipt</a>
                </li>
                <li class="nav-item"></li>
            </ul>
        </div>
        <a class="btn fs-6 fw-bold link-light border rounded border-2" role="button" style="margin-right: 0px; padding-right: 11px" href="{{ route('logout') }}">Log Out</a>
    </div>
</nav>