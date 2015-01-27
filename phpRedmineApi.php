<?php

namespace Yii;

/**
 * Yii PHP Redmine API
 * @author Carlo Denaro <me at carlodenaro dot com>
 * Website: http://github.com/blackout314/yii-php-redmine-api
 */
class phpRedmineApi {
	private $client;

	/**
	 * @var string $url    url of redmine
	 * @var string $api    apiKey
	 */
	public function __construct ($url, $api)
	{
		$this->client = new Redmine\Client($url, $api);
	}
	/**
	 * @var string $e      type of entity
	 */
	public function get ($e)
	{
		return $this->client->api($e)->all();
	}
}
