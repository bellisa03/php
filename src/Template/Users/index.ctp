<nav role="navigation" style="padding-bottom: 30px">
    <ul class="nav nav-pills">
        <li role="presentation"><?= $this->Html->link(__('Nouvel utilisateur'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('login') ?></th>
            <th><?= $this->Paginator->sort('mot de passe') ?></th>
            <th><?= $this->Paginator->sort('roles') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->login) ?></td>
                <td><?= h($user->password) ?></td>

                <td> <?php echo ($user->role)?$user->role->title:'null';;
                    ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Afficher'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $user->id], ['confirm' => __('Etes-vous sûr de vouloir supprimer l\'utilisateur # {0}?', $user->id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('précédent')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('suivant') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
