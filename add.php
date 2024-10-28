<?php
//Trang thêm playlist
//Nhớ lưu token lại!!!!!

$token = isset($_GET['token']) ? htmlspecialchars($_GET['token']) : null;

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://production1.stationhead.com/me/queue/track/later',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"tracks":[{"id":"1GeFTnXC5r8swRolj7vCgr","isrc":"KRA302300481"},{"id":"7wn7zV6fSgF01IHSzQmwr5","isrc":"KRA302300486"},{"id":"1GeFTnXC5r8swRolj7vCgr","isrc":"KRA302300481"},{"id":"5qacGiH3qars7Nism1c29V","isrc":"KRA302300483"},{"id":"1GeFTnXC5r8swRolj7vCgr","isrc":"KRA302300481"},{"id":"0sAq8cN9lvt9dkAWa5DtWb","isrc":"KRA302300485"},{"id":"1GeFTnXC5r8swRolj7vCgr","isrc":"KRA302300484"},{"id":"7cW0KDwbqNK1v8MypdqEWY","isrc":"KRA302300481"},{"id":"1GeFTnXC5r8swRolj7vCgr","isrc":"KRA302300482"},{"id":"0sAq8cN9lvt9dkAWa5DtWb","isrc":"KRA302300481"},{"id":"1GeFTnXC5r8swRolj7vCgr","isrc":"KRA302300486"},{"id":"0G6QKAr2n2A9eyS9rEYSB8","isrc":"KRA302300481"},{"id":"1GeFTnXC5r8swRolj7vCgr","isrc":"KRA302300485"},{"id":"7wn7zV6fSgF01IHSzQmwr5","isrc":"KRA302300481"},{"id":"1GeFTnXC5r8swRolj7vCgr","isrc":"KRA302300483"},{"id":"5qacGiH3qars7Nism1c29V","isrc":"KRA302300481"},{"id":"1GeFTnXC5r8swRolj7vCgr","isrc":"KRA302300484"},{"id":"0sAq8cN9lvt9dkAWa5DtWb","isrc":"KRA302300481"},{"id":"1GeFTnXC5r8swRolj7vCgr","isrc":"KRA302300482"},{"id":"7cW0KDwbqNK1v8MypdqEWY","isrc":"KRA302300481"},{"id":"1GeFTnXC5r8swRolj7vCgr","isrc":"KRA302300483"}],"add_to_rotation":false}',
  CURLOPT_HTTPHEADER => array(
    'authority: production1.stationhead.com',
    'accept: */*',
    'accept-language: en-US,en;q=0.9,vi-VN;q=0.8,vi;q=0.7',
    'app-platform: web',
    'app-version: 1.0.0',
    'authorization: Bearer '.$token,
    'content-type: application/json',
    'dnt: 1',
    'origin: https://www.stationhead.com',
    'referer: https://www.stationhead.com/',
    'sec-ch-ua: "Google Chrome";v="119", "Chromium";v="119", "Not?A_Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-site',
    'service: Spotify',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
