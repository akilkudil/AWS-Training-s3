<?php

$s3Client = new Aws\S3\S3Client([
    'region'  => 'us-east-1',
    'version' => '2006-03-01',
]);

$cmd = $s3Client->getCommand('GetObject', [
    'Bucket' => 'my-bucket',
    'Key'    => 'testKey'
]);

$request = $s3Client->createPresignedRequest($cmd, '+20 minutes');

?>