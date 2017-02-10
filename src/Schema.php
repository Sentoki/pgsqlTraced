<?php

namespace EgorPetrov\pgsqlTraced;

use yii\db\Expression;
use yii\db\TableSchema;
use yii\db\ColumnSchema;

class Schema extends yii\db\pgsql\Schema
{
    public function createQueryBuilder()
    {
        return new QueryBuilder($this->db);
    }
}
