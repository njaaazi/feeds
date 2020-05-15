@extends('layouts.dash')

@section('content')
    <div class="input-group mb-3 col-md-6">
        <input id="bio-link" type="text" class="form-control is-valid" value={{ "https://feeds.social/" . $insta_account }} >
        <div class="input-group-append">
            <button class="btn btn-outline-primary copy-btn" type="button" data-clipboard-target="#bio-link">Copy link</button>
        </div>
        <div class="valid-feedback">Copy and paste this link to your instagram bio</div>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
        </div>
        <div id="card-body" class="card-body">
           
        </div>
    </div>

@endsection
