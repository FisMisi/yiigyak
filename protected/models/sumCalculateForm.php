<?php

class sumCalculateForm extends CFormModel {

    public $szam1;
    public $szam2;
    public $operator;
    public $egyszeru;
    public $mas;


    public function rules() {
        return array(
            array('szam1, szam2, operator', 'required', 'message' => 'Nincs kitöltve a qurva mező'),
            array('szam1, szam2', 'numerical', 'message' => 'Számot kérek!!'),
            array('szam1, szam2', 'numerical', 'max' => 1000, 'tooBig' => 'Túl nagy a szám'),
            array('egyszeru','validateRadio'),
            array('mas','validateMas'),
            //array('operator', 'in', 'range' => array('+','-','*','/'), 'message' => 'Csak szorzas,osztas,osszeadás,kivonás lehet'),
        );
    }

    public function validateRadio()
    {
        if($this->operator == '3' && isset($this->egyszeru))
        {
            $this->addError('egyszeru', 'Összeadni vagy kivonni akarsz???????!');
        }

    }

    public function validateMas()
    {
        if($this->operator == '4' && isset($this->mas))
        {
            $this->addError('mas', 'Mondasz mást vagy mi lesz???????!');
        }

    }


    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels() {
        return array(
            'szam1' => 'Number One',
            'szam2' => 'Number Two',
            'operator' => 'Operator'
        );
    }

}
