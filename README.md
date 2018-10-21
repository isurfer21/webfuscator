# Webfuscator
PHPprotect Webfuscator CLI

### Intro
There is a great online tool provided by PHPprotect named Webfuscator; which is free. The only drawback is that it provides support on either web. Although they provide a windows app as well; but when you need to integrate it in your build script then neither of them were useful. 

So I have created this tool which uses php-cli to run the script that consumes the Webfuscator as a service. You can consider it a work-around or service-hack. But the point is, now we can use the same awesome webapp as a command-line tool.

I hope it would be of great help for the people looking out for something like this.

Lastly, I'm keeping my fingers crossed for not breached any license terms of PHPprotect.

### Setup
1. Prerequisites: git and php-cli (command line interface) packages as per your system's OS
2. Navigate to the directory where you want to install shrinker (/usr/local is a good idea): 
   ```
   $ cd /usr/local 
   ```
3. Then retrieve from GitHub: 
   ```
   $ git clone https://github.com/isurfer21/webfuscator.git
   ```
4. Go to the webfuscator directory: 
   ```
   $ cd webfuscator 
   ```
5. Check that webfuscator.php has execute rights, otherwise:
   ```
   $ chmod a+x webfuscator.php 
   ```
6. Create a symbolic link in the /usr/local/bin directory
   ```
   $ cd /usr/local/bin 
   $ ln -s /usr/local/webfuscator/webfuscator.php webfuscator 
   ```
7. You can now run webfuscator 
   ```
   $ webfuscator -h 
   $ webfuscator inputfile.php outputfile.php
   ```

### Help
```
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
```

### Reference
[PHPprotect - Webfuscator](http://www.phpprotect.info/webfuscator)
