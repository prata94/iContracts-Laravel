@extends('layouts.app')

@section('content')
<h1 class="text-center my-5 font">Create investments</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header font"> Create new investments </div>

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
                <form action="{{ route('investments.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="investment_name" class="form-control" placeholder="Name" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="investment_type" class="form-control" placeholder="Category" />
                    </div>
                    <div class="form-group">
                        <input type="decimal" name="capital_invested" class="form-control" placeholder="Capital Invested" />
                    </div>
                    <div class="form-group">
                        <input type="decimal" name="expected_return" class="form-control" placeholder="Expected Return(%)" />
                    </div>
                    <div class="form-group">
                        <input type="date" name="date_of_investment" class="form-control" placeholder="Date of investment" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success font">Create Investment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection