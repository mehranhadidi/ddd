<?php

namespace App\Core;

use Illuminate\Support\Facades\Route;

class APIBuilder
{
    private array $configs;

    public function __construct(array $configs)
    {
        $this->configs = $configs;
    }

    /**
     * Build router based on given configs
     */
    public function build()
    {
        foreach ($this->configs as $version => $config) {
            $prefix = $config['prefix'] ?? 'api/' . $version;
            $routes = $config['routes'] ?? sprintf('routes/api-%s.php', $version);

            Route::prefix($prefix)
                ->namespace($config['namespace'])
                ->middleware($config['middlewares'] ?? 'api')
                ->group(base_path($routes));
        }
    }
}
