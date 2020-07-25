@extends('layouts.dash')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All added articles</h6>
    </div>
    <div class="card-body">
        <!-- <div class="table-responsive"> -->

            <table id="articles" class="table table-bordered"  style="width:100%">
            
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="d-none d-md-table-cell">Title</th>
                        <th class="d-none d-md-table-cell">Url</th>
                        <th>Image</th>
                        <th class="d-none d-md-table-cell">Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @if($articles->count() > 0)
                    @foreach($articles as $article)
                        <tr>
                                    

                            <td>{{$article->id}}</td>
                            <td class="d-none d-md-table-cell">{{$article->title}}</td>
                            <td class="d-none d-md-table-cell">{{$article->url}}</td>
                            <td class="image"><img src="{{asset('storage')}}/{{$article->image}}" alt=""></td>
                            <td class="d-none d-md-table-cell">{{$article->created_at->diffForHumans()}}</td>
                            <td>
                                <a class="btn btn-primary" href="/articles/{{ $article->id }}/edit">Edit</a>  
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

        <!-- </div> -->
    </div>
</div>


@if($articles->count() > 0)

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Are you sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        If you delete, you won't be able to restore the article again!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="/articles/{{  $article->id }}/delete" method="POST">
            @csrf
            @method('delete')
            
            <button class="btn btn-danger" type="submit"> Yes </button>
        </form>
      </div>
    </div>
  </div>
</div>

@endif
  


@endsection