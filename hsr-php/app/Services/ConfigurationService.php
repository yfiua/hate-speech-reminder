<?php

namespace App\Services;

use Auth;
use App\Config;

class ConfigurationService {
  // Get configuration
  public function getConfig($key) {
    if ($key == null)
      return null;

    $config = Config::where('key_name', $key)->first();
    
    return $config->value;
  }

  // Get configurations
  public function getConfigs($keys) {
    if ($keys != null)
      $configs = Config::whereIn('key_name', $keys)->get();
    else
      $configs = Config::all();

    return $configs;
  }

  // Set configuration
  public function setConfig($key, $value) {
    $config = Config::where('key_name', $key)->first();
    $config->value = $value;
    $config->save();

    return true;
  }
}
