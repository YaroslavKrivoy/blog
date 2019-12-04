<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BlogTag
 * @package App\Models
 * @version December 4, 2019, 5:49 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection blogArticles
 * @property string title
 */
class BlogTag extends Model
{

    public $table = 'blog_tags';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function blogArticles()
    {
        return $this->hasMany(\App\Models\BlogArticle::class, 'tag_id');
    }
}
