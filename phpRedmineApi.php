<?php

namespace Yii;

//require_once 'php-redmine-api/autoload.php';

/**
 * Yii PHP Redmine API
 * @author Carlo Denaro <me at carlodenaro dot com>
 * Website: http://github.com/blackout314/yii-php-redmine-api
 */
class phpRedmineApi {
	private $client;

    /**
     * @var url    url of redmine
     * @var api    apiKey
     */
	public function __construct ($url, $api)
	{
		$this->client = new Redmine\Client($url, $api);
	}
	/**
	 * @var e      type of entity
	 */
	public function get ($e)
	{
		return $this->client->api($e)->all();
	}
}

?>
