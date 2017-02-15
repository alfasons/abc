<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Principals]].
 *
 * @see Principals
 */
class PrincipalsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Principals[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Principals|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
