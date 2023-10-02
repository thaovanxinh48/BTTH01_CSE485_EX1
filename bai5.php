<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

// Lấy giá trị = 3 với key là 'b'
$valueB = $a['b']['o']['b'];
echo "Giá trị = $valueB với key là 'b'<br>";

// Lấy giá trị = 1 với key là 'c'
$valueC = $a['a']['c'];
echo "Giá trị = $valueC với key là 'c'<br>";

// Lấy thông tin của phần tử có key là 'a'
$infoA = $a['a'];
echo "Thông tin của phần tử có key là 'a':<br>";
print_r($infoA);