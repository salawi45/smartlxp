<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'essecdig_dest';
$CFG->dbuser    = 'essecdig_itaktrek';
$CFG->dbpass    = 'Ecep_M@roc2014';
$CFG->prefix    = 'cocoon_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 8889,
  'dbcollation' => 'utf8_general_ci',
);

$CFG->wwwroot   = 'https://essecdigitaltrek.com/destafrica';
$CFG->dataroot  = '/home/essecdigitaltrek/destafricadata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
