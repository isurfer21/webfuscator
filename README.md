# Webfuscator
PHPprotect Webfuscator CLI

### Intro
There is a great online tool provided by PHPprotect named Webfuscator; which is free. The only drawback is that it provides support on either web. Although they provide a windows app as well; but when you need to integrate it in your build script then neither of them were useful. 

So I have created this tool which uses php-cli to run the script that consumes the Webfuscator as a service. You can consider it a work-around or service-hack. But the point is, now we can use the same awesome webapp as a command-line tool.

I hope it would be of great help for the people looking out for something like this.

Lastly, I'm keeping my fingers crossed for not breached any license terms of PHPprotect.

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
