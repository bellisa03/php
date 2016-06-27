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
class StatusTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('status');
        $this->primaryKey('id');
        $this->displayField('title');
    }
  

}