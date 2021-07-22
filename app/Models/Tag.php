<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tags';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['title'];
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [''];

    /**
     * @return BelongsToMany
     */
    public function points()
    {
        return $this->belongsToMany('App\Models\Point', 'point_tag', 'tag_id', 'point_id');
    }
}
