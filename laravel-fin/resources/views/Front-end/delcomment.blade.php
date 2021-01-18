@extends('layouts.app')

@section('content')

@foreach ($comments as $comment)
  <p>{{ $comment->fullname }}</p>
  <p style="margin-top: 12px;">{{ $comment->comment }}</p>
  <form method="POST" action="{{ route('destroycomment') }}">
  @csrf
  <input type="hidden" name="id" value="{{ $comment->id }}">
  <button class="btn btn-danger" style="color: black" type="submit">წაშლა</button>
  </form>
  </div>
@endforeach
@endsection
