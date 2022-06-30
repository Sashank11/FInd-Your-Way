<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find Your Way Application</title>

    <script src="https://kit.fontawesome.com/ee8d71ea8d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="">
    

</head>
<body>
<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://coronavirus-smartable.p.rapidapi.com/news/v1/US/",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: coronavirus-smartable.p.rapidapi.com",
		"x-rapidapi-key: 711c388fcdmsh86f44dd06399244p1e9d4cjsn61a1f5527963"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
?>
</body>
</html>