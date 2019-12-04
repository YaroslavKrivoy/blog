<?php

namespace App\Repositories;

use App\Models\BlogComment;
use App\Repositories\BaseRepository;

/**
 * Class BlogCommentRepository
 * @package App\Repositories
 * @version December 4, 2019, 5:54 pm UTC
*/

class BlogCommentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'article_id',
        'description'
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
        return BlogComment::class;
    }
}
