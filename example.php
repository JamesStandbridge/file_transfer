<?php

/**
 * @author James Standbridge <james.standbridge.git@gmail.com>
 */

require 'vendor/autoload.php';

use App\Service\FileTransferer;


$transferer = new FileTransferer();

$transferer->setSender("194.62.96.136", "be91976-1773", "yMjMJ6G7CRPbw3HVMysnaoSs8QiJga");
$transferer->setReceiver("178.33.25.159", "bn25189-1618", "82JqkjFQkjfIQpMyTrqQ");

var_dump($transferer->test());



// $resFile = fopen(
//     "ssh2.sftp://sftpIVRBOEKI:aZE*dsq21@185.72.89.110:22/TALEND_test/GET/test.xml", 
//     "r"
// );

// $srcFile = fopen(
//     "ssh2.sftp://root:YbZYMSbard6vFW@5.135.194.186:22/var/www/test_folder/test.xml",
//     'w'
// );
// $writtenBytes = stream_copy_to_stream($resFile, $srcFile);

// fclose($srcFile);
// fclose($resFile);

unlink("ssh2.sftp://sftpIVRBOEKI:aZE*dsq21@185.72.89.110:22/TALEND_test/GET/test.xml");

