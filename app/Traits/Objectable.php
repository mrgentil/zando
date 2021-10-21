<?php


namespace App\Traits;


use stdClass;

trait Objectable
{
    private function array_to_obj(Array $array, stdClass $obj)
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $obj->$key = new stdClass();
                $this->array_to_obj($value, $obj->$key);
            } else {
                $obj->$key = $value;
            }
        }
        return $obj;
    }

    public function arrayToObject(Array $array)
    {
        $object = new stdClass();
        return $this->array_to_obj($array, $object);
    }
}
