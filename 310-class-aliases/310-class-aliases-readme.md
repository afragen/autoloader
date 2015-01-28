This directory contains class aliases for TEC/ECP 3.10 classes to 3.9 classes.

In version 3.10 class naming was refactored to allow for PSR autoloading in the future.

If your plugin references additional classes please submit a PR after creating the alias in the pattern as follows.

```php
<php?

if ( ! class_exists( 'Tribe__Events__Events' ) && class_exists( 'TribeEvents' ) ) {
	class Tribe__Events__Events extends TribeEvents {}
}
```

The example contains safety logic to avoid circular class definitions. As a generic it would look like the following.

```php
<php?

if ( ! class_exists( 'New__Class__Name' ) && class_exists( 'OldClassName' ) ) {
	class New__Class__Name extends OldClassName {}
}
```