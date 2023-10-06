@extends('layouts.app')
@section('title', 'Item index')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-12">
            <h1 class="text-center fw-bolder">Item Index</h1>
        </div>
    </div>
    <div class="row mt-3">
        @forelse ($all_items as $item)
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
    <div class="d-flex justify-content-center mt-4">
        {{ $all_items->links() }}
    </div>
</div>
@endsection
