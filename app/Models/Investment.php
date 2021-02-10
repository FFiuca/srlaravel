<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $table = 'investments';
    protected $fillable = [
        'title',
        'investment_code',
        'image',
        'description',
       ];
}
