<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $fillable = [
        'title',
        'content',
        'published_at'
    ];
    ///set the fieldname then Attribute
    public function setPublishedAtAttribute($date){
/*        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);*/
        $this->attributes['published_at'] = Carbon::parse($date);
    }


    public function scopePublished($query){
        $query->where('published_at','<=',Carbon::now());
    }

    public function scopeUnpublished($query){
        $query->where('published_at','>=',Carbon::now());
    }
}
