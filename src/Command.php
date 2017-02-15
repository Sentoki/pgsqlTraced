<?php
/**
 * @link https://github.com/Sentoki/pgsqlTraced
 */

namespace EgorPetrov\pgsqlTraced;

class Command extends \yii\db\Command
{
    /**
     * Redefined method that add call trace as SQL comment at end of query.
     * @return string the SQL statement to be executed
     */
    public function getSql()
    {
        $sql = parent::getSql();
        /**
         * add trace
         */
        $e = new \Exception();
        $trace = $e->getTraceAsString();
        $trace = preg_replace("/\n/", "\n--", $trace);
        return $sql . "\n--this is a trace\n--$trace";
    }
}
