<?php
/**
 * Created by PhpStorm.
 * User: amoydavid
 * Date: 2018/1/4
 * Time: 下午1:29
 */

namespace amoydavid\Yii2LockableQuery;


class Query extends \yii\db\Query
{
    public $forUpdate = false;


    /**
     * Creates a new Query object and copies its property values from an existing one.
     * The properties being copies are the ones to be used by query builders.
     * @param Query $from the source query object
     * @param $forUpdate
     * @return Query the new Query object
     */
    public static function create($from, $forUpdate = false)
    {
        return new self([
            'where' => $from->where,
            'limit' => $from->limit,
            'offset' => $from->offset,
            'orderBy' => $from->orderBy,
            'indexBy' => $from->indexBy,
            'select' => $from->select,
            'selectOption' => $from->selectOption,
            'distinct' => $from->distinct,
            'from' => $from->from,
            'groupBy' => $from->groupBy,
            'join' => $from->join,
            'having' => $from->having,
            'union' => $from->union,
            'params' => $from->params,
            'forUpdate'=> $forUpdate,
        ]);
    }
}