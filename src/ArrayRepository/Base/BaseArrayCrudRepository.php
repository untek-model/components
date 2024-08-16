<?php

namespace Untek\Model\Components\ArrayRepository\Base;

use Untek\Model\Components\ArrayRepository\Traits\ArrayCrudRepositoryTrait;
use Untek\Model\Query\Entities\Query;
use Untek\Model\Shared\Traits\ForgeQueryTrait;
use Untek\Model\Repository\Base\BaseRepository;
use Untek\Model\Repository\Interfaces\CrudRepositoryInterface;

abstract class BaseArrayCrudRepository extends BaseRepository //implements CrudRepositoryInterface
{

    use ArrayCrudRepositoryTrait;
//    use ForgeQueryTrait;

    protected function forgeQuery(Query $query = null): Query
    {
        $query = Query::forge($query);
//        $this->dispatchQueryEvent($query, EventEnum::BEFORE_FORGE_QUERY);
        return $query;
    }
}
