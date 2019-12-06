<?php

namespace amoydavid\Yii2LockableQuery\mysql;

use amoydavid\Yii2LockableQuery\Query;
use amoydavid\Yii2LockableQuery\ActiveQuery;


/**
 * QueryBuilder is the query builder for MySQL databases.
 *
 * @author amoydavid <liuw@liuw.net>
 */
class QueryBuilder extends \yii\db\mysql\QueryBuilder
{

    /**
     * @param \yii\db\Query $query
     * @param array $params
     * @return array
     */
    public function build($query, $params = [])
    {
        list($sql , $params) = parent::build($query, $params);

        if(($query instanceof Query || $query instanceof ActiveQuery)&& $query->forUpdate) {
            $sql .= ' FOR UPDATE';
        }

        return [$sql, $params];
    }
}
