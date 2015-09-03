# SurvivalGames-Simple


ISSUES:


Classpath
Inspection result: Error
Errors
Main class file expected at src/src/SG.php but it is not a file
Info
Main class scanned: src\SG


Bad practice
Inspection result: Warning
Warnings
Server::getInstance() scanned in file src/SG/MainClass.php
The PHP extensions that PocketMine-MP uses have some issues with static properties. You are recommended try using other methods to get the Server instance.
You can pass $this->getServer() from the plugin object to your current class's constructor.


Syntax errors
Inspection result: Error
Errors
PHP Parse error: syntax error, unexpected '}', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' in /var/www/tmp/5/SurvivalGames-Simple-master/src/SG/MainClass.php on line 66
Errors parsing /var/www/tmp/5/SurvivalGames-Simple-master/src/SG/MainClass.php
Info
0 good PHP file(s) and 1 bad PHP file(s) found.
Checked with PHP 5.6.11-1+deb.sury.org~trusty+1
