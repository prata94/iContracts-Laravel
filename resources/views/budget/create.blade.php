@extends('layouts.app')

@section('content')
<h1 class="text-center my-5 font">Set Budget</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header font"> Set Budget </div>

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
                <form action="{{ route('budget.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <input type="decimal" name="value" class="form-control" placeholder="Budget" />
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success font">Set Budget</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection