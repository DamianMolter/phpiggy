<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use App\Config\Paths;
use Framework\App;
use function App\Config\{registerRoutes, registerMiddleware};

$app = new App(Paths::SOURCE . "App/Config/container-definitions.php");

registerRoutes($app);
registerMiddleware($app);

$app->run();

return $app;
