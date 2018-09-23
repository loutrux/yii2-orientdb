<?php
namespace loutrux\orientdb;

use Yii;
use yii\base\Component;
use PhpOrient\PhpOrient;
/**
 * Provide a OrientDB client connection from [[Ostico  PhpOrient extension]](https://github.com/Ostico/PhpOrient)
 *
 *
 **/

class Connection extends Component 
{
    public $client;
    public $hostname;
    public $port;
    public $username;
    public $password;
    public $dbname;

    public function __construct()
    {
        // ... initialization before configuration is applied
        $this->hostname = 'localhost';
        $this->port     = '2424';
        $this->username = 'root';
        $this->password = 'root_pass';
        parent::__construct($config);
        $this->client = new PhpOrient();
        $this->client->hostname = $this->hostname;
        $this->client->port     = $this->port ;
        $this->client->username = $this->username;
        $this->client->password = $this->password;
        $this->client->connect();
        $this->client->dbOpen( $this->dbname, $this->username, $this->password);
    }

    public function init()
    {
        parent::init();
        // ... initialization after configuration is applied
    }
    
}