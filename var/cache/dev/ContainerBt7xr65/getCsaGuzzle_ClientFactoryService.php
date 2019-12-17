<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'csa_guzzle.client_factory' shared service.

$this->services['csa_guzzle.client_factory'] = $instance = new \Csa\Bundle\GuzzleBundle\Factory\ClientFactory('GuzzleHttp\\Client', array());

$instance->registerSubscriber('stopwatch', ${($_ = isset($this->services['csa_guzzle.subscriber.stopwatch']) ? $this->services['csa_guzzle.subscriber.stopwatch'] : $this->load('getCsaGuzzle_Subscriber_StopwatchService.php')) && false ?: '_'});
$instance->registerSubscriber('debug', ${($_ = isset($this->services['csa_guzzle.subscriber.debug']) ? $this->services['csa_guzzle.subscriber.debug'] : $this->services['csa_guzzle.subscriber.debug'] = new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Subscriber\DebugSubscriber()) && false ?: '_'});
$instance->registerSubscriber('cache', ${($_ = isset($this->services['csa_guzzle.subscriber.cache']) ? $this->services['csa_guzzle.subscriber.cache'] : $this->load('getCsaGuzzle_Subscriber_CacheService.php')) && false ?: '_'});

return $instance;
