<?php

namespace amoydavid\Yii2LockableQuery\mssql;


class Schema extends \yii\db\mssql\Schema
{
    public function createQueryBuilder()
    {
        return new QueryBuilder($this->db);
    }
}
