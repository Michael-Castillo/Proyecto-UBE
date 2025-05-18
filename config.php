<?php

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'bb4xlgifdkj4gpsgyqkj-mysql.services.clever-cloud.com';
$CFG->dbname    = 'bb4xlgifdkj4gpsgyqkj';
$CFG->dbuser    = 'uydditaq4vy1qhwj';
$CFG->dbpass    = '7sCishhGcVqEvLlDBlMv';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv("MYSQL_ADDON_PORT"),
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_0900_ai_ci',
);

$CFG->wwwroot   = 'http://app-748dc79c-8689-4d26-9a00-c122fba34ddb.cleverapps.io';
$CFG->dataroot  = '/moodledata';
$CFG->admin     = 'ADMIN';

$CFG->directorypermissions = 0777;

$CFG->sslproxy = true;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!

// $CFG->wwwroot   = 'app-748dc79c-8689-4d26-9a00-c122fba34ddb.cleverapps.io/';
