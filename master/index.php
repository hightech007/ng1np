<?php 
require_once 'setup/master.class.php';
require_once 'setup/tpl.class.php';
require_once 'setup/node.class.php';

$tpl = new tpl();
$n0d3 = new n0d3();
$engine = new ng1np();

$tpl->kompresija();
$tpl->head();
$tpl->up_down();

$engine->komande();

$n0d3->node();
$engine->engine_up();


$tpl->up_down2();
$tpl->fusnota();
$tpl->min_js();
$tpl->stop_kompresija(); 
?>
