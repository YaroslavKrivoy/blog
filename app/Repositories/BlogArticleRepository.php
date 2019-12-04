<?php

namespace App\Repositories;

use App\Models\BlogArticle;
use App\Repositories\BaseRepository;

/**
 * Class BlogArticleRepository
 * @package App\Repositories
 * @version December 4, 2019, 6:22 pm UTC
*/

class BlogArticleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BlogArticle::class;
    }
}
