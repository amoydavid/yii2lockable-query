<?php

namespace amoydavid\Yii2LockableQuery\mysql;


class Schema extends \yii\db\mysql\Schema
{
    public function createQueryBuilder()
    {
        return new QueryBuilder($this->db);
    }
}
