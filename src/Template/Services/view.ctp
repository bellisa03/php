<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Service'), ['action' => 'edit', $service->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Outputs'), ['controller' => 'Outputs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Output'), ['controller' => 'Outputs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="services view large-9 medium-8 columns content">
    <h3><?= h($service->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($service->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Category') ?></th>
            <td><?= $this->Number->format($service->category) ?></td>
        </tr>
        <tr>
            <th><?= __('Excluded Elements') ?></th>
            <td><?= h($service->excluded_elements) ?></td>
        </tr>
        <tr>
            <th><?= __('Prerequisite') ?></th>
            <td><?= h($service->prerequisite) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact') ?></th>
            <td><?= h($service->contact) ?></td>
        </tr>
        <tr>
            <th><?= __('Internal Hr') ?></th>
            <td><?= h($service->internal_hr) ?></td>
        </tr>
        <tr>
            <th><?= __('Head Agent') ?></th>
            <td><?= h($service->head_agent) ?></td>
        </tr>
        <tr>
            <th><?= __('Sup Head Agents') ?></th>
            <td><?= h($service->sup_head_agents) ?></td>
        </tr>
        <tr>
            <th><?= __('Regional Policy') ?></th>
            <td><?= h($service->regional_policy) ?></td>
        </tr>
        <tr>
            <th><?= __('Service Activation') ?></th>
            <td><?= h($service->service_activation) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($service->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Version') ?></th>
            <td><?= $this->Number->format($service->version) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($service->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Cost') ?></th>
            <td><?= $this->Number->format($service->cost) ?></td>
        </tr>
        <tr>
            <th><?= __('Starting Timeline') ?></th>
            <td><?= $this->Number->format($service->starting_timeline) ?></td>
        </tr>
        <tr>
            <th><?= __('Working Timeline') ?></th>
            <td><?= $this->Number->format($service->working_timeline) ?></td>
        </tr>
        <tr>
            <th><?= __('Consultancy Timeline') ?></th>
            <td><?= $this->Number->format($service->consultancy_timeline) ?></td>
        </tr>
        <tr>
            <th><?= __('Security Marging') ?></th>
            <td><?= $this->Number->format($service->security_marging) ?></td>
        </tr>
        <tr>
            <th><?= __('Realisation Timeline') ?></th>
            <td><?= $this->Number->format($service->realisation_timeline) ?></td>
        </tr>
        <tr>
            <th><?= __('Consultancy Cost') ?></th>
            <td><?= $this->Number->format($service->consultancy_cost) ?></td>
        </tr>
        <tr>
            <th><?= __('Id 1') ?></th>
            <td><?= $this->Number->format($service->id_1) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated') ?></th>
            <td><?= h($service->updated) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Category Description') ?></h4>
        <?= $this->Text->autoParagraph(h($service->category_description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Goal') ?></h4>
        <?= $this->Text->autoParagraph(h($service->goal)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($service->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Timeline Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($service->timeline_notes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Consultant') ?></h4>
        <?= $this->Text->autoParagraph(h($service->consultant)); ?>
    </div>
    <div class="row">
        <h4><?= __('Procedure Access') ?></h4>
        <?= $this->Text->autoParagraph(h($service->procedure_access)); ?>
    </div>
    <div class="row">
        <h4><?= __('Procedure Summary') ?></h4>
        <?= $this->Text->autoParagraph(h($service->procedure_summary)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Outputs') ?></h4>
        <?php if (!empty($service->outputs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Format') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($service->outputs as $outputs): ?>
            <tr>
                <td><?= h($outputs->id) ?></td>
                <td><?= h($outputs->format) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Outputs', 'action' => 'view', $outputs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Outputs', 'action' => 'edit', $outputs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Outputs', 'action' => 'delete', $outputs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $outputs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
