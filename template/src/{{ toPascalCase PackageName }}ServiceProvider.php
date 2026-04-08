<?php

declare(strict_types=1);

namespace {{ toPascalCase Vendor }}\{{ toPascalCase PackageName }};

use Illuminate\Support\ServiceProvider;

class {{ toPascalCase PackageName }}ServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/{{ toSnakeCase PackageName }}.php', '{{ toSnakeCase PackageName }}');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__ . '/../config/{{ toSnakeCase PackageName }}.php' => $this->app->configPath('{{ toSnakeCase PackageName }}.php'),
        ], '{{ toKebabCase PackageName }}-config');
    }
}
