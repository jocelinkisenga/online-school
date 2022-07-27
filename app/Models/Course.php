<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use App\Models\Chapter;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','confirmed','title','description','photo','categorie_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categorie(){
        return $this->belongsTo(Category::class);
    }

    public function chapters(){
        return $this->hasMany(Chapter::class);
    }
}
