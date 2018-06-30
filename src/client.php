<?php

$client = new GearmanClient();
$client->addServer();

echo $client->doNormal('reverse', 'Hello World');

