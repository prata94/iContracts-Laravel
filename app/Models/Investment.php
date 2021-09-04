<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    protected $fillable = ['investment_name','description','capital_invested','investment_type','date_of_investment','expected_return','completed'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
