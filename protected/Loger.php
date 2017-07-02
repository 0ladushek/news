<?php

namespace App;


class Loger
{

    public static function add(\Exception $e) {

        $str = get_class($e) . "Ошибка: " . $e->getMessage() . "Код: " . $e->getCode() . ' в ' . $e->getFile() . ' строка ' .
            $e->getLine() . "\n";
        file_put_contents(__DIR__ . '/log.txt', $str, FILE_APPEND | LOCK_EX);
    }

}