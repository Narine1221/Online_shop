@extends("layouts.main")

@section("title", "Products")

@section("content")

   <div class="container mt-5">

   <a href="/products/create">New</a>
    <table class="table table-striped table-dark">
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Count</td>
            <td>Price</td>
        </tr>
        @foreach($products as $key => $product)
            <tr>
                <td>{{ $key +1 }}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->count}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="/products/edit/{{ $product->id }}" class="btn btn-warning">Edit</a>
                    <a href="/products/show/{{ $product->id }}" class="btn btn-warning">Show</a>
                    <form action="/products/delete/{{ $product->id }}" method="POST">
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        
        <div>
            <a href="/histories"  class="text-decoration-none">Histories</a>
            <a href="/carts"  class="text-decoration-none">Carts</a>
        </div>
   </div>



@endsection