@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Products</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('products.create')}}"> Add New</a>
        </div>
    </div>
</div>

@if(Session::has('success'))
	<div class="alert alert-success">
		{{Session::get('success')}}
	</div>
@endif

<table class="table table-hover table-striped table-bordered" id="table-products">
	<thead>
		<th>Name</th>
		<th>Description</th>
		<th>Value</th>
		<th colspan="2">Action</th>
	</thead>
	<tbody id="list-products">
	@foreach($products as $product)
		<tr id="list{{$product->id}}">
			<td>{{$product->name}}</td>
			<td>{{$product->description}}</td>
			<td>{{$product->value}}</td>
			<td>
				 <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning btn-detail">Edit</a>
			</td>
			<td>
				 <form action="{{route('products.destroy', $product->id)}}" method="post" style"display:inline;">
		            @csrf
		            <input name="_method" type="hidden" value="DELETE">
		            <button class="btn btn-danger btn-delete delete-data" type="submit">Delete</button>
		          </form>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<div class="pagination">
	{{$products->links()}}
</div>
@stop