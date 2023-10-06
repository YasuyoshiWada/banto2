@extends ('layouts.app')
@section('title','createcarts')
@section('content')
<div class="col container">
    <div class="row justify">
        <h1 class="text-center mt-3 mt-5 text-bolder">ADD ITEM</h1>
            <form action="{{ route('cart.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="col-6">
                    <label for="item_price" class="form-label">item_price</label>
                    <input type="text" name="item_price" id="item_price" class="form-control" placeholder="Enter Item Name" value="{{ old('item_price') }}" autofocus>
                    @error('item_price')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6 mt-2">
                    <label for="qty" class="form-label">qty</label>
                    <input type="text" name="qty" id="qty" class="form-control" placeholder="Enter Item Price" value="{{ old('qty') }}" autofocus>
                    @error('qty')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit"class="btn btn-warning px-5">CREATE</button>
            </form>
    </div>
</div>
@endsection
