Yii2 Lockable ActiveQuery
---------------------------

This package allows you to use pessimistic locking (select for update) when you work with ActiveRecord Query.

## Installation ##

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

    php composer.phar require --prefer-dist amoydavid/yii2lockable-query "*"

or add

    "amoydavid/yii2lockable-query": "*"

to the `require` section of your composer.json.

## Usage ##

Extend your ActiveRecord class via \amoydavid\Yii2LockableQuery\ActiveRecord

    /**
     * Class Sample
     * @package common\models
     *
     */
    class Sample extends \amoydavid\Yii2LockableQuery\ActiveRecord { ... }
    
Use model locks in transaction.

    $dbTransaction = $model->getDb()->beginTransaction();
    try {
        $model = Sample::find()->where(['id'=>1])->forUpdate()->one();
        $dbTransaction->commit();
    } catch(\Exception $e) {
        $dbTransaction->rollBack();
        throw $e;
    }
    
## Licence ##

MIT
    
## Links ##

* [Composer package](https://packagist.org/packages/amoydavid/yii2lockable-query)
* [Locking in MySQL InnoDB](https://dev.mysql.com/doc/refman/5.7/en/innodb-locking-reads.html)