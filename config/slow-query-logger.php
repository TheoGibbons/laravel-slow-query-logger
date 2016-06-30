<?php

return [
    /**
     * log all sql queries that are slower than X milliseconds
     * Laravel measures at a precision of 2 digits, so 0.7134 will be logged as 0.71
     */
    'time-to-log' => 700.00,

    /**
     * log when you are on these environments
     */
    'environments' => [
        'local',
    ],

    /**
     * level to log
     */
    'log-level' => 'debug',
];