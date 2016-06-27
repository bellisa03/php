<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Agents'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="agents form large-9 medium-8 columns content">
    <?= $this->Form->create($agent) ?>
    <fieldset>
        <legend><?= __('Edit Agent') ?></legend>
        <?php
            echo $this->Form->input('lastname');
            echo $this->Form->input('firstname');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
