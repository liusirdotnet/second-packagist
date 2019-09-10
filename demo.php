<?php
require './vendor/autoload.php';

use RabbitMQ\RabbitMQ;

$ob = new RabbitMQ;

$ob->test();
