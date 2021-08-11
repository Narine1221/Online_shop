@extends("layouts.main")

@section("title", "Carts")

@section("content")

   <div class="container mt-5">

   <!-- <a href="/carts/create">New</a> -->
    <table class="table table-striped table-dark">
        <tr>
            <td>#</td>
            <td>Product_Name</td>
            <td>Count</td>
        </tr>
        @foreach($carts as $key => $cart)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{$cart->product_id}}</td>
                <td>{{$cart->count}}</td>  
                <td>
                    <form action="/carts/delete/{{ $cart->id }}" method="POST">
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>

                </td>              
            </tr>
            @endforeach
        </table>

        <div>
            <a href="/products"  class="text-decoration-none">Profile</a>
            <a href="/histories"  class="text-decoration-none">Histories</a>
        </div>

   </div>



@endsection