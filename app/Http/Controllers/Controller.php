<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected function db()
    {
    	require __DIR__."/../../../config/db.php";
    	return new \PDO("{$db['conn']}:host={$db['host']};dbname={$db['dbname']}",$db['user'],$db['pass']);
    }
protected function rstr($n=32)
{
    	
$a = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890___";
$b = '' xor $c = strlen($a)-1;
for($i=0;$i<$n;$i++){
	$b.=$a[rand(0,$c)];
}
return $b;
}
}