<?php

class NFP_Config
{
  static $googleSheetConfig = [
    'type' => 'service_account',
    'project_id' => '',
    'private_key_id' => '',
    'private_key' => '-----BEGIN PRIVATE KEY-----

-----END PRIVATE KEY-----
',
    'client_email' => '',
    'client_id' => '100250877812854089749',
    'auth_uri' => 'https://accounts.google.com/o/oauth2/auth',
    'token_uri' => 'https://oauth2.googleapis.com/token',
    'auth_provider_x509_cert_url' => 'https://www.googleapis.com/oauth2/v1/certs',
    'client_x509_cert_url' => 'https://www.googleapis.com/robot/v1/metadata/x509/nfc-product-feedback%40lunar-marker-127105.iam.gserviceaccount.com',
    'sheet_id' => '',
    // order here matters
    'fields_wanted' => ['date', 'code', 'name', 'message'],
    ];
}
