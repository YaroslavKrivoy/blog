<?php

namespace App\Repositories;

use App\Models\BlogTag;
use App\Repositories\BaseRepository;

/**
 * Class BlogTagRepository
 * @package App\Repositories
 * @version December 4, 2019, 5:49 pm UTC
*/

class BlogTagRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
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
        return BlogTag::class;
    }
}
