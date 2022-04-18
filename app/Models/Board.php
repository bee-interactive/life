<?php

namespace App\Models;

use App\Models\Bookmark;
use App\Models\Scopes\UserScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Board extends Model
{
    use HasFactory;

    public $guarded = [];

    public static function uuid(string $uuid): self
    {
        return static::where('uuid', $uuid)->first();
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new UserScope);
    }

    /**
     * Get the user that owns the board.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the board path
     */
    public function path()
    {
        return route('boards.edit', $this);
    }

    /**
     * Get the bookmarks that belongs to this board.
     */
    public function bookmarks() : HasMany
    {
        return $this->hasMany(Bookmark::class);
    }

    public function countBookmarks()
    {
        if ($this->bookmarks_count > 1) {
            return $this->bookmarks_count . ' elements';
        } elseif ($this->bookmarks_count == 1) {
            return $this->bookmarks_count . ' element';
        }

        return 'No elements';
    }
}
