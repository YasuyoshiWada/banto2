@extends('layouts.app')
@section('title', 'Transaction')

@section('content')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Bootstrap CSS link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Link to Poppins font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>

<!-- CDN版のBootstrapとVue.jsを読み込み -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


<!-- Font Awesome icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


<div class="container">
    <div class="row auto align-items-center">
        <div class="col-auto">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </span>
                    <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-auto">
            <div class="form-group">
                <select class="form-control text-center fw-bold" id="exampleFormSelect1" style="background-color: #336699; color: #fff;">
                    <option selected>Sort By</option>
                    <option value="PriceHtL">Price High to Low</option>
                    <option value="name">Name</option>
                    <option value="stock">Stock Few</option>
                </select>
            </div>
        </div>
    </div>

    {{-- Sorting button --}}
    {{-- tabel image --}}
    <div class="row">
        <table class="table table-hover align-middle border">
            <thead class="small">
                <tr>
                    <th>USER ID</th>
                    <th>TOTAL</th>
                    <th>STATUS</th>
                    <th>BRANCH ID</th>
                    <th>CART ID</th>
                    <th>DATE</th>
                    <th>PAID AMOUNT</th>
                    <th>DETAIL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>5</td>
                    <td>24</td>
                    <td>ongoing</td>
                    <td>8</td>
                    <td>4</td>
                    <td>2023/8/29</td>
                    <td>200</td>
                    <td>
                        <div class="text-center col-xs-12">
                            <button type="buton" class="btn" data-bs-toggle="modal" data-bs-target="#test-modal" style="background-color: #6699cc; color:#fff;">
                                <i class="fi fi-sr-rectangle-list"></i>2 Items
                            </button>
                        </div>

                        <div id="test-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">2 Items</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="col-3"></th>
                                                    <th class="col-3">item name</th>
                                                    <th class="col-3">price</th>
                                                    <th class="col-3">quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- item1 --}}
                                                <tr>
                                                    <td><img src="{{ asset('storage/images/chikin.jpeg') }}" alt="chikin"width="50"></td>
                                                    <td>chikin</td>
                                                    <td>200</td>
                                                    <td>2</td>
                                                </tr>
                                                {{-- item2 --}}
                                                <tr>
                                                    <td><img src="{{ asset('storage/images/sarada.jpg')}}" alt="sarada" width="50"></td>
                                                    <td>sarada</td>
                                                    <td>200</td>
                                                    <td>2</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>

                </tr>


            </tbody>

        </table>

    </div>
</div>
@endsection
