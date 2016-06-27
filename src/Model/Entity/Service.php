<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity.
 *
 * @property int $id
 * @property string $title
 * @property int $version
 * @property \Cake\I18n\Time $updated
 * @property int $status
 * @property int $category
 * @property string $category_description
 * @property string $goal
 * @property string $description
 * @property string $excluded_elements
 * @property string $prerequisite
 * @property string $contact
 * @property float $cost
 * @property float $starting_timeline
 * @property float $working_timeline
 * @property float $consultancy_timeline
 * @property float $security_marging
 * @property float $realisation_timeline
 * @property string $timeline_notes
 * @property string $internal_hr
 * @property float $consultancy_cost
 * @property string $consultant
 * @property string $procedure_access
 * @property string $head_agent
 * @property string $sup_head_agents
 * @property string $procedure_summary
 * @property string $regional_policy
 * @property string $service_activation
 * @property int $id_1
 * @property \App\Model\Entity\Output[] $outputs
 */
class Service extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
