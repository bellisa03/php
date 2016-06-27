<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $service->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Outputs'), ['controller' => 'Outputs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Output'), ['controller' => 'Outputs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="services form large-9 medium-8 columns content">
    <?= $this->Form->create($service) ?>
    <fieldset>
        <legend><?= __('Edit Service') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('version');
            echo $this->Form->input('status');
            echo $this->Form->input('category');
            echo $this->Form->input('category_description');
            echo $this->Form->input('goal');
            echo $this->Form->input('description');
            echo $this->Form->input('excluded_elements');
            echo $this->Form->input('prerequisite');
            echo $this->Form->input('contact');
            echo $this->Form->input('cost');
            echo $this->Form->input('starting_timeline');
            echo $this->Form->input('working_timeline');
            echo $this->Form->input('consultancy_timeline');
            echo $this->Form->input('security_marging');
            echo $this->Form->input('realisation_timeline');
            echo $this->Form->input('timeline_notes');
            echo $this->Form->input('internal_hr');
            echo $this->Form->input('consultancy_cost');
            echo $this->Form->input('consultant');
            echo $this->Form->input('procedure_access');
            echo $this->Form->input('head_agent');
            echo $this->Form->input('sup_head_agents');
            echo $this->Form->input('procedure_summary');
            echo $this->Form->input('regional_policy');
            echo $this->Form->input('service_activation');
            echo $this->Form->input('id_1');
            echo $this->Form->input('outputs._ids', ['options' => $outputs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
