<?php
// Load Composer's autoloader
require 'vendor/autoload.php';

use Webklex\PHPIMAP\ClientManager;
use Webklex\PHPIMAP\Client;

$oClient = new Client([
    'host'          => 'imap.gmail.com',
    'port'          => 993,
    'encryption'    => 'ssl',
    'validate_cert' => true,
    'username'      => 'collagevirgin@gmail.com',
    'password'      => 'abcde111',
    'protocol'      => 'imap'
]);

//Connect to the IMAP Server
$oClient->connect();

//Get all Mailboxes
/** @var \Webklex\PHPIMAP\Support\FolderCollection $aFolder */
$aFolder = $oClient->getFolders();

