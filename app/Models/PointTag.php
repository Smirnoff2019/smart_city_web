<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PointTag extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'point_tag';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['point_id', 'tag_id'];
}
