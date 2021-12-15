<?php

if (php_sapi_name() != 'cli') {
    echo "[*] Only in CLI Mode";
    exit;
}

$content = file_get_contents("https://www.worldometers.info/coronavirus/");

preg_match_all(
    '/<div class="maincounter-number".*?>\s<span.*?>\s?([0-9,]+)\s?<\/span>\s?<\/div>/',
    $content,
    $matches
);

echo sprintf(
    "\nCases in the world 😷 => %s\nDeaths 💀 => %s\nRecovered ✔️  => %s\n\n",
    $matches[1][0],
    $matches[1][1],
    $matches[1][2]
);
