<?php

// verify results
chdir($package->locations['root']);
$package->begin_status('********* Verifying packages *********');
$package->run_command('./compare.sh ' . $package->package_infos['release_filename']);

echo "Done.\n";
