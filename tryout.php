<?php
require './vendor/autoload.php';
use OpenAPI\Client\ObjectSerializer;
use OpenAPI\Client\Model\CompoundDto;
$response = "{
    \"testProperty\": {
        \"name\": \"test\"
    }
}";
$deserialized = ObjectSerializer::deserialize($response, CompoundDto::class);
var_dump($deserialized);