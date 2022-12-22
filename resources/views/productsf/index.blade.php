@extends('productsf.layout')
@section('content')
@include('dashboard.header')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('productss.create')}}"> create new product</a>
            </div>
            <br>
        </div>
</div>
   
   <!-- success alert message -->
   @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th width="280px">Action</th>
            
        </tr>
    
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>        
            <td>{{ $product->name }}</td>
            <td>{{ $product->details }}</td>
            <td>{{ $product->price }}</td>
            <td>
                 <form action="" method="POST">
                    <a class="btn btn-primary" href="{{route('productss.show',$product->id)}}">show</a>
                    <a class="btn btn-info" href="">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>
   
@endsection('content')