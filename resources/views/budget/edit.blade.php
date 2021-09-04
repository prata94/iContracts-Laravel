@extends('layouts.app')

@section('content')
<h1 class="text-center my-5 font">Edit Budget</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header font"> Edit Budget </div>

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
                    <form action="{{ route('budget.update', $budget['id']) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="decimal " name="value" class="form-control" placeholder="Budget" value="{{ $budget['value'] }}">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-success font">Confirm</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection