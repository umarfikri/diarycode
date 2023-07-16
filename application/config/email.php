<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'useragent' => 'CodeIgniter',
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'ssl://smtp.googlemail.com', 
    'smtp_port' => 465,
    'smtp_user' => 'umarfikri1712',
    'smtp_pass' => 'kenapa123',
    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '4', //in seconds
    'wrapchars' => '76',
    'charset' => 'utf-8',
    'wordwrap' => TRUE,
    'validate' => FALSE,
    'priority' => 3,
    'crlf' => "\r\n",
    'newline' => "\r\n",
    'bcc_batch_mode' => FALSE,
    'bcc_batch_size' => 200
);

