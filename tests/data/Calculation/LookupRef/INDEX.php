<?php

return [
    [
        [20 => ['R' => 1]], // Expected
        // Input
        [20 => ['R' => 1]],
    ],
    [
        '#VALUE!', // Expected
        // Input
        [
            20 => ['R' => 1],
            21 => ['R' => 2],
        ],
        -1,
    ],
    [
        '#REF!', // Expected
        // Input
        [
            20 => ['R' => 1],
            21 => ['R' => 2],
        ],
        10,
    ],
    [
        [21 => ['R' => 2]], // Expected
        // Input
        [
            20 => ['R' => 1],
            21 => ['R' => 2],
        ],
        2,
    ],
    [
        [21 => ['R' => 2, 'S' => 4]], // Expected
        // Input
        [
            '20' => ['R' => 1, 'S' => 3],
            '21' => ['R' => 2, 'S' => 4],
        ],
        2,
        0,
    ],
    [
        '#VALUE!', // Expected
        // Input
        [
            '20' => ['R' => 1, 'S' => 3],
            '21' => ['R' => 2, 'S' => 4],
        ],
        2,
        -1,
    ],
    [
        '#REF!', // Expected
        // Input
        [
            '20' => ['R' => 1, 'S' => 3],
            '21' => ['R' => 2, 'S' => 4],
        ],
        2,
        10,
    ],
    [
        '#REF!', // Expected
        // Input
        [
            '20' => ['R' => 1, 'S' => 3],
            '21' => ['R' => 2, 'S' => 4],
        ],
        10,
        2,
    ],
    [
        4, // Expected
        // Input
        [
            '20' => ['R' => 1, 'S' => 3],
            '21' => ['R' => 2, 'S' => 4],
        ],
        2,
        2,
    ],
    [
        4, // Expected
        // Input
        [
            '20' => ['R' => 1, 'S' => 3],
            '21' => ['R' => 2, 'S' => 4],
        ],
        [
            '21' => ['R' => 2],
        ],
        [
            '21' => ['R' => 2],
        ],
    ],
    [
        'Pears',
        [
            ['Apples', 'Lemons'],
            ['Bananas', 'Pears'],
        ],
        2,
        2,
    ],
    [
        'Bananas',
        [
            ['Apples', 'Lemons'],
            ['Bananas', 'Pears'],
        ],
        2,
        1,
    ],
    [
        3,
        [
            [4, 6],
            [5, 3],
            [6, 9],
            [7, 5],
            [8, 3],
        ],
        5,
        2,
    ],
    [
        [4 => [8, 3]],
        [
            [4, 6],
            [5, 3],
            [6, 9],
            [7, 5],
            [8, 3],
        ],
        5,
        0,
    ],
    [
        [
            [6],
            [3],
            [9],
            [5],
            [3],
        ],
        [
            [4, 6],
            [5, 3],
            [6, 9],
            [7, 5],
            [8, 3],
        ],
        0,
        2,
    ],
];
