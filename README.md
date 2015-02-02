## Autoloader Class and Class Aliases

This repository contains a generic class autoloader that will load classes from a namespace root directory and an alternate directory/location for vendor or other types of classes necessary for your plugin. It requires PHP 5.3 or greater as it uses namespacing to avoid collisions if more than one plugin requires it's use.

Additionally it contains a directory of class aliases for TEC/ECP's switch to using new class names. If your plugin user is using TEC/ECP 3.9 or lower you will have problems.

PRs welcome, especially for additional class aliases as you find needing them. Please refer to the readme in that folder for additional information on how to create these.

`plugin.php` is an example of how to call this autoloader. You will need to change function names and namespacing.

## Changelog
[CHANGES.md](CHANGES.md)

## Credits
Built by [Andy Fragen](https://twitter.com/andyfragen)