<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = ['course_id','title','description','cover'];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
