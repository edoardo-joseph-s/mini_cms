<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
    ];

    
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function getAllChildrenIds(): array
    {
        $children = $this->children()->with('children:id,parent_id')->get();
        $childrenIds = $children->pluck('id')->toArray();
        foreach ($children as $child) {
            $childrenIds = array_merge($childrenIds, $child->getAllChildrenIds());
        }
        return $childrenIds;
    }
}
