<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Agent'), ['action' => 'edit', $agent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agent'), ['action' => 'delete', $agent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Agents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agent'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="agents view large-9 medium-8 columns content">
    <h3><?= h($agent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Lastname') ?></th>
            <td><?= h($agent->lastname) ?></td>
        </tr>
        <tr>
            <th><?= __('Firstname') ?></th>
            <td><?= h($agent->firstname) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($agent->id) ?></td>
        </tr>
    </table>
</div>
