<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Tour extends Model
{
    //
    protected $table = 'tours';
	protected $fillable = [
        'name', 'river_id', 'url', 'visit_count', 'map_url', 'group_size', 'available_size', 'price', 'type','departure_date', 'start_date', 'end_date'
    ];
    public function info()
    {
    	return $this->morphMany('App\Contentable', 'contentable');
    }

    public function river()
    {
    	return $this->belongsTo('App\River');
    }

    public function photos()
    {
        return $this->belongsToMany('App\Photo', 'tour_photos', 'tour_id', 'photo_id')->withPivot('caption')->withTimeStamps();
    }
}