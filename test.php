<?php
require 'vendor/autoload.php';

use Leslie\AliyunSts\AliSts;

$sts = new AliSts('', '');
$policy = <<<POLICY
{
"Version": "v1",
  "Statement": [
    {
      "Action": [
        "oss:Get*",
        "oss:List*"
      ],
      "Effect": "Allow",
      "Resource": "*"
    }
  ]
}
POLICY;
$res = $sts->assumeRole(3600, $policy, "", 'username');
print_r($res);
