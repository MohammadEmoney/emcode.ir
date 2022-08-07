@extends('layouts.admin')

@section('title', __('Update ') . $portfolio->name)

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{ __('Update ') . $portfolio->name }}</h4>
        <p class="card-description">
            {{ __('Update ') . $portfolio->name }}
        </p>
        <form class="forms-sample" action="{{ route('portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="exampleInputName1">{{ __('Name') }}</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{ $portfolio->name }}">
            </div>
            <div class="form-group date" data-provide="datepicker">
                <label for="exampleInputName1">{{ __('Date') }}</label>
                <input type="text" class="form-control datepicker" id="exampleInputDate1" placeholder="date" name="date" value="{{ $portfolio->date }}">
            </div>
            <div class="form-group">
                <label for="textArea">{{ __('Description') }}</label>
                <textarea class="form-control" id="textArea" rows="4" name="description">{{ $portfolio->description }}</textarea>
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
            <div class="row mt-4">
                @foreach ($portfolio->images as $image)
                    <div class="item col-sm-6 col-md-4 mb-3">
                        <button type="button" class="btn btn-outline-danger btn-sm delete-button" data-image-id="{{ $image->id }}">X</button>
                        <button type="button" class="btn btn-outline-success btn-sm featured-image-button" data-image-id="{{ $image->id }}">O</button>
                        <a href="{{ asset($image->src) }}" class="fancybox" data-fancybox="gallery1">
                            <img src="{{ asset($image->src) }}" alt="portfolio" width="100%" height="100%">
                        </a>
                    </div>
                @endforeach
            </div>
          <button type="submit" class="btn btn-primary mr-2">{{ __('Update') }}</button>
          <a href="{{ route('portfolios.index') }}" class="btn btn-light">{{ __('Cancel') }}</a>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
<script>
    var token = "{{ csrf_token() }}";
    $('.delete-button').on('click', function(e){
        e.preventDefault();
        var $this = $( this );
        $this.html( "<span class='spinner spinner-grow spinner-grow-sm text-danger'></span>" );
        var imageId = $this.data('image-id')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':token
            }
        });
        $.ajax({
            type:"POST",
            url:"/dashboard/images/" + imageId,
            data: {
                _method: "DELETE"
            },
            error: (e) => {
                console.log(e);
                $('.container-loading').css('display', 'none');
            },
            beforeSend: () => {
                $('.container-loading').css('display', 'block');
            },
            success:function(result){
                $this.parent().hide();
                console.log(result);
            }
        });
    })
    $('.featured-image-button').on('click', function(e){
        e.preventDefault();
        var $this = $( this );
        $this.html( "<span class='spinner spinner-grow spinner-grow-sm text-danger'></span>" );
        var imageId = $this.data('image-id')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':token
            }
        });
        $.ajax({
            type:"POST",
            url:"/dashboard/images/" + imageId,
            data: {
                _method: "PATCH"
            },
            error: (e) => {
                console.log(e);
                $('.container-loading').css('display', 'none');
            },
            beforeSend: () => {
                $('.container-loading').css('display', 'block');
            },
            success:function(result){
                $this.siblings().children('img').css("border", "2px soild #58af92");
                console.log(result);
            }
        });
    })
</script>
@endsection
