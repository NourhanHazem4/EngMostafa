@extends('layouts.parent')

@section('title', 'Show Post')


@section('content')

{{-- /////////////////////////////// --}}
<div class="col d-flex justify-content-center">

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->body}}</p>
          {{-- <p class="card-text"><small class="text-muted">created at :  {{$post->created_at}}</small></p> --}}
        </div>
        <img class="card-img-bottom" src="{{asset('images/posts/'.$post->image)}}"  alt="Card image cap">
      </div>

  </div>
{{-- /////////////////////////////// --}}



@endsection
