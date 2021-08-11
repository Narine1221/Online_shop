@extends("layouts.main")

@section("title", "Products")

@section("content")

   <div class="container mt-5">

    <table class="table table-striped table-dark">
        <tr>
            <td>Name</td>
            <td>Count</td>
            <td>Price</td>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->count}}</td>
                <td>{{$product->price}}</td>
            </tr>
        @endforeach
        </table>
        {{-- @if()
        <a href="/histories" class="btn btn-dark">Buy</a>
        @endif --}}
        <!-- <button type="button" onclick="window.location='{{ url("histories") }}'">BUy</button> -->
        <div>
            <a href="/products"  class="text-decoration-none">Profile</a>
        </div>
   </div>



@endsection