@extends('layouts.app')

@section('content')
<h1 class="text-center my-5 text-light font">{{ $budget['value'] }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header font">Budget</div>
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success')}}
                    </div>
                @endif
                <div class="card-body"> <span class="font"></span> {{ $budget['value'] }}</div>
                
            </div>
            <div class="container d-flex">
            <a href="{{ route('budget.edit', $budget['id']) }}" class="btn btn-info btn-sm my-2 font">Edit</a>
            </div>
        </div>
    </div> 
@endsection