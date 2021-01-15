<?php

namespace tahayldz\Sikayet\models;

/**
 * This is the ActiveQuery class for [[SikayetTurleri]].
 *
 * @see SikayetTurleri
 */
class SikayetTurleriQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return SikayetTurleri[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return SikayetTurleri|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
