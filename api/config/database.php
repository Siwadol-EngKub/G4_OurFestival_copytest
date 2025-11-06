<?php
// Database configuration with environment overrides
// Adapted for Replit PostgreSQL environment
return [
    'driver' => 'pgsql',
    'host' => getenv('PGHOST') ?: getenv('DB_HOST') ?: '127.0.0.1',
    'port' => getenv('PGPORT') ?: getenv('DB_PORT') ?: '5432',
    'database' => getenv('PGDATABASE') ?: getenv('DB_NAME') ?: 'g4_ourfestival',
    'username' => getenv('PGUSER') ?: getenv('DB_USER') ?: 'postgres',
    'password' => getenv('PGPASSWORD') ?: getenv('DB_PASS') ?: '',
    'charset' => 'utf8',
];