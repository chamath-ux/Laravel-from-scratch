<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable =['title','body','slug','category_id'];

    protected $with = ['category','author'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false , fn($query,$search)=>

            $query
                ->where('title','like','%'.$search.'%')
                ->with(['category','author'])
        );

        $query->when($filters['category'] ?? false , fn($query,$category)=>

            $query->whereHas('category', fn($query)=>

                $query
                    ->where('slug',$category)
            )
        );

        $query->when($filters['author'] ?? false , fn($query,$author)=>

            $query->whereHas('author', fn($query)=>

                $query
                    ->where('name',$author)
            )
        );
    }
}
