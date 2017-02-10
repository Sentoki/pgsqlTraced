<?php

namespace EgorPetrov\pgsqlTraced;


class QueryBuilder extends yii\db\pgsql\QueryBuilder
{

    public function build($query, $params = [])
    {
        list($sql, $params) = parent::build($query, $params);
        return [$sql, $params];
    }


}
