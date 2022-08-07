@extends('layouts.admin')

@section('title', __('Create Portfolio'))

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{ __('Create Portfolio') }}</h4>
        <p class="card-description">
            {{ __('Create Portfolio') }}
        </p>
        <form class="forms-sample" action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">{{ __('Name') }}</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{ old('name') }}">
            </div>
            <div class="form-group date" data-provide="datepicker">
                <label for="exampleInputName1">{{ __('Date') }}</label>
                <input type="text" class="form-control datepicker" id="exampleInputDate1" placeholder="date" name="date" value="{{ old('date') }}">
            </div>
            <div class="form-group">
                <label>{{ __('File upload') }}</label>
                <input type="file" name="images[]" class="file-upload-default" multiple>
                <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">{{ __('Upload') }}</button>
                </span>
                </div>
            </div>
            <div class="form-group">
                <label for="textArea">{{ __('Description') }}</label>
                <textarea class="form-control" id="textArea" rows="4" name="description">{{ old('description') }}</textarea>
            </div>
          <button type="submit" class="btn btn-primary mr-2">{{ __('Submit') }}</button>
          <button class="btn btn-light">{{ __('Cancel') }}</button>
        </form>
      </div>
    </div>
  </div>
@endsection
{{--
@section('scripts')

@endsection --}}
