@extends('layouts.app')

@section('content')

<h3 class="pg_title">{{ $product->name }}</h3>
<img class="img_out" src="assets/products/{{ $product->image }}">

<p class="prod_name">{{ $product->name }}</p>                                      
<p><span>{{ $product->details }}</span></p>
<span>{{ $product->price }} ლ</span>                      
{{ $product->description }}




{{-- @if ($product->id == $comment->product_id)
@foreach ($comments as $comment)
<div style="position: absolute; bottom: 50px">
	{{ $comment->fullname }}
	{{ $comment->comment }}

</div>

@endforeach

@endif --}}

@foreach ($comments as $comment)
<div style="position: absolute; bottom: 50px">
	{{ $comment->fullname }}
	{{ $comment->comment }}

</div>

@endforeach

@endsection