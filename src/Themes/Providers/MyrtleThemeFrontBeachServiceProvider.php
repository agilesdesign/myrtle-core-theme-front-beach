<?php

namespace Myrtle\Core\Themes\Admin\Beach\Theme\Providers;

use Illuminate\Support\ServiceProvider;

class MyrtleThemeFrontBeachServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->publishes([
			base_path(). '/vendor/agilesdesign/myrtle-core-theme-front-beach/src/public' => public_path(),
		], 'public');
    }
}
