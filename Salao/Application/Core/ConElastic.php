<?php
namespace Core;



use Elasticsearch;
use Elasticsearch\ClientBuilder;
use PDO;
use PDOException;


class ConElastic 
{
	




	public static function getDataBaseElastic()
	{	
		$hosts = [
			'localhost:9200'
		];	

		$client = Elasticsearch\ClientBuilder::create()->setHosts($hosts)->build();	
		
		return $client;

	}
}