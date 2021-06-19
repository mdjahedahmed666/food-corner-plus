<?php
function data_encryption($data, $email) {
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encyption_iv = '1234567891011123';
    $encyption_key = $email;

    return openssl_encrypt($data,$ciphering, $encyption_key,$options,$encyption_iv);
    
}

?>