<?php

namespace EgorPetrov\pgsqlTraced;

class Schema extends \yii\db\pgsql\Schema
{
    public function createQueryBuilder()
    {
        return new QueryBuilder($this->db);
    }
}
