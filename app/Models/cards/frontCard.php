<?php

namespace App\Models\Cards;

class FrontCard extends Card {
    protected $table = 'front_cards'; // table for back cards
    protected $fillable = ['title', 'description', 'image_url'];
}

