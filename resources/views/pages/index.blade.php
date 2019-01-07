@extends('layouts.app')

@section('content')
<div class="jumbotron col-xs-1 text-center">
        <div class="container">
            <h1>{{$title}}</h1>
            <p>This is the laravel application from the "Laravel From Scratch" Youtube series</p>
          <p>
              <a class="btn btn-primary btn-lg" href="/login" role="button">Login &raquo;</a>
              <a class="btn btn-success btn-lg" href="/register" role="button">Register &raquo;</a>
            </p>
        </div>
      </div>
@endsection

