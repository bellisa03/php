<nav role="navigation" style="padding-bottom: 30px">
    <ul class="nav nav-pills">
        <li role="presentation"><?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Etes-vous sûr de vouloir supprimer l\'utilisateur # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Liste des utilisateurs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Modifier l\'utilisateur') ?></legend>
        <?php
            echo $this->Form->input('login');
            echo $this->Form->input('password');
            echo $this->Form->select('id_roles', $roles, ['class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Sauvegarder')) ?>
    <?= $this->Form->end() ?>
</div>
