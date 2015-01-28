## Autoloader Class and Class Aliases

This repository contains a generic class autoloader that will load classes up to 3 or more levels deep. It requires PHP 5.3 or greater as it uses namespacing to avoid collisions if more than one plugin requires it's use.

Additionally it contains a directory of class aliases for TEC/ECP's switch to using new class names. If your plugin user is using TEC/ECP 3.9 or lower you will have problems.

PRs welcome, especially for additional class aliases as you find needing them. Please refer to the readme in that folder for additional information on how to create these.