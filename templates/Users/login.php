<?php echo $this->Form->create(); ?>

    <?php echo $this->form->control('username',['type'=>'text','required']) ?>
    <?php echo $this->form->control('password',['type'=>'password','required']) ?>
<?php


echo $this->Form->input('remember_me', array('type' => 'checkbox', 'checked' ,  'label' => __('Remember Me')));

?>

<!--    --><?php //echo $this->Form->control('remember_me', ['type' => 'checkbox']);?>
<?= $this->form->submit() ?>

<?php echo $this->Form->end(); ?>




