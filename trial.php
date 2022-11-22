<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once '/path/to/vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid = getenv("TWILIO_ACCOUNT_SID");
$token = getenv("TWILIO_AUTH_TOKEN");
$twilio = new Client($sid, $token);

$verification = $twilio->verify->v2->services("d-0e8c8f99fe8a40948654de368ed0d7a5")
                                   ->verifications
                                   ->create("skonte30@gmail.com", "email");

print($verification->sid);
{
  "service_sid": "d-0e8c8f99fe8a40948654de368ed0d7a5";
  "account_sid": "AC5d36bae78dbb0506e5f767b4c2c2bde6";
  "to": "skonte30@gmail.com";
  "channel": "email";
  "status": "pending";
  "valid": false;
  "date_created": "2015-07-30T20:00:00Z";
  "date_updated": "2015-07-30T20:00:00Z";
  "lookup": {};
  "amount": null;
  "payee": null;
  "send_code_attempts": [
    {
      "time": "2015-07-30T20:00:00Z",
      "channel": "SMS",
      "attempt_sid": "VLXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"
    }
  ],
  "sna": null,
  "url": "https://verify.twilio.com/v2/Services/VAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Verifications/VEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"
}