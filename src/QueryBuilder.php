<?php

namespace EgorPetrov\pgsqlTraced;


class QueryBuilder extends \yii\db\pgsql\QueryBuilder
{

    public function build($query, $params = [])
    {
        list($sql, $params) = parent::build($query, $params);
        /**
         * add trace
         */
        $e = new \Exception();
        $trace = $e->getTraceAsString();
        $trace = preg_replace("/\n/", "\n--", $trace);
        $sql = $sql . "\n--this is a trace\n--$trace";
        return [$sql, $params];
    }


}
