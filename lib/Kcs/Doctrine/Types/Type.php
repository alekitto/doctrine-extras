<?php

namespace Kcs\Doctrine\Types;

abstract class Type
{
    const BINARY_ARRAY = 'binary_array';

    private static $_typesMap = array(
        self::BINARY_ARRAY => "Kcs\\Doctrine\\Types\\BinaryArrayType"
    );

    public static function registerTypes($override = false)
    {
        foreach(self::$_typesMap as $type => $class_name) {
            if(!\Doctrine\DBAL\Types\Type::hasType($type)) {
                \Doctrine\DBAL\Types\Type::addType($type, $class_name);
            } elseif ($override) {
                \Doctrine\DBAL\Types\Type::overrideType($type, $class_name);
            }
        }
    }
}
