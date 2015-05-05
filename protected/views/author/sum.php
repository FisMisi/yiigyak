<?php
$this->pageTitle = Yii::app()->name . ' - Contact Us';
$this->breadcrumbs = array(
    'Register2 form test',
);
?>

<h1>Calculate test</h1>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'sum-calculate-form',
        'enableClientValidation' => false,
    ));
    ?>

    <p class="note">Mezők <span class="required">*</span> jelölve kötelező.</p>

    <div class="row">
        <?php echo $form->labelEx($model, 'szam1'); ?>
        <?php echo $form->textField($model, 'szam1'); ?>
        <?php echo $form->error($model, 'szam1'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'szam2'); ?>
        <?php echo $form->textField($model, 'szam2'); ?>
        <?php echo $form->error($model, 'szam2'); ?>
    </div>


    <div id="prizes">
        <h2>Milyen műveletet akarsz végre hajtani</h2>
        <?php echo $form->error($model, 'operator'); ?>
        <div class="prize">
         <?php echo $form->radioButton($model, 'operator', array('uncheckValue'=>null,'value' => 1)); ?>Szorozni akarok
        </div>
        <div class="prize">
          <?php echo $form->radioButton($model, 'operator', array('uncheckValue'=>null,'value' => 2)); ?>Osztani akarok vazzz
        </div>
        <div class="prize">
          <?php echo $form->radioButton($model, 'operator', array('uncheckValue'=>null,'value' => 3)); ?>Összeadni vagy kivonni akrok csak<br />
             Leírom hogy mit akarok: <?php echo $form->textField($model, 'egyszeru'); ?>
            <?php echo $form->error($model, 'egyszeru'); ?>
        </div>
        <div class="prize">
          <?php echo $form->radioButton($model, 'operator', array('uncheckValue'=>null,'value' => 4)); ?>Mást akarok<br />
            Leírom hogy mit akarok: <?php echo $form->textField($model, 'mas'); ?>
            <?php echo $form->error($model, 'mas'); ?>
        </div>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton('Elküld'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->