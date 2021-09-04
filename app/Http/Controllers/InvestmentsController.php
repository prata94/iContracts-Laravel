<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Illuminate\Http\Request;
use App\Http\Requests\CreateInvestmentRequest;
use App\Http\Requests\UpdateInvestmentRequest;
use App\Models\Budget;

class InvestmentsController extends Controller
{   
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $user = auth()->user();
        
        if($request->has('search'))
        {
            $search = $request->search;
            $investments = $user->investments()->where('investment_name','LIKE',"%{$search}%")->paginate(3);
        }else
        {
            $investments = $user->investments()->paginate(3); 
        }

        $investment_sum = Investment::where('user_id', $user->id)->get()->sum('capital_invested');
        
        $budget = $user->budget;

        $username = $user->name;

        if($budget === null)
        {
            return redirect()->route('budget.create');
        }else
        {
            $final_budget = $budget['value'] - $investment_sum;
            return view('investments.index', 
            [
                'investments' => $investments,
                'username' => $username, 
                'investment_sum' => $investment_sum, 
                'final_budget' => $final_budget,
                'budget' => $budget
            ]);
        }

    }

    public function create()
    {
        return view("investments.create");
    }

    public function show( $id )
    {
        $investment = Investment::find($id);

        return view('investments.show',['investment' => $investment]);
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        // $newInvestment = Investment::create( $request->all() );
        $newInvestment = $user->investments()->create( $request->all());

        $request->session()->flash('success','The investment was created');

        return redirect()->route('investments.index');
    }

    public function edit($id)
    {
        $investment = Investment::find($id);
 
        return view('investments.edit', ['investment' => $investment]);
    }

    public function update(UpdateInvestmentRequest $request, $id)
    {
        $investment = Investment::find($id);

        $investment->update($request->all());

        $request->session()->flash('success', 'The investment was updated');

        return redirect()->route('investments.show', $id);
    }

    public function destroy(Request $request, $id)
    {
        $investment = Investment::find($id);

        $investment->delete();

        $request->session()->flash('success', 'The investment was deleted');

        return redirect()->route('investments.index');
    }

}
