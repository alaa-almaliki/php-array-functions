# PHP Array Functions

Utility php function can be reused to save development time

# Installation
Use composer

# Usage

##### \Asca\array_value_exist($value, array $data)
Checks if value exists in array

_Example_

```
$data = ['One', 'Two', 'Three'];
var_dump(\Asca\array_value_exist('One', $data)) // true
var_dump(\Asca\array_value_exist('Five', $data)) // false
```

##### \Asca\fast_array_unique(array $data, $reset_keys = false)
Fast Array Unique

_Example_
```
$data = ['One', 'Two', 'Three', 'Three'];
var_dump(\Asca\fast_array_unique($data)); // [0 => 'One', 1 => 'Two', 3 => 'Three']
var_dump(\Asca\fast_array_unique($data, true)); // [0 => 'One', 1 => 'Two', 2 => 'Three']
```
##### \Asca\value_by_key_path(array $data, $path)
Retrieve a value from multi-dimensional array by key path

_Example_
```
$data = [
    'employees' => [
        'junior' => [
            'name' => 'John',
            'years' => 1
        ],
        'intermediate' => [
            'name' => 'Sara',
            'years' => 2,
        ],
        'senior' => [
            'name' => 'Ahmed',
            'years' => 5
        ]
    ]
];

var_dump()\Asca\value_by_key_path($data, 'employees/junior/name'); // John
```

##### \Asca\array_diff_both(array $array1, array $array2)
Get all elements from both arrays

_Example_
```
$array1 = ['One', 'Two', 'Three', 'Four', 'Five'];
$array2 = ['Two', 'Four', 'Six', 'Eight', 'Ten'];
\Asca\array_diff_both($array1, $array2); //['One', 'Three', 'Five', 'Six', 'Eight', 'Ten']
```

##### \Asca\array_to_xml(array $array, $rootNode = 'root')
Converts array to xml

_Example_
```
$array = [
    'persons' => [
        'person1' => [
            'name' => 'John Doe',
            'job' => 'Web Developer',
            'years' => 5
        ]
    ]
];

echo \Asca\array_to_xml($array); 
output:
<root>
    <persons>
        <person1>
            <name>John Doe</name>
            <job>Web Developer</job>
            <years>5</years>
        </person1>
    </persons>
</root>

```

##### \Asca\array_to_json(array $array, $option = JSON_FORCE_OBJECT)
This is `json_encode($array);` function

##### \Asca\array_to_yaml(array $array)
This is `yaml_emit($array);` function

