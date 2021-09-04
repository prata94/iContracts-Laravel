@extends('layouts.app')

@section('content')
<h1 class="text-center my-5 text-light font">{{ $investment['investment_name'] }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header font">Investment details</div>
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success')}}
                    </div>
                @endif
                <div class="card-body"> <span class="font">Category:</span> {{ $investment['investment_type'] }}</div>
                <div class="card-body"> <span class="font">Capital Invested:</span> {{ $investment['capital_invested'] }}  €</div>
                <div class="card-body"> <span class="font">Expected Return:</span> {{ $investment['expected_return'] }}%</div>
                <div class="card-body"> <span class="font">Date:</span> {{ $investment['date_of_investment'] }}</div>
                <div class="card-body">{{ $investment['description'] }}</div>
            </div>
            <div class="container d-flex">
            <a href="{{ route('investments.edit', $investment['id']) }}" class="btn btn-primary btn-sm my-2 font">Edit</a>
            <form action="{{ route('investments.destroy', $investment['id']) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger my-2 btn-sm font mx-1">Delete</button>
            </form>
            <!-- <a href="{{ route('investments.destroy', $investment['id']) }}" class="btn btn-info btn-danger my-2 btn-sm">Delete</a> -->
            </div>
        </div>
    </div> 
@endsection