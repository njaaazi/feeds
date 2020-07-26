@extends('layouts.dash')

@section('content')

    
    <div class="row">
        <div class="col-md-8">

            <!-- @if($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ $error }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endforeach
            @endif 
           -->

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add your new article</h6>
                </div>
                <div id="card-body" class="card-body">
                    <form action="/articles/add" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input name="title" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <input name="url" type="text" class="form-control @error('url') is-invalid @enderror" id="url" placeholder="Url*">
                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Select image</label>
                            <input name="image" type="file" class="form-control-file @error('image') is-invalid @enderror" id="image">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input name="video" type="checkbox" class="form-check-input">
                                <label class="form-check-label">Video Icon</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary float-right">Add article</button>
                            
                    </form>
                </div>

               

            </div>



        </div>
        <div class="col-md-4">
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Title</strong><br>
                <small>It is optional, if you do like to set your title it will show in the bottom of the image with a white strip, otherwise it will not show at all if you let it empty.</small>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Url</strong><br>
                <small>This is required, should be full url i.e <code>https://yourdomain.com/permalink</code>. This will redirect to the news itself when you click the image.</small>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>








    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add this article to your feed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              
                    
                    <form action="/articles/add" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input name="title" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <input name="url" type="text" class="form-control" id="" placeholder="Url*">
                        </div>
                        <div class="form-group">
                            <!-- <label for="exampleFormControlFile1">Select image</label>
                            <input name="image" type="file" class="form-control-file" id=""> -->
                            <input name="image" type="hidden" class="form-control" id="article_image" value="" placeholder="">
                        </div>
                        <div class="form-group">
                            <input name="taken_at" type="hidden" class="form-control" id="taken_at" value="" placeholder="">
                        </div>
                        <div class="form-group">
                            <input name="type_name" type="hidden" class="form-control" id="type_name" value="" placeholder="">
                        </div>
                    
                        <br>
                        <div clas
                        s="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                            
                        </div>
                    </form>


            </div>

            
           
            </div>
        </div>
    </div>


@endsection
