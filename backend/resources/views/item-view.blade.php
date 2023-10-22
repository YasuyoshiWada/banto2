@extends('layouts.app')
@section('title', 'Item View')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/items.css')  }}" >
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">


<div class="container" id="item-view">
    <div class="row">
        <div class="col-8">
            <div class="row mb-5">
                <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg></span>
                        <input type="text" class="form-control" placeholder="search items" aria-label="search" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-3"></div>
                <div class="col-3">
                    <div class="form-group">
                        <select class="form-control text-center fw-bold" id="exampleFormSelect1" style="background-color: #99CCFF; color: #fff;">
                        <option selected>Category</option>
                        <option value="meatSeafood">Meat & Seafood</option>
                        <option value="bakery">Bakery & Bread</option>
                        <option value="dairy">Dairy & Eggs</option>
                        <option value="snaks">Snacks</option>
                        <option value="drinks">Coffee & Tea</option>
                        <option value="frozen">Frozen</option>
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <select class="form-control text-center fw-bold" id="exampleFormSelect1" style="background-color: #99CCFF; color: #fff;">
                        <option selected>Sort By</option>
                        <option value="priceHtL">Price High to Low</option>
                        <option value="name">Name</option>
                        <option value="stock">Stock Few</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-12">
                    <h1 class="text-center fw-bolder">Item Index</h1>
                </div>
            </div>

            <div class="row mt-3 item-container">
                    @forelse ($items as $item)
                    <div class="col-md-3 mt-3">
                        <div class="card h-100 rounded">
                            <a href="#">
                                <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->image }}" class="card-img-top rounded"
                                    style="height: 200px; object-fit: cover;">
                            </a>
                            <div class="card-body d-flex flex-column">
                                <h5 class="mt-1 flex-grow-1">Name: {{ $item->name }}</h5>
                                <div class="text-primary">Price: Yen {{ $item->price }}</div>
                                <div class="text-primary">Inventory: {{ $item->inventory }}</div>
                                <div class="text-dark flex-grow-1">Detail: {{ $item->detail }}</div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col">
                        <h2 class="text-muted text-center">No stock yet</h2>
                        <p class="text-center">
                            <a href="{{ route('items.create') }}" class="text-decoration-none">Create a new order item</a>
                        </p>
                    </div>
                    @endforelse
            </div>
            <div class="col-4 mt-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>





        <div class="col-4 rounded right-side" style="background-color: #99CCFF">
            <p class="fs-1 fw-bold text-center" style="padding-top: 20px">ORDER LIST</p>
            <p class="fs-5 text-end">Order ID : 123456</p>

            <div class="order-item-area mb-5" style="">
                <div class="order-item rounded px-3 py-2 mb-3" style="background-color: #F2F2F2">
                <p class="item-name fs-4 fw-bold mb-1">Peach</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                    <p class="fs-5 me-3 mb-0">QTY</p>
                    <div class="form-group">
                        <select class="form-control text-center fw-bold" id="exampleFormSelect1" style="background-color: #fff;">
                        <option selected>4</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        </select>
                    </div>
                    </div>

                    <p class="item-ttl fs-3 fw-bold mb-0">$10.00</p>
                </div>
                </div>

                <div class="order-item rounded px-3 py-2 mb-3" style="background-color: #F2F2F2">
                <p class="item-name fs-4 fw-bold mb-1">Peach</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                    <p class="fs-5 me-3 mb-0">QTY</p>
                    <div class="form-group">
                        <select class="form-control text-center fw-bold" id="exampleFormSelect1" style="background-color: #fff;">
                        <option selected>4</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        </select>
                    </div>
                    </div>

                    <p class="item-ttl fs-3 fw-bold mb-0">$10.00</p>
                </div>
                </div>

                <div class="order-item rounded px-3 py-2 mb-3" style="background-color: #F2F2F2">
                <p class="item-name fs-4 fw-bold mb-1">Peach</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                    <p class="fs-5 me-3 mb-0">QTY</p>
                    <div class="form-group">
                        <select class="form-control text-center fw-bold" id="exampleFormSelect1" style="background-color: #fff;">
                        <option selected>4</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        </select>
                    </div>
                    </div>

                    <p class="item-ttl fs-3 fw-bold mb-0">$10.00</p>
                </div>
                </div>

                <div class="order-item rounded px-3 py-2 mb-3" style="background-color: #F2F2F2">
                <p class="item-name fs-4 fw-bold mb-1">Apple</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                    <p class="fs-5 me-3 mb-0">QTY</p>
                    <div class="form-group">
                        <select class="form-control text-center fw-bold" id="exampleFormSelect1" style="background-color: #fff;">
                        <option selected>1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        </select>
                    </div>
                    </div>

                    <p class="item-ttl fs-3 fw-bold mb-0">$20.00</p>
                </div>
                </div>
            </div>{{-- //.order-item-area --}}

            <div class="d-flex justify-content-between fs-4">
                <p class="">SUBTOTAL</p>
                <p class="">$10.00</p>
            </div>
            <div class="d-flex justify-content-between fs-4">
                <p class="">SERVICE CHARGE</p>
                <p class="">10.0%</p>
            </div>
            <div class="d-flex justify-content-between fw-bold fs-3">
                <p class="">TOTAL</p>
                <p class="">$37.00</p>
            </div>
            <div class="d-flex justify-content-between">
                <button class="btn fw-bold send-btn" data-bs-toggle="modal" data-bs-target="#sendOrder">SEND ORDER</button>
                <button class="btn btn-light fw-bold cxl-btn">CANCEL</button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="sendOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                    Your order has been completed!
                    </div>

                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>












@endsection
