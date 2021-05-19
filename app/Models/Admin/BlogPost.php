<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug', 'body', 'tag', 'image', 'status', 'user_id', 'is_tranding', 'is_top_views'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
