@extends('layouts.app')

@section('content')

<div class="text-center">
    This is the admin page. Go to  

    <a class="" href="{{ route('investments.index') }}">
        Investments
    </a>

</div>

@endsection