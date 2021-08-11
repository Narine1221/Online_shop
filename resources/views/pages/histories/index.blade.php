@extends("layouts.main")

@section("title", "Histories")

@section("content")

   <div class="container mt-5">

    <table class="table table-striped table-dark">
        <tr>
            <td>#</td>
            <td>Product_name</td>
            <td>Count</td>
            <td>Price</td>
        </tr>
        @foreach($histories as $key => $history)
            <tr>
                <td>{{ $key +1 }}</td>
                <td>{{$history->product_id}}</td>
                <td>{{$history->count}}</td>
                <td>{{$history->price}}</td>
            </tr>
            @endforeach
        </table>
        
        <div>
            <a href="/products"  class="text-decoration-none">Profile</a>
            <a href="/carts"  class="text-decoration-none">Carts</a>
        </div>
   </div>



@endsection