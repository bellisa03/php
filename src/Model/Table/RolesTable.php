<?php

namespace App\Model\Table;

use Cake\Database\Connection;
use Cake\ORM\Table;

/**
 * PHP versions 5.6
 * @Copyright Formatux.be.
 * @Author: G² <info@formatux.be>
 * Date: 13/04/16
 * Description :
 *
 */
class RolesTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('roles');
        $this->primaryKey('id');
        $this->displayField('title');
    }

    public function findRoles(){

        $r = $this->find('all')->select(['id','title']);

        foreach($r as $v){
            $t[$v->id] = $v->title;
        }
        return $t;

    }

}