<?php

namespace tahayldz\Sikayet\models;

/**
 * This is the ActiveQuery class for [[Sikayet]].
 *
 * @see Sikayet
 */
class SikayetQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Sikayet[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Sikayet|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
