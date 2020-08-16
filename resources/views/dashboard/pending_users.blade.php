@extends('layouts.dash')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All pending users</h6>
    </div>
    <div class="card-body">
        <!-- <div class="table-responsive"> -->

            <table id="articles" class="table table-bordered"  style="width:100%">
            
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Actions</th>
                       
                    </tr>
                </thead>
                <tbody>
                
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                            <form method="POST" action="/user/{{$user->insta_account}}/pending/approve">
                                @csrf

                                <button type="submit" class="btn btn-primary">Approve</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        <!-- </div> -->
    </div>
</div>
      

  
@endsection