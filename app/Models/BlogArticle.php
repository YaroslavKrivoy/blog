<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BlogArticle
 * @package App\Models
 * @version December 4, 2019, 6:22 pm UTC
 *
 * @property \App\Models\BlogCategory category
 * @property \App\Models\BlogTag tag
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection blogComments
 * @property integer category_id
 * @property integer user_id
 * @property integer tag_id
 * @property string title
 * @property string short_description
 * @property string article_url
 * @property boolean is_published
 * @property string|\Carbon\Carbon published_at
 */
class BlogArticle extends Model
{
    public $timestamps = false;

    public $table = 'blog_articles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'category_id',
        'user_id',
        'tag_id',
        'title',
        'short_description',
        'article_url',
        'is_published',
        'published_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'user_id' => 'integer',
        'tag_id' => 'integer',
        'title' => 'string',
        'short_description' => 'string',
        'article_url' => 'string',
        'is_published' => 'boolean',
        'published_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_id' => 'required',
        'user_id' => 'required',
        'tag_id' => 'required',
        'title' => 'required',
        'short_description' => 'required',
        'article_url' => 'required',
        'is_published' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\BlogCategory::class, 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tag()
    {
        return $this->belongsTo(\App\Models\BlogTag::class, 'tag_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function blogComments()
    {
        return $this->hasMany(\App\Models\BlogComment::class, 'article_id');
    }
}
