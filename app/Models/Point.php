<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'points';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['comment', 'image', 'latitude', 'longitude', 'type'];
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [''];

    /**
     * @return BelongsTo
     */
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'point_tag', 'point_id', 'tag_id');
    }
}
