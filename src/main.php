<?php

echo "post_max_size: ", ini_get('post_max_size'), "\n";

echo "\n\n --------------- \n\n";

echo "BEHAT_BASE_URL: ", getenv('BEHAT_BASE_URL'), "\n";
echo "BEHAT_WD_HOST: ", getenv('BEHAT_WD_HOST'), "\n";

echo "phpversion: ", phpversion(), "\n";
