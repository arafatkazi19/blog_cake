<?php echo $this->Form->create(); ?>

    <?= $this->form->control('username',['type'=>'text','required']) ?>
    <?= $this->form->control('password',['type'=>'password','required']) ?>
    <?= $this->form->submit() ?>

<?php echo $this->Form->end(); ?>




