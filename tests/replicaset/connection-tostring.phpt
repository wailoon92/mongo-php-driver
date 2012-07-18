--TEST--
Connection strings: toString.
--SKIPIF--
<?php require dirname(__FILE__) ."/skipif.inc"; ?>
<?php exit("skip This test doesn't make whole lot of sense"); ?>
--FILE--
<?php
require_once dirname(__FILE__) . "/../utils.inc";

$cstring = "$REPLICASET_SECONDARY:$REPLICASET_SECONDARY_PORT,$REPLICASET_PRIMARY:$REPLICASET_PRIMARY_PORT";

$a = new Mongo("mongodb://$cstring");
var_dump($a->__toString());

?>
--EXPECTF--
string(%s) "[%s:%d],%s:%d""
