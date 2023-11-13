#!/usr/bin/env php

<?php

$user_input = preg_replace('/[^A-Za-z]/', '', $argv[1]);

echo strlen($user_input);
