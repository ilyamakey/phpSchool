<?php

$url = strtolower(trim('www.pdffiller.com/jsfiller-desk7/?projectId=236656706&expId=4421&expBranch=1#4c2f90b9111c4074ad174decae22e6b'));

function checkScheme($url)
{
    return explode('://', $url, 2);

};

function parseUrl($url)
{
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        echo 'URL is not correct';
        return null;
    }

    $parsedUrl = [
        'scheme' => '',
        'path' => '',
        'query' => '',
        'fragment' => '',
        'domain' => '',
        'subdomain' => '',
        'tld' => '',
    ];

    $scheme = checkScheme($url);







}



$find = checkScheme($url);



print_r($find);