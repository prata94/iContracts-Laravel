@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">Update Investment</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header"> Update investment </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-body">
                    <form action="{{ route('investments.update', $investment['id']) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input type="text" name="investment_name" class="form-control" placeholder="Name" value="{{ $investment['investment_name'] }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="investment_type" class="form-control" placeholder="Category" value="{{ $investment['investment_type'] }}">
                            </div>
                            <div class="form-group">
                                <input type="decimal" name="capital_invested" class="form-control" placeholder="Capital invested" value="{{ $investment['capital_invested'] }}">
                            </div>
                            <div class="form-group">
                                <input type="decimal" name="expected_return" class="form-control" placeholder="Expected return(%)" value="{{ $investment['expected_return'] }}">
                            </div>
                            <div class="form-group">
                                <input type="date" name="date_of_investment" class="form-control" placeholder="Date" value="{{ $investment['date_of_investment'] }}">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $investment['description'] }}</textarea>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection