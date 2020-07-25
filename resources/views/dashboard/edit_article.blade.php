@extends('layouts.dash')

@section('content')


    <div class="row">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit article</h6>
                </div>
                <div class="card-body">
                
                <form action="/articles/{{$article->id}}/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <input name="title" value="{{ $article->title }}" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <input name="url" value="{{ $article->url }}" type="text" class="form-control" id="" placeholder="Url*">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Current image</label>
                        <div class="image">
                            <img src="{{asset('storage')}}/{{$article->image}}" alt="">
                        </div>
                        <input class="pt-2" name="image" type="file" class="form-control-file" id="">
                    </div>
                    <div class="form-check">
                        <input name="video" type="checkbox" class="form-check-input" @if($article->video) checked @endif>
                        <label class="form-check-label">Video Icon</label>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>


                </div>
            </div>
        </div>
        
    </div>
    


@endsection
