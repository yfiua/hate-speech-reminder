<?php

namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class ConfigurationServiceFacade extends Facade {
  protected static function getFacadeAccessor() { return 'configuration_service'; }
}
