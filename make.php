<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/packages/Ingestor.php";

echo "Compilataion started\n";

(new Ingestor('1.5.0'))->ingest();

echo "Compilataion ended\n";
