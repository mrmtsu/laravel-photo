@extends('app')

@section('title', '記事投稿')

@include('nav')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            @include('error_card_list')
            <div class="card-text">
              <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                @include('articles.form')
                <button type="submit" class="btn btn-outline-default btn-lg waves-effect btn-lg btn-block">NEW POST</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
