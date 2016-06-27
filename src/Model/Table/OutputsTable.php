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
class OutputsTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('outputs');
        $this->primaryKey('id');
    }
  

}