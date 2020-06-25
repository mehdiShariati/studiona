<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Portfolio;

class Category_portfolio extends Model
{
    protected $guarded=[];



    public function Portfolios()
    {
      return  $this->hasMany(Portfolio::class);
    }
}
