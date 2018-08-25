使用STS授予用户临时权限操作OSS

使用方式：

引入文件：
 
 require 'vendor/autoload.php'；
 
 use Leslie\AliyunSts\AliSts;
 
$sts = new AliSts('xxxxxxxxx', 'xxxxxxxxxxxxxxxxxxx');

$res = $sts->assumeRole(3600, $policy, "xxxxxxxxxxx", 'username');

print_r($res);

详情见test.php文件

关于policy：

需要根据需求自行添加策略，了解更多移步阿里云RAM控制台，或者OSS里的令牌管理。