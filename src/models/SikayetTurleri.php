<?php

namespace tahayldz\Sikayet\models;

use Yii;

/**
 * This is the model class for table "sikayetTurleri".
 *
 * @property string $sikayetTur
 *
 * @property Sikayet[] $sikayets
 */
class SikayetTurleri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sikayetTurleri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sikayetTur'], 'required'],
            [['sikayetTur'], 'string', 'max' => 50],
            [['sikayetTur'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sikayetTur' => 'Sikayet Tur',
        ];
    }

    /**
     * Gets query for [[Sikayets]].
     *
     * @return \yii\db\ActiveQuery|SikayetQuery
     */
    public function getSikayets()
    {
        return $this->hasMany(Sikayet::className(), ['sikayetTuru' => 'sikayetTur']);
    }

    /**
     * {@inheritdoc}
     * @return SikayetTurleriQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SikayetTurleriQuery(get_called_class());
    }
}
