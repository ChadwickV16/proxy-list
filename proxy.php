<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://free-proxy-list.net/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

$proxy = '@<td>(.*?)</td>@si';

preg_match_all($proxy ,$result, $proxy_cikti);

for ($i = 0; $i < 1197; $i++) {

    if (filter_var($proxy_cikti[1][$i], FILTER_VALIDATE_IP)) {

        $islem = $i + 1;

        echo $proxy_cikti[1][$i] . ':' . $proxy_cikti[1][$islem] . '<br>';

    }

}
?>
