#!/usr/bin/env php
<?php

if (array_key_exists(1, $argv)) {
    $appMode = $argv[1];
    switch ($appMode) {
    case '-h':
        print <<<EOD
Webfuscator
A command-line tool for PHPprotect's online Webfuscator

Syntax:
  webfuscator <option>
  webfuscator <option> <input-file> <output-file>

Options:
  -h    to view help
  -v    to see version & license
  -x    to obfuscate code

Examples:
  webfuscator -x <input.php> <output.php>
  webfuscator -h
  webfuscator -v

EOD;
        break;
    case '-v':
        print <<<EOD
Webfuscator - PHPprotect Webfuscator CLI
Version 1.0

Copyright 2018 Abhishek Kumar

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

EOD;
        break;
    case '-x':
    default:
        if (array_key_exists(2, $argv)) {
            $fileName = $argv[2];
            $fileContent = file_get_contents($fileName);

            if (array_key_exists(3, $argv)) {
                $fileOutput = $argv[3];

                $wsUrl = 'http://www.phpprotect.info/webfuscator/obfuscator/script_obfuscator';
                $wsCargo = array('code' => $fileContent);

                $wsOptions = array(
                    'http' => array(
                        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                        'method' => 'POST',
                        'content' => http_build_query($wsCargo),
                    ),
                );
                $wsContext = stream_context_create($wsOptions);
                $wsResult = file_get_contents($wsUrl, false, $wsContext);
                if ($wsResult === FALSE) {
                    print "Error: Unable to send request.\n";
                } else {
                    $wsResponse = json_decode($wsResult, true);
                    if ($wsResponse['status'] == 'success') {
                        file_put_contents($fileOutput, $wsResponse['obfuscated_code']);
                    } else {
                        print "Error: Request failed.\n";
                    }
                }
            } else {
                print "Error: Output filename is missing\n";
            }
        } else {
            print "Error: Input filename is missing\n";
        }
        break;
    }
} else {
    print "Error: Mode is not specified\n";
}

?>
