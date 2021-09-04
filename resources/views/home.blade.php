@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font text-center">{{ __('Dashboard') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="container d-flex justify-content-center">
                        <a class="btn btn-primary font mt-3" href="{{ route('investments.index') }}">
                        Go to Investments!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
