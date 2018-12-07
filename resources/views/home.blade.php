@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(Auth::user()->type)
            @include('users')
        @endif
    </div>
</div>
@endsection
