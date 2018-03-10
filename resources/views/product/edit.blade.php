@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Product <span> > Edit</span></h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('products.index')}}"> Back</a>
        </div>
    </div>
</div>

@if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

<form method="post" action="{{route('products.update', $product->id)}}">
<input name="_method" type="hidden" value="PUT">
@csrf
<div class="row">
	<div class="col-lg-10">
		
		<div class="form-group">
			<label for="name">Name: </label>
			<input type="text" class="form-control" name="name" value="{{ $product->name }}" required="required">
		</div>
		<div class="form-group">
			<label for="description">Description :</label>
			<textarea name="description" id="" cols="30" rows="10" class="form-control" required="required">{{ $product->description}}</textarea>
		</div>
		<div class="form-group">
			<label for="value">Value: </label>
			<input type="text" class="form-control" name="value" value="{{ $product->value }}" required="required">
		</div>

		<div class="form-group">
			<button class="btn btn-primary" type="submit">Submit</button>
		</div>
	</div>
</div>
</form>

@stop