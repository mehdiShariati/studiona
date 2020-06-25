<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category_portfolio;
class Portfolio extends Model
{
protected $guarded=[];


    public function Category()
    {
   return $this->belongsTo(Category_portfolio::class);
    }
}
