<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_data".
 *
 * @property int $id
 * @property string $product_id
 * @property string $box_cod
 * @property string $detail
 * @property int $status
 * @property int $is_gs
 * @property int $is_rma
 * @property string $started_at
 * @property string $packed_at
 * @property string $cycle_time
 *
 * @property SerialnumberData[] $serialnumberDatas
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'box_cod', 'detail', 'status', 'is_gs', 'is_rma', 'cycle_time'], 'required'],
            [['detail', 'cycle_time'], 'string'],
            [['status', 'is_gs', 'is_rma'], 'integer'],
            [['started_at', 'packed_at'], 'safe'],
            [['product_id'], 'string', 'max' => 60],
            [['box_cod'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'box_cod' => 'Box Cod',
            'detail' => 'Detail',
            'status' => 'Status',
            'is_gs' => 'Is Gs',
            'is_rma' => 'Is Rma',
            'started_at' => 'Started At',
            'packed_at' => 'Packed At',
            'cycle_time' => 'Cycle Time',
        ];
    }

    /**
     * Gets query for [[SerialnumberDatas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSerialnumberDatas()
    {
        return $this->hasMany(Serial::className(), ['product_data_id' => 'id']);
    }
}
