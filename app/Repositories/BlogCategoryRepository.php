<?php

namespace App\Repositories;

use App\Models\BlogCategory;
use App\Repositories\BaseRepository;

/**
 * Class BlogCategoryRepository
 * @package App\Repositories
 * @version December 4, 2019, 5:09 pm UTC
*/

class BlogCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'parent_id',
        'categorie_url',
        'title',
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
        return BlogCategory::class;
    }
}
