<?php

class ArticleController extends Controller
{
        public $news = array('1'=>array(
                                'id'=>1,
                                'cim'=>'Magyar éremeső a szakmunkás Európa-bajnokságon',
                                'leiras'=>'Húsz érmet nyert Magyarország a szakmák Európa-bajnokságán, a Lille-ben rendezett EuroSkills versenyen.',
                                'datum'=>'2014-marc-1',
                                'body'=>'Az autóipari biztonsági berendezéseket, egyebek mellett légzsákokat is gyártó cég ezer új munkahelyet létesít a borsodi megyeszékhelyen, több mint 20 milliárd forintos beruházásával, ez Miskolcon az elmúlt öt év legnagyobb zöldmezős beruházása. A japán társaság elsősorban autóipari beszállítással foglalkozó multinacionális cég, amely a világ 20 országban üzemeltet különböző gyártórészlegeket, Magyarországon eddig nem volt jelen.
                                        A társaságnak összesen 55 gyára van a világ több országában, alkalmazottainak száma meghaladja a 36 ezret.',
                                'forras'=>'Mti'
                                ),
                            '2'=>array(
                                'id'=>2,
                                'cim'=>'500 fiatalnak adnak munkát',
                                'leiras'=>'Két diákmunkás szövetség és az egyik áruházlánc közös programot indít: pályakezdő fiatalok elhelyezkedését segítik.',
                                'datum'=>'2014-jun-11',
                                'body'=>'Az autóipari biztonsági berendezéseket, egyebek mellett légzsákokat is gyártó cég ezer új munkahelyet létesít a borsodi megyeszékhelyen, több mint 20 milliárd forintos beruházásával, ez Miskolcon az elmúlt öt év legnagyobb zöldmezős beruházása. A japán társaság elsősorban autóipari beszállítással foglalkozó multinacionális cég, amely a világ 20 országban üzemeltet különböző gyártórészlegeket, Magyarországon eddig nem volt jelen.
                                        A társaságnak összesen 55 gyára van a világ több országában, alkalmazottainak száma meghaladja a 36 ezret.',
                                'forras'=>'Viva'
                                ),
                            '3'=>array(
                                'id'=>3,
                                'cim'=>'Hamarosan elkészül a Takata-gyár',
                                'leiras'=>'A japán Takata-konszern Miskolcon épülő gyárában hamarosan megkezdődhet a termelés. Az üzem még épül, de még októberben átadják.',
                                'datum'=>'2013-apr-22',
                                'body'=>'Az autóipari biztonsági berendezéseket, egyebek mellett légzsákokat is gyártó cég ezer új munkahelyet létesít a borsodi megyeszékhelyen, több mint 20 milliárd forintos beruházásával, ez Miskolcon az elmúlt öt év legnagyobb zöldmezős beruházása. A japán társaság elsősorban autóipari beszállítással foglalkozó multinacionális cég, amely a világ 20 országban üzemeltet különböző gyártórészlegeket, Magyarországon eddig nem volt jelen.
                                        A társaságnak összesen 55 gyára van a világ több országában, alkalmazottainak száma meghaladja a 36 ezret.',
                                'forras'=>'RTL'
                                ),
                    );

        public $kategoriak=array(
            '1'=>array(
                'id' =>1,
                'nev'=>'Munkajog'
                ),
            '2'=>array(
                'id' =>2,
                'nev'=>'Paraszt főnökök'
                ),
            '3'=>array(
                'id' =>3,
                'nev'=>'Teknikák'
                ),
            '4'=>array(
                'id' =>4,
                'nev'=>'Önéletrajzok'
                ),
            '5'=>array(
                'id' =>5,
                'nev'=>'Interjú'
                )
        );

	public function actionIndex()
	{

//               $dataProvider=new CActiveDataProvider('Author',array(
//                          'criteria'=>array(
//                                        'order'=>'created_at DESC'),
//                           'pagination'=>array(
//				'pageSize'=>2,)));
//
//                        var_dump($dataProvider);
//                        exit();
//		$this->render('index',array(
//			'data'=>$dataProvider,
//		));
                $kateg_id=1;
                if(isset($_GET['kateg_id']))
                {
                    $kateg_id = $_GET['kateg_id'];
                }


		$this->render('index',array(
                    'datas'=>$this->news,
                    'kategoriak'=>$this->kategoriak,
                    'kateg_id'=>$kateg_id
                ));
	}


        public function loadModel($id)
	{
		$model=Author::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

        public function actionView()
        {

          if(isset($_GET['id'])){

              $id=$_GET['id'];
              $tomb=$this->news[$id];

              $this->render('view',array(
                    'data'=>$tomb
              ));
//                $this->render('view',array(
//			'data'=>$this->loadModel($id),
//		));
          }
        }


}