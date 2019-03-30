<?php
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";

//flag
print"$pink
===================================================
               $red  !!!! WARNING !!!!
           $pink==> KOTA Bot Ilegal <==$pink
                $kuning bisa kena $red Banned
              $pink pergunakan dengan bijak
===================================================\n
$biru";
function id($sign,$data,$body,$jumlah,$wait) {
	$x = 0; 
	while($x < $jumlah) {

	$rand 	= rand(1,99999);
    $ch 	= curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://api2.yogopro.com/api/reward/watch");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    $result = curl_exec($ch);
    curl_close ($ch);
	echo $result."\n";
    sleep($wait);
    $x++;
    flush();
	} 
}  
echo "Sign =\nInput : "  echo $token = NzMzNzk4MWI5M2E5YjQwM2MwNGVkNGM4NTFlYzgzOGIzMDVmNGM2Yg==;
echo "Data =\nInput : "  echo $token = bc3DdKx0xy0IjAH4NBenYq9sLPDnqhuua6I36M8Z96MZylzKE4u2L6cE2%2FIRsuk5ouab%2FoNfRVx0tNEbJDG0LXPHGd6WNtF%2FG9nx%2FO5S%2Bj7e9tP2Ul1PmNWs6q8HIs0EZdZwT4WtM5Je9VfiNp7gm8MkEyKArLUqCxWkmc6leSi9HJB9nfGeSvSlIDDdoEUJeNChru9AGR4FEIB6LRWvltmzLHfWvIvOxRD%2Bnj96bSEHaHOeu8u8FgMyvquk5jAv7Vu4EVF4qPDprm%2BUXNtr38Z%2B5sOQEX7ep5eOeTpDtBA0lt4dnBv6pjYD8BcpOPuJ580v7dcs8XzUb7cROj2Ub36WnMZEviBWIoRuGWkyv8RTOX8L1ufrrrTSycHMQzLHIsZpP9VbFua45xpLHuD1US0g1pMuFqvnUf1gVUq72FaumPQXzmWPJDohQp%2BpRaTcoRMcOc01x4YiXZvbA71B0njYcCZpE5tHKI085WoPH9uLrB91J1n0DSumIEu0cA9tqNsWjUSsfUSx9Jxmpu9CHa%2FMzv%2BUNssP%2Bx1iaGzZtRR1Ss535MZWfmsiEgvsB%2BBfbHUBMiT7elorG4QyO02rGOwP8NgIf61Y%2BKsLpPfJuVAPl1o0YM4VRaja%2Fg60N0Us0ZKXfmMD0z9LU%2F85NA8kY0TvudtplmZ7m0toAXyCSu8zworlAV1qO5gEEuXOmwlejVFFP0mYkgwNRVVli07%2BNXv8xlSPPw1m0TM8SX7iyQf0al9wiSoH0VkqWZcQpJ6J2YdcRlOs4CcEihPgTQ4xAtcIBupT%2FQRqtMQh7fzYiJB0Ihh9We7d8TwKqADNyNqpVZ6TiTOCdelWQ36YyhBqZi0t%2FBf6o%2FZvWHgEYAf1MCMY2fKM%2FNMCxDQXr902IOondaJWAg1d8hE0Y4p135gF4KScLOnRbxn7n9u%2FbfrVz0s%3D&key=n6Z8qI2UQFZ3M%2BIPaFgpeuIy4tsr0%2F4a%2F%2FQYfev3m1nW9YuYd1ZXWo9aitVW%2Bg4ba2x%2FIaLCfv6T2%2BC6RQtXAUSEXUs4yvsCOrYUiCru%2FbKAikSUvontF7NkZYohiJMbJIP1zAEIPnN6fY%2Foh0rOL4GtNoeQeWEHqzO3PZsdYIs%3D;
echo "Body =\nInput : "  echo $token = sign=NzMzNzk4MWI5M2E5YjQwM2MwNGVkNGM4NTFlYzgzOGIzMDVmNGM2Yg==&data=bc3DdKx0xy0IjAH4NBenYq9sLPDnqhuua6I36M8Z96MZylzKE4u2L6cE2%2FIRsuk5ouab%2FoNfRVx0tNEbJDG0LXPHGd6WNtF%2FG9nx%2FO5S%2Bj7e9tP2Ul1PmNWs6q8HIs0EZdZwT4WtM5Je9VfiNp7gm8MkEyKArLUqCxWkmc6leSi9HJB9nfGeSvSlIDDdoEUJeNChru9AGR4FEIB6LRWvltmzLHfWvIvOxRD%2Bnj96bSEHaHOeu8u8FgMyvquk5jAv7Vu4EVF4qPDprm%2BUXNtr38Z%2B5sOQEX7ep5eOeTpDtBA0lt4dnBv6pjYD8BcpOPuJ580v7dcs8XzUb7cROj2Ub36WnMZEviBWIoRuGWkyv8RTOX8L1ufrrrTSycHMQzLHIsZpP9VbFua45xpLHuD1US0g1pMuFqvnUf1gVUq72FaumPQXzmWPJDohQp%2BpRaTcoRMcOc01x4YiXZvbA71B0njYcCZpE5tHKI085WoPH9uLrB91J1n0DSumIEu0cA9tqNsWjUSsfUSx9Jxmpu9CHa%2FMzv%2BUNssP%2Bx1iaGzZtRR1Ss535MZWfmsiEgvsB%2BBfbHUBMiT7elorG4QyO02rGOwP8NgIf61Y%2BKsLpPfJuVAPl1o0YM4VRaja%2Fg60N0Us0ZKXfmMD0z9LU%2F85NA8kY0TvudtplmZ7m0toAXyCSu8zworlAV1qO5gEEuXOmwlejVFFP0mYkgwNRVVli07%2BNXv8xlSPPw1m0TM8SX7iyQf0al9wiSoH0VkqWZcQpJ6J2YdcRlOs4CcEihPgTQ4xAtcIBupT%2FQRqtMQh7fzYiJB0Ihh9We7d8TwKqADNyNqpVZ6TiTOCdelWQ36YyhBqZi0t%2FBf6o%2FZvWHgEYAf1MCMY2fKM%2FNMCxDQXr902IOondaJWAg1d8hE0Y4p135gF4KScLOnRbxn7n9u%2FbfrVz0s%3D&key=n6Z8qI2UQFZ3M%2BIPaFgpeuIy4tsr0%2F4a%2F%2FQYfev3m1nW9YuYd1ZXWo9aitVW%2Bg4ba2x%2FIaLCfv6T2%2BC6RQtXAUSEXUs4yvsCOrYUiCru%2FbKAikSUvontF7NkZYohiJMbJIP1zAEIPnN6fY%2Foh0rOL4GtNoeQeWEHqzO3PZsdYIs%3D;
echo "Jumlah ?\nInput : " echo $jumlah = 3 ;
echo "Jeda =(ex:0)\nInput : " echo $wait = 40 ;
$submit = id($sign,$data,$body,$jumlah,$wait);
print $submit;
?>
