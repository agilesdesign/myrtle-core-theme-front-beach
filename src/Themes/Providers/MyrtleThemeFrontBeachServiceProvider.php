<?php

namespace Myrtle\Themes\Admin\Beach\Theme\Providers;

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
			base_path(). '/vendor/agilesdesign/myrtle-theme-front-beach/src/public' => public_path(),
		], 'public');
    }
}
