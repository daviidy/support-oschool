<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportTotal extends Model
{
    protected $fillable = ['date_coaching', 'formation', 'email', 'nom', 'prenoms', 'tel'];
}
