@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
    <div class="card">
          <div class="card-header">
               Admin panel
          </div>
          <div class="card-body">
               @if (true)
                   <p>user is logged in and id is {{Auth::user()}}</p>
               @else
               <p>user not logged in id is  {{Auth::user()->getRole()}}</p>
               @endif
               Welcome to the Admin Panel, use the sidebar to navigate between the different options
          </div>
    </div>
@endsection