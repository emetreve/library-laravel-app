<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ["title", "year", 'status'];

    public function authors(): BelongsToMany
    {
        return $this->belongsToMany(Author::class);
    }

    public function scopeFilter($query, $filters)
    {
        if ($filters['search'] ?? null) {

            $searchTerm = '%' . $filters['search'] . '%';

            $query->where(function ($subQuery) use ($searchTerm) {
                $subQuery->where('title', 'like', $searchTerm)
                    ->orWhereHas('authors', function ($authorQuery) use ($searchTerm) {
                        $authorQuery->where('name', 'like', $searchTerm);
                    });
            });
        }
        return $query;
    }
}
