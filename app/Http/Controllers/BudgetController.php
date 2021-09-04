<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;
use App\Http\Requests\SetBudgetRequest;
use App\Http\Requests\UpdateBudgetRequest;

class BudgetController extends Controller
{
   public function create()
   {
       return view("budget.create");
   }

   public function store(Request $request)
    {
        $user = auth()->user();

        $newBudget = $user->budget()->create($request->all());
        // $newBudget = Budget::create( $request->all());

        $request->session()->flash('success','The Budget has been set');

        return redirect()->route('investments.index');
    }

    public function show( $id )
    {
        $budget = Budget::find($id);

        return view('budget.show',['budget' => $budget]);
    }

    public function edit($id)
    {
        $budget = Budget::find($id);
 
        return view('budget.edit', ['budget' => $budget]);
    }

    public function update(UpdateBudgetRequest $request, $id)
    {
        $budget = Budget::find($id);

        $budget->update($request->all());

        $request->session()->flash('success', 'The budget has been updated');

        return redirect()->route('budget.show', $id);
    }

}
