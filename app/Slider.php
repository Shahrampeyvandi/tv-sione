<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  protected $guarded = ['id'];
  protected $with = 'post';

  public function post()
  {
    return $this->belongsTo(Post::class);
  }

  public static function withCategory($name)
  {
    $posts = Post::whereHas('categories', function ($q) use ($name) {
      $q->where('latin',$name);
    })->pluck('id');
    
    return $sliders = static::whereIn('post_id', $posts)->get();
  }

  public static function LastSliders($type)
  {
     
    $sliders = static::whereHas('post',function($q)use($type){
      $q->where('type',$type);
    })->inRandomOrder()->first();
           

    if($sliders){
       return $sliders;
    }else{
     return static::inRandomOrder()->first();
    }
     
  }
}
