<?php
namespace App\Model\Table;

use App\Model\Entity\Service;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Services Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Outputs
 */
class ServicesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('services');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->belongsToMany('Outputs', [
            'foreignKey' => 'service_id',
            'targetForeignKey' => 'output_id',
            'joinTable' => 'services_outputs'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->integer('version')
            ->requirePresence('version', 'create')
            ->notEmpty('version');

        $validator
            ->integer('status')
            ->allowEmpty('status');


        $validator
            ->integer('category')
            ->allowEmpty('category');

        $validator
            ->requirePresence('category_description', 'create')
            ->allowEmpty('category_description');

        $validator
            ->allowEmpty('goal');

        $validator
            ->allowEmpty('description');

        $validator
            ->allowEmpty('excluded_elements');

        $validator
            ->allowEmpty('prerequisite');

        $validator
            ->allowEmpty('contact');

        $validator
            ->decimal('cost')
            ->allowEmpty('cost');

        $validator
            ->numeric('starting_timeline')
            ->allowEmpty('starting_timeline');

        $validator
            ->numeric('working_timeline')
            ->allowEmpty('working_timeline');

        $validator
            ->numeric('consultancy_timeline')
            ->allowEmpty('consultancy_timeline');

        $validator
            ->numeric('security_marging')
            ->allowEmpty('security_marging');

        $validator
            ->numeric('realisation_timeline')
            ->allowEmpty('realisation_timeline');

        $validator
            ->allowEmpty('timeline_notes');

        $validator
            ->allowEmpty('internal_hr');

        $validator
            ->decimal('consultancy_cost')
            ->allowEmpty('consultancy_cost');

        $validator
            ->allowEmpty('consultant');

        $validator
            ->allowEmpty('procedure_access');

        $validator
            ->allowEmpty('head_agent');

        $validator
            ->allowEmpty('sup_head_agents');

        $validator
            ->allowEmpty('procedure_summary');

        $validator
            ->allowEmpty('regional_policy');

        $validator
            ->allowEmpty('service_activation');

        $validator
            ->integer('id_1')
            ->allowEmpty('id_1');

        return $validator;
    }
}
