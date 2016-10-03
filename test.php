<?php

include 'simple factory.php';

$fa = new Factory();
echo $fa->create('Pdf', 12);
echo $fa->create('Book', 43);