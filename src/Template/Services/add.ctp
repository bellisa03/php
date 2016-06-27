<nav role="navigation" style="padding-bottom: 30px">
    <ul class="nav nav-pills">
        <li role="presentation"><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?></li>
        <li role="presentation"><?= $this->Html->link(__('List Outputs'), ['controller' => 'Outputs', 'action' => 'index']) ?></li>
        <li role="presentation"><?= $this->Html->link(__('New Output'), ['controller' => 'Outputs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="form-group" style="padding-bottom: 30px">
    <?= $this->Form->create($service) ?>
    <fieldset>
        <legend><?= __('Add Service') ?></legend>
        <?php
            echo $this->Form->input('title',['class'=>'form-control','label'=>'Titre']);
            echo $this->Form->input('version',['class'=>'form-control','label'=>'Version']);

        //je remplace cette ligne par le mienne :)
         //   echo $this->Form->input('status',['class'=>'form-control','label' => 'Statut','type' => 'select','options'=> $statuts]);
        // tu trouveras tous les helper de $this->Form ici http://book.cakephp.org/3.0/fr/views/helpers/form.html
            echo $this->Form->label('Statut');
            echo $this->Form->select('status', $status, ['class' => 'form-control']);

            echo $this->Form->input('category',['class'=>'form-control', 'label'=>'Catégorie']);
            echo $this->Form->input('category_description',['class'=>'form-control', 'label'=>'Description de catégorie']);
            echo $this->Form->input('goal',['class'=>'form-control', 'label'=>'Contexte']);
            echo $this->Form->input('description',['class'=>'form-control', 'label'=>'Description du service']);
            echo $this->Form->input('excluded_elements',['class'=>'form-control', 'label'=>'Eléments exclus du périmètre']);
            echo $this->Form->input('prerequisite',['class'=>'form-control', 'label'=>'Prérequis']);
            echo $this->Form->input('contact',['class'=>'form-control', 'label'=>'Contact général']);
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


            echo $this->Form->input('id_1');
            echo $this->Form->input('outputs._ids', ['options' => $outputs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
