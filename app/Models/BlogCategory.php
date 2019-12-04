<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BlogCategory
 * @package App\Models
 * @version December 4, 2019, 5:09 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection blogArticles
 * @property integer parent_id
 * @property string categorie_url
 * @property string title
 * @property string description
 */
class BlogCategory extends Model
{


    public $table = 'blog_categories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'parent_id',
        'categorie_url',
        'title',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'parent_id' => 'integer',
        'categorie_url' => 'string',
        'title' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'parent_id' => 'required',
        'categorie_url' => 'required',
        'title' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function blogArticles()
    {
        return $this->hasMany(\App\Models\BlogArticle::class, 'category_id');
    }
}
