<?php

namespace Spark\Project\Configuration;

use Spark\Configuration\ConfigurationSet as BaseConfigurationSet;
use Spark\Configuration\DefaultConfigurationSet;
use Spark\Project\Configuration\PlatesConfiguration;

class ConfigurationSet extends BaseConfigurationSet
{
    public function __construct()
    {
        parent::__construct([
            DefaultConfigurationSet::class,
            PlatesConfiguration::class,
        ]);
    }
}
