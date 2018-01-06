<?php
/**
 * Created by PhpStorm.
 * User: amoydavid
 * Date: 2017/11/25
 * Time: 上午11:09
 */

namespace amoydavid\Yii2LockableQuery;

use Yii;

class ActiveRecord extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     * @return ActiveQuery|object
     */
    public static function find()
    {
        return Yii::createObject(ActiveQuery::className(), [get_called_class()]);
    }
}