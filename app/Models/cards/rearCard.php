<?php

namespace App\Models\Cards;

class RearCard extends Card {
    protected $table = 'back_cards'; // table for back cards
    protected $fillable = ['title', 'description', 'image_url'];
}

