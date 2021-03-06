<?php

/**
 * This is the model class for table "TataTertib".
 *
 * The followings are the available columns in table 'TataTertib':
 * @property integer $id
 * @property string $edited
 * @property string $reset
 */
class TataTertib extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    /*public function tableName()
    {
        return 'quiz';
    }*/
    protected $tbl_prefix = null;
    public function tableName()
    {
        if ($this->tbl_prefix === null)
        {
            // Fetch prefix
            $this->tbl_prefix = Yii::app()->params['tablePrefix'];
        }

        // Prepend prefix, call our new method
        return ($this->tbl_prefix . $this->_tableName());
        //return 'absensi';
    }

    protected function _tableName()
    {
        // Call the original method for our table name stuff
        return 'tata_tertib';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, edited, reset', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
//            'detail'=>array(SELF::BELONGS_TO, 'ExamRoom', 'id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'edited' => 'edited',
            'reset' => 'reset'
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('edited',$this->edited);
        $criteria->compare('reset',$this->reset);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Quiz the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function beforeSave()
    {
//        if ($this->isNewRecord) {
//            $this->created_at = new CDbExpression('NOW()');
//            $this->updated_at = new CDbExpression('NOW()');
//            $this->created_by = Yii::app()->user->id;
//        } else {
//            $this->updated_at = new CDbExpression('NOW()');
//            $this->updated_by = Yii::app()->user->id;
//        }

        return parent::beforeSave();
    }
}
