<?php

include __DIR__ . '/init.php';

if (GRANTTYPE == 'client_credentials') {
    include_once __DIR__ . '/ClientMode/callback.php';
}

if (GRANTTYPE == 'authorization_code') {
    include_once __DIR__ . '/AuthorizationCodeMode/callback.php';
}
