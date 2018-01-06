<?php
/**
 * Created by PhpStorm.
 * User: amoydavid
 * Date: 2018/1/4
 * Time: 下午1:29
 */

namespace amoydavid\Yii2LockableQuery;


class ActiveQuery extends \yii\db\ActiveQuery
{
    public $forUpdate = false;

    public function forUpdate()
    {
        $this->forUpdate = true;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function prepare($builder)
    {
        $query = Query::create(parent::prepare($builder), $this->forUpdate);
        return $query;
    }

}