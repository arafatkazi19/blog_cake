<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $categories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="posts form content">
            <?= $this->Form->create($post) ?>
            <fieldset>
                <legend><?= __('Add Post') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['type' => 'hidden','value'=> $user['id']]);
                    echo $this->Form->control('category_id', ['options' => $categories]);
                    echo $this->Form->control('title');
                    echo $this->Form->control('details');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
