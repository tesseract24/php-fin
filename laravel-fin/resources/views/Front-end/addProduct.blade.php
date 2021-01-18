@extends('layouts.app')

@section('content')



<form class="clearfix" method="POST" action="/insert" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>{{ __('ატვირთეთ სურათი') }}</label>
        <input placeholder="სურათი" type="file" class="form-control" name="file" required  autofocus>
    </div>

    <div class="form-group">
        <label>{{ __('სახელი') }}</label>
        <input placeholder="სახელი" type="text" class="form-control" name="name" required  autofocus>
    </div>


    <div class="form-group">
        <label>{{ __('სლაგი') }}</label>
        <input placeholder="სლაგი" type="text" class="form-control" name="slug" required  autofocus>
    </div>


    <div class="form-group">
        <label>{{ __('დეტალები') }}</label>
        <input placeholder="დეტალები" type="text" class="form-control" name="details" required  autofocus>
    </div>


    <div class="form-group">
        <label>{{ __('ფასი') }}</label>
        <input placeholder="ფასი" type="number" class="form-control" name="price" required  autofocus>
    </div>


    <div class="form-group">
        <label>{{ __('კატეგორია') }}</label>
        <input placeholder="კატეგორია" type="text" class="form-control" name="description" required  autofocus>
    </div>


    <button type="submit" name="submit" value="add" class="btn btn-danger main-sumb">{{ __('პროდუქტის დამატება') }}</button>
</form>
</div>
@endsection
