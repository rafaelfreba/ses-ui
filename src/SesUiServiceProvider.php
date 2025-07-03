<?php

namespace SesUi;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class SesUiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Carrega as views com namespace para uso como: view('ses-ui::auth.login')
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ses-ui');

        // Registra os componentes Blade com prefixo opcional (ex: <x-ses-ui::form-ses />)
        Blade::componentNamespace('SesUi\\Components', 'ses-ui');

        // Publicação unificada (views, components, assets)
        $this->publishes([
            __DIR__ . '/../resources/views'       => resource_path('views/vendor/ses-ui'),
            __DIR__ . '/../resources/components'  => resource_path('views/components'),
            __DIR__ . '/../public'                => public_path('vendor/ses-ui'),
        ], 'ses-ui');

        // Publicações individuais (opcionais)
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/ses-ui'),
        ], 'ses-ui-views');

        $this->publishes([
            __DIR__ . '/../resources/components' => resource_path('views/components'),
        ], 'ses-ui-components');

        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/ses-ui'),
        ], 'ses-ui-assets');
    }

    public function register()
    {
        //
    }
}
