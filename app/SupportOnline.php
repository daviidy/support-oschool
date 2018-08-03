<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportOnline extends Model
{
    protected $fillable = ['date_coaching', 'formation', 'email', 'nom', 'prenoms', 'tel'];
}
