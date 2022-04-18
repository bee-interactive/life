<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bookmark extends Model
{
    use HasFactory;

    /**
     * Get the board that owns the bookmark.
     */
    public function board()
    {
        return $this->belongsTo(Board::class);
    }
}
