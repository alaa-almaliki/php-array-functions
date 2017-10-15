<?php

/**
 * Array utility functions
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 * @Licence MIT
 */
namespace Asca {

    /**
     * Checks if value exists in a given array
     *
     * @param string $value
     * @param array $data
     * @return bool
     */
    function array_value_exist($value, array $data)
    {
        return  !empty(array_intersect($data, [$value]));
    }

    /**
     * Faster array_unique
     *
     * @param bool $reset_keys
     * @param array $data
     * @return array|null
     */
    function fast_array_unique(array $data, $reset_keys = false)
    {
        $uniqueArray = array_flip(array_flip($data));

        if ($reset_keys) {
            $uniqueArray = array_values($uniqueArray);
        }
        return $uniqueArray;
    }

    /**
     * @param array $data
     * @param string $path
     * @return array|mixed
     */
    function value_by_key_path(array $data, $path)
    {
        if (strpos($path, '/') === false) {
            return $data[$path];
        }

        $keys = explode('/', $path);
        $value = $data;
        foreach ($keys as $key) {
            $value = &$value[$key];
        }
        return $value;
    }

    /**
     * @param array $array1
     * @param array $array2
     * @return array
     */
    function array_diff_both(array $array1, array $array2)
    {
        return array_merge(array_diff($array1, $array2), array_diff($array2, $array1));
    }

    /**
     * @param array $array
     * @param string $rootNode
     * @return string
     */
    function array_to_xml(array $array, $rootNode = 'root')
    {
        $xml = '';
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $xml .= array_to_xml($value, $key);
            } else {
                $value = strtr(
                    $value,
                    [
                        '&' => '&amp;',
                        '"' => '&quot;',
                        "'" => '&apos;',
                        '<' => '&lt;',
                        '>' => '&gt;'
                    ]
                );
                $xml .= "<{$key}>{$value}</{$key}>\n";
            }
        }

        if ($rootNode) {
            $xml = "<{$rootNode}>\n{$xml}</{$rootNode}>\n";
        }
        return $xml;
    }

    /**
     * @param array $array
     * @param int $option
     * @return string
     */
    function array_to_json(array $array, $option = JSON_FORCE_OBJECT)
    {
        return json_encode($array, $option);
    }

    /**
     * @param array $array
     * @return string
     */
    function array_to_yaml(array $array)
    {
        return yaml_emit($array);
    }
}
