<?php

namespace App\Models\Cards;

use Illuminate\Database\Eloquent\Model;

abstract class Card extends Model
{
    protected $guarded = []; // allow mass assignment in child models

    protected $dates = ["created_at", "updated_at"];


    // Common helper method
    public function displayInfo()
    {
        return "Card ID: {$this->id}, created at {$this->created_at->format('Y-m-d')}";
    }
}
