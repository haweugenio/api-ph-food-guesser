<?php

use Carbon\Carbon;
use Illuminate\Contracts\Support\Htmlable;

// Redirect based on user type
if (!function_exists('homeRoute')) {
    function homeRoute()
    {
        if (!auth()->check()) {
            return 'login';
        }

        if (auth()->user()->isSuperAdmin()) {
            return 'admin.dashboard';
        }

        if (auth()->user()->isExecutive()) {
            return 'clientServ.home';
        }

        if (auth()->user()->isUser()) {
            return 'homepage';
        }

        return 'landing';
    }
}


// array merge to json format
if (!function_exists('to_json_add')) {
    function to_json_add($key, $value, $arrList = [])
    {
        $array = [];
        if (!empty($arrList)) {
            $array = array_merge($arrList, [$key => $value]);
        } else {
            $array = [$key => $value];
        }
        return json_encode($array);
    }
}

// return array
if (!function_exists('to_json_remove')) {
    function to_json_remove($lang, $string)
    {
        if (!$string) {
            return [];
        }

        $arrs = to_array($string);

        if (array_key_exists($lang, $arrs)) {
            unset($arrs[$lang]);
        }

        return $arrs;
    }
}

if (!function_exists('to_json_remove_null')) {
    function to_json_remove_null($string)
    {
        if (!$string) {
            return [];
        }

        $arrs = to_array($string);

        foreach ($arrs as $key => $value) {
            if ($value == 'null') {
                unset($arrs[$key]);
            };
        }

        return $arrs;
    }
}
// convert string to array
if (!function_exists('to_array')) {
    function to_array($string)
    {
        $arr = json_decode($string, true);
        return $arr;
    }
}

if (!function_exists('generate_random_string')) {
    function generate_random_string()
    {
        $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pieces = [];
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < 8; ++$i) {
            $pieces[] = $keyspace[random_int(0, $max)];
        }
        return implode('', $pieces);
    }
}


if (!function_exists('make_reference_id')) {
    function make_reference_id(string $prefix, int $number): string
    {
        return sprintf('%s-%05d', $prefix, $number);
    }
}
