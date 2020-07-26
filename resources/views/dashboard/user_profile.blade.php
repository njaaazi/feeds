@extends('layouts.dash')

@section('content')
   <!-- Page Heading -->


    <div class="row">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit profile</h6>
                </div>
                <div class="card-body">
                
                <form action="/profile/{{ $profile->id }}/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label for="website_url">Website Url</label> 

                        <i class="fas fa-question-circle fa-sm fa-fw mr-2 text-blue" data-toggle="popover" data-placement="top" title="What's website url?" data-content="In order to show your visit website button in page, then you need to add your website url."></i>

                        <input name="website_url" value="{{ $profile->website_url }}" type="text" class="form-control @error('website_url') is-invalid @enderror" id="website_url" placeholder="">
                        
                        @error('website_url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    <div class="form-group">
                        <label for="logo">Current logo</label>   
                        @if($profile->logo)
                        <div class="profile">
                            <img class="rounded-circle" src="{{asset('storage')}}/{{$profile->logo}}" alt="">
                        </div>
                        @else

                            <p> <i>You didn't upload your logo yet!</i></p> 
                        @endif


                        <label for="logo">Select logo</label>   
                        <input name="logo" value="{{ $profile->logo }}" type="file" class="form-control-file  @error('logo') is-invalid @enderror" id="logo">

                        @error('logo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <br>

                    <button type="submit" class="btn btn-primary float-right">Update</button>
                </form>


                </div>
            </div>
        </div>
        
    </div>

@endsection