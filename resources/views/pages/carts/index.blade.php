@extends("layouts.main")

@section("title", "Carts")

@section("content")

   <div class="container mt-5">

   <!-- <a href="/carts/create">New</a> -->
    <table class="table table-striped table-dark">
        <tr>
            <td>#</td>
            <!-- <td>Product_Name</td> -->
            <td>Count</td>
            <!-- <td>Price</td> -->
        </tr>
        @foreach($carts as $key => $cart)
            <tr>
                <td>{{ $key + 1 }}</td>
                {{-- <td>{{$cart->product->name}}</td> --}}
                <td>
                    <form action="/carts/{{$cart->id}}/plus" method="POST"> 
                        @csrf
                            <input type="submit" value="+" name="plus">
                    </form> 
                            {{$cart->count}}
                    <form action="/carts/{{$cart->id}}/minus" method="POST"> 
                        @csrf
                            <input type="submit" value="-" name="minus">
                    </form> 
                </td>
                {{-- <td>{{$cart->product->price}}</td> --}}
                <td>
                    <form action="/carts/delete/{{ $cart->id }}" method="POST">
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>

                </td>              
            </tr>
        @endforeach
        </table>
        <form action="" method="Post">
            <input type="submit" value="Buy" name="buy">

        </form>
        <div>
            <a href="/products"  class="text-decoration-none">Products</a>
            <a href="/histories"  class="text-decoration-none">Histories</a>
        </div>

   </div>



@endsection