<nav role="navigation">
    <ul class="nav nav-pills">
        <li role="presentation" class="active"><?= __('Actions') ?></li>
        <li role="presentation"><?= $this->Html->link(__('New Service'), ['action' => 'add']) ?></li>
        <li role="presentation"><?= $this->Html->link(__('List Outputs'), ['controller' => 'Outputs', 'action' => 'index']) ?></li>
        <li role="presentation"><?= $this->Html->link(__('New Output'), ['controller' => 'Outputs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<!--<ul class="nav nav-pills">-->
<!--    <li role="presentation" class="active"><a href="#">Home</a></li>-->
<!--    <li role="presentation"><a href="#">Profile</a></li>-->
<!--    <li role="presentation"><a href="#">Messages</a></li>-->
<!--</ul>-->
<div class="services index large-9 medium-8 columns content">
    <h3><?= __('Services') ?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('version') ?></th>
                <th><?= $this->Paginator->sort('updated') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('category') ?></th>
                <th><?= $this->Paginator->sort('excluded_elements') ?></th>
                <th><?= $this->Paginator->sort('prerequisite') ?></th>
                <th><?= $this->Paginator->sort('contact') ?></th>
                <th><?= $this->Paginator->sort('cost') ?></th>
                <th><?= $this->Paginator->sort('starting_timeline') ?></th>
                <th><?= $this->Paginator->sort('working_timeline') ?></th>
                <th><?= $this->Paginator->sort('consultancy_timeline') ?></th>
                <th><?= $this->Paginator->sort('security_marging') ?></th>
                <th><?= $this->Paginator->sort('realisation_timeline') ?></th>
                <th><?= $this->Paginator->sort('internal_hr') ?></th>
                <th><?= $this->Paginator->sort('consultancy_cost') ?></th>
                <th><?= $this->Paginator->sort('head_agent') ?></th>
                <th><?= $this->Paginator->sort('sup_head_agents') ?></th>
                <th><?= $this->Paginator->sort('regional_policy') ?></th>
                <th><?= $this->Paginator->sort('service_activation') ?></th>
                <th><?= $this->Paginator->sort('id_1') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($services as $service): ?>
            <tr>
                <td><?= $this->Number->format($service->id) ?></td>
                <td><?= h($service->title) ?></td>
                <td><?= $this->Number->format($service->version) ?></td>
                <td><?= h($service->updated) ?></td>
                <td><?= $this->Number->format($service->status) ?></td>
                <td><?= $this->Number->format($service->category) ?></td>
                <td><?= h($service->excluded_elements) ?></td>
                <td><?= h($service->prerequisite) ?></td>
                <td><?= h($service->contact) ?></td>
                <td><?= $this->Number->format($service->cost) ?></td>
                <td><?= $this->Number->format($service->starting_timeline) ?></td>
                <td><?= $this->Number->format($service->working_timeline) ?></td>
                <td><?= $this->Number->format($service->consultancy_timeline) ?></td>
                <td><?= $this->Number->format($service->security_marging) ?></td>
                <td><?= $this->Number->format($service->realisation_timeline) ?></td>
                <td><?= h($service->internal_hr) ?></td>
                <td><?= $this->Number->format($service->consultancy_cost) ?></td>
                <td><?= h($service->head_agent) ?></td>
                <td><?= h($service->sup_head_agents) ?></td>
                <td><?= h($service->regional_policy) ?></td>
                <td><?= h($service->service_activation) ?></td>
                <td><?= $this->Number->format($service->id_1) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $service->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
