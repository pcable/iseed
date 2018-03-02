<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 02-Mar-18
 * Time: 12:18 PM
 */

namespace Orangehill\Iseed;


class IseedRawField
{
    public $setter;
    public $value;

    public function __construct($setter, $value)
    {
        $this->setter = $setter;
        $this->value = $value;
    }

    public static function __set_state($array)
    {
        $field = str_replace('$1', $array['value'], $array['setter']);
        return \DB::raw($field);
    }
}