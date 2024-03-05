<?php

namespace App\Repositories;

use App\Models\orderdetail;
use App\Repositories\BaseRepository;

/**
 * Class orderdetailRepository
 * @package App\Repositories
 * @version March 5, 2024, 11:58 am UTC
*/

class orderdetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'productid',
        'orderid',
        'quantity',
        'subtotal'
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
        return orderdetail::class;
    }
}
