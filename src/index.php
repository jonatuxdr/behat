<?php

echo "continuousphp " . (40 + 2);

echo "\n\n -------PIPELINES VARIABLES-------- \n\n";

foreach(['MY_FIRST_VAR', 'MY_SECOND_VAR', 'MY_SECURE_VAR'] as $key) {
    echo "$key:", getenv($key), "\n";
}

echo "\n\n -------INJECTED VARIABLES-------- \n\n";

foreach(['HOSTNAME', 'CONTINUOUSPHP', 'GITHUB_TOKEN', 'CPHP_BUILD_ID', 'CPHP_GIT_COMMIT', 'CPHP_GIT_REF', 'CPHP_BUILT_BY', 'CPHP_PR_ID', 'CPHP_TOKEN'] as $key) {
    echo "$key:", getenv($key), "\n";
}

echo "\n\n -------INFOS-------- \n\n";

echo "phpversion: ", phpversion(), "\n";
