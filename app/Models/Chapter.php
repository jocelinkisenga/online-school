<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\Course;
use Illuminate\Support\Str;


class Chapter extends Model
{
    use HasFactory;

    protected $fillable = ['course_id','title','description','cover'];

    public function course(){
        return $this->belongsTo(Course::class);
    }

   public function getreadingTime($text, $nOfw = 200){
    $word_count = str_word_count(strip_tags($text));
    $minutes = (int) floor($word_count/$nOfw);
    $seconds = (int) floor($word_count%$nOfw / ($nOfw/60));
    if($minutes === 0){
        return $seconds." ".Str::of('second')->plural($seconds);
    }
    else {
        return $minutes." ".Str::of('minute')->plural($minutes);
    }
   }

   public function readingTime():Attribute {
    return Attribute::make(function($value,$attributes)
        {
            $time = $this->getreadingTime($attributes['description']);
            return $time;
        });
   }

}
