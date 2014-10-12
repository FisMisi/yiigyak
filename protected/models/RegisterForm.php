<?php

class RegisterForm extends CFormModel
{
	public $name;
	public $email;
        public $eletkor;
        public $nemzet;

	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('name','required','message'=>'Nincs kitöltve a qurva mező'),
                        array('eletkor','numerical','message'=>'Számot kérek!!'),
                        array('eletkor','numerical','max'=>10,'tooBig'=>'Túl nagy a szám'),
                        array('nemzet','in','range'=>array('en','hu'),'message'=>'Csak en vagy hu lehet'),
			// email has to be a valid email address
			array('email','email','message'=>'Ez nem email baszki')
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'name'=>'Név',
                        'email'=>'Email',
                        'eletkor'=>'Életkor',
                        'nemzet'=>'Nemzetiség'
		);
	}
}

