@extends('layouts.app')

@section('content')
    <div class="container">
      <example-component user-id="{{ \Illuminate\Support\Facades\Auth::user()->id  }}"></example-component>
    </div>
@endsection
