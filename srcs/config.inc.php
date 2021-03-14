<?php

// This is needed for cookie based authentication to encrypt password in cookie. Needs to be 32 chars long.

$cfg['blowfish_secret'] = '$2a$07$EJooQ7FWQIpYWJAMqd0mq.eRnrTTAkqpIwEv1InrJ8q0KMfAK0WLi';

// Servers configuration

$i = 0;

// First server

$i++;

/* Authentication type */

$cfg['Servers'][$i]['auth_type'] = 'cookie';

/* Server parameters */

$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;

/* User used to manipulate with storage */

$cfg['Servers'][$i]['controluser'] = 'vazra';
$cfg['Servers'][$i]['controlpass'] = 'password';

// End of servers configuration

// Directories for saving/loading files from server

$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

