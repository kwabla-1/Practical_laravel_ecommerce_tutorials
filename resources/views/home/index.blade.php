@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="row">
          <div class="col-md-6-lg mb-2">
               <img src="{{asset('/img/game.png')}}" alt="game image">
          </div>

          <div class="col-md-6-lg mb-2">
               <img src="{{asset('/img/safe.png')}}" alt="game image">
          </div>

          <div class="col-md-6-lg mb-2">
               <img src="{{asset('/img/submarine.png')}}" alt="game image">
          </div>
    </div>
@endsection