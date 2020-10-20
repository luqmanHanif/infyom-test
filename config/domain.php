<?php

/**
 * Created by PhpStorm.
 * User: cachak
 * Date: 10/16/20
 * Time: 9:25 PM
 */

$_resultDomain = [
    'default' => [
        'latin' => false,
        'template' => 'monev',
        'admin_template' => 'adminlte',
        'locale' => 'en',
        'admin_prefix' => 'admin',
    ],


];

$domainFiles = glob(__DIR__ . DIRECTORY_SEPARATOR . 'domain' . DIRECTORY_SEPARATOR . '*.php');
if (is_array($domainFiles)) {
    foreach ($domainFiles as $_domain) {
        $_domainData = include($_domain);
        if (is_array($_domainData)) {
            $_resultDomain = array_merge($_resultDomain, $_domainData);
        }
    }
}

return $_resultDomain;