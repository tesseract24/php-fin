@extends('layouts.app')

@section('content')

  @foreach ($products as $product)

    <img class="img_block" src="assets/products/{{ $product->image }}">
    </div>
    <p>{{ $product->details }}</p>
    <p>{{ $product->name }}</p>
    <span>{{ $product->price }} ლ</span>
    </div>
    <form method="POST" action="{{ route('destroy') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $product->id }}">
    <button class="btn btn-danger" style="color: black" type="submit">წაშლა</button>
    </form>

  @endforeach
@endsection
