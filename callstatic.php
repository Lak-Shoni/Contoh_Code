<?php

class Mahasiswa
{
    private static $ShiftHuruf = [
      'len' => 'strlen',
      'lower' => 'strtolower',
      'upper' => 'strtoupper'
    ];

    public static function __callStatic($name, $arguments)
    {
        if (!array_key_exists($name, self::$ShiftHuruf)) {
            throw new Exception('The ' . $name . ' is not supported.');
        }

        return call_user_func_array(self::$ShiftHuruf[$name], $arguments);
    }
}

echo Mahasiswa::len('informatika') . '<br>';
echo Mahasiswa::lower('informatika') . '<br>';
echo Mahasiswa::upper('informatika') . '<br>';

?>
