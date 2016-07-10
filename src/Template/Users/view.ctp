<nav role="navigation" style="padding-bottom: 30px">
    <ul class="nav nav-pills">
        <li role="presentation"><?= $this->Html->link(__('Modifier l\'utilisateur'), ['action' => 'edit', $user->id]) ?> </li>
        <li role="presentation"><?= $this->Form->postLink(__('Supprimer l\'utilisateur'), ['action' => 'delete', $user->id], ['confirm' => __('Etes-vous sûr de vouloir supprimer l\'utilisateur # {0}?', $user->id)]) ?> </li>
        <li role="presentation"><?= $this->Html->link(__('Liste des utilisateurs'), ['action' => 'index']) ?> </li>
        <li role="presentation"><?= $this->Html->link(__('Nouvel utilisateur'), ['action' => 'add']) ?> </li>
    </ul>
</nav>

<div class="users view large-9 medium-8 columns content">
    <h3><?= __('Fiche utilisateur') ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Login') ?></th>
            <td><?= h($user->login) ?></td>
        </tr>
        <tr>
            <th><?= __('Mot de passe') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Identifiant') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Roles') ?></th>
            <td><?= h($role) ?></td>

        </tr>
    </table>
</div>