@extends('layouts.app')

@section('content')

  <div class="row">
      @foreach ($products as $product)
          <div class="col-md-4 col-xs-6">
              <a href="{{ route('show', $product->slug )}}"  class="outer_product animated zoomIn">
                <div class="img_block">
                    <img class="img_block" src="assets/products/{{ $product->image }}">
                </div>
                <p class="nm">{{ $product->details }}</p>
                <p class="desc">{{ $product->name }}</p>
                <div class="price_block">
                    <span>{{ $product->price }} ლ</span>
                </div>
                <div class="bay_block">
                    <button style="color: balck;" style="text-align: center;">
                      მეტის ნახვა
                    </button>
                </div>
              </a>
          </div>


      @endforeach
  </div>

<a href="{{ url('/addcomment') }}" style="position: absolute; bottom: 50px" href="">კომენტარის დამატება</a>

@foreach ($comments as $comment)
  <div class="col-xs-6" style="position: absolute; bottom: 100px">
    <p>{{ $comment->fullname }}</p>
    <p style="margin-top: 12px;">{{ $comment->comment }}</p>
  </div>
@endforeach

@endsection
