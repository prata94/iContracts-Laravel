@extends('layouts.app')

@section('content')
<!-- <h1 class="text-center my-5 font bg-light text-dark">{{ $username }}</h1> -->
<h1 class="text-center my-5 bg-light text-dark">
<span class="font">{{ $username }}</br></span>
<span class="h6 font-weight-bold">Remaining Budget: </br></span><div class=" container w-25 text-dark">{{ $final_budget . " €"}}</div></h1>


<div class="row justify-content-center m-5">

<div class="col-md-4 mb-3">


    <!-- BUDGET AREA -->

    <div class="col-md-12 mb-3">
        <div class="card card-default h-100">
            <div class="card card-header text-center font h5"> Starting Budget</div>
            <div class="card-body d-flex flex-column text-center">
                <div class="my-3 h1">{{ $budget['value'] . " €"}}</div>

            <div class="text-center mt-auto">
                <a href="{{ route('budget.edit',$budget['id'])}}" class="btn btn-primary btn-smmr-2 font">Edit Budget</a>
            </div>
            </div>
        </div>
    </div> 

    <!-- SEARCH AREA -->

    <div class="col-md-12">
        <div class="card card-default">
            <div class="card card-header font">Search</div>
            <div class="card-body">
                <form action="">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control mr-2" placeholder="Search" />
                        <button class="btn btn-primary font btn-sm" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>


<!-- INVESTMENTS AREA -->

        <div class="col-md-8 mb-3">
            <div class="card card-default h-100">
                <div class="card card-header font text-center h5">My Investments</div>
                <div class="card-body d-flex flex-column">

                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success')}}
                        </div>
                    @endif

                    <ul class="list-group">
                        @foreach ($investments as $investment)
                        <li class="list-group-item">
                            <span class="font">{{ $investment['investment_name'] }}</span> - <span class="small">{{ $investment['investment_type'] }}</span>
                            <a href="{{ route('investments.show', $investment['id']) }}" class="btn btn-primary btn-sm float-right mr-2 font"><i class="bi bi-eye"></i></a>
                        </li>
                    @endforeach 

                    </ul>

                    <div class="row justify-content-center">{{ $investments->appends(request()->query())->links() }}</div>

                    <div class="text-center mt-auto">
                        
                        <a class="btn btn-primary font w-100 mt-3" href="{{ route('investments.create') }}">
                        Create Investment
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection