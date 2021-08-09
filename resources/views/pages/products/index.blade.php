@extends("layouts.main")

@section("title", "Products")

@section("content")

   <div class="container mt-5">
    <!-- <a href=""></a> -->
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
            </tr>
        @endforeach
    </table>

   </div>



@endsection