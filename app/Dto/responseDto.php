<?php

namespace App\Dto;

use ReflectionClass;

class ResponseDto
{
    private static array $columnsCache = [];
    
    public int $party_dtl_id;
    public int $guest_id;
    public string $check_in_date;
    public string $party_status;
    public string $payment_status;
    public string $reservation_id;
    public float $grand_total;

    public function __construct($party)
    {
        foreach (self::columns() as $column) {
            $this->$column = $party->$column;
        }
    }

    public static function columns(): array
    {
        $class = static::class;
        
        return self::$columnsCache[$class] ??= array_map(
            fn($prop) => $prop->getName(),
            (new ReflectionClass($class))->getProperties(\ReflectionProperty::IS_PUBLIC)
        );
    }
}