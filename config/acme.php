<?php


return [

    /**
     * The array of strings containing e-mail addresses. Only used in this function when creating a new account.
     */
    'email' => '',

    /**
     * ACME URL, can be string or one of predefined values: LE_STAGING or LE_PRODUCTION. Defaults to LE_STAGING.
     */
    'acmeURL'=>true,

    /**
     * The level of logging. Defaults to no logging. LOG_OFF, LOG_STATUS, LOG_DEBUG accepted. Defaults to LOG_OFF. (optional)
     */
    'log' => \LEClient\LEClient::LOG_STATUS,

    /**
     * string The main directory in which all keys (and certificates), including account keys, are stored. Defaults to 'keys/'. (optional)
     * array Optional array containing location of all certificate files. Required paths are public_key, private_key, order and certificate/fullchain_certificate (you can use both or only one of them)
     */
    'certificateKeys' => 'keys/',

    /**
     * string The directory in which the account keys are stored. Is a subdir inside $certificateKeys. Defaults to '__account/'.(optional)
     * array Optional array containing location of account private and public keys. Required paths are private_key, public_key.
     */
    'accountKeys' => '__account/',

    /**
     * The base name for the order. Preferable the top domain (example.org). Will be the directory in which the keys are stored. Used for the CommonName in the certificate as well.
     */
    'domain' => '',
];