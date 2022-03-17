<?php

function encrypt($data)
{
    return openssl_encrypt($data, CIPHER, KEY);
}

function desrypt($data)
{
    return openssl_decrypt($data, CIPHER, KEY);
}