<?php

namespace App\Providers;

use App;
use Illuminate\Support\ServiceProvider;

class ConfigurationServiceProvider extends ServiceProvider {
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot() {
    //
  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register() {
    App::bind('configuration_service', function() {
      return new App\Services\ConfigurationService;
    });
  }
}
