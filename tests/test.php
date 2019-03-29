<?php

    require __DIR__ . '/../src/Sort.php';

    use Stalin\Sort;

    function simplify(array $value)
    {
        array_walk($value, function(&$a, $b) { $a = "{$b}:{$a}"; });
        return implode(',', $value);
    }

    $data = [5, 2, 3, 9, 2, 1, 2, 3, 9, 12, 5, 11, 20, 15, 3];
    $test = [
        's' => '0:5,1:2,2:3,3:9,4:2,5:1,6:2,7:3,8:9,9:12,10:5,11:11,12:20,13:15,14:3',
        'a' => '0:5,1:9,2:9,3:12,4:20',
        'b' => '0:5,3:9,8:9,9:12,12:20',
    ];
    
    $sort = new Sort($data);
    $a = $sort->sort();
    $b = $sort->asort();

    if (simplify($data) !== $test['s'])
        printf("DATA:  Source data was invalid.\n");

    if (simplify($a) !== $test['a'])
        printf("SORT:  Sort data returned invalid data.\n");

    if (simplify($b) !== $test['b'])
        printf("ASORT: Sort data returned invalid data.\n");

    printf("Original data\n");
    print_r($data);

    printf("sort()\n");
    print_r($a);

    printf("asort()\n");
    print_r($b);