<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Agents'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="agents form large-9 medium-8 columns content">
    <?= $this->Form->create($agent) ?>
    <?= $this->Form->templates($helper) ?>
    <fieldset>
        <legend><?= __('Add Agent') ?></legend>
        <?php
            echo $this->Form->input('lastname');
            echo $this->Form->input('firstname');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
