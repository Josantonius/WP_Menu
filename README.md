# PHP WordPress Menu

[![Latest Stable Version](https://poser.pugx.org/josantonius/wp_menu/v/stable)](https://packagist.org/packages/josantonius/wp_menu) [![Total Downloads](https://poser.pugx.org/josantonius/wp_menu/downloads)](https://packagist.org/packages/josantonius/wp_menu) [![Latest Unstable Version](https://poser.pugx.org/josantonius/wp_menu/v/unstable)](https://packagist.org/packages/josantonius/wp_menu) [![License](https://poser.pugx.org/josantonius/wp_menu/license)](https://packagist.org/packages/josantonius/wp_menu)

[Versión en español](README-ES.md)

Add menu or submenu page in WordPress.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Usage](#usage)
- [TODO](#-todo)
- [Contribute](#contribute)
- [Repository](#repository)
- [Licensing](#licensing)
- [Copyright](#copyright)

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP Wordpress Menu library, simply:

    $ composer require Josantonius/WP_Menu

The previous command will only install the necessary files, if you prefer to download the entire source code (including tests, vendor folder, exceptions not used, docs...) you can use:

    $ composer require Josantonius/WP_Menu --prefer-source

Or you can also clone the complete repository with Git:

    $ git clone https://github.com/Josantonius/WP_Menu.git
    
### Requirements

This library is supported by PHP versions 5.6 or higher and is compatible with HHVM versions 3.0 or higher.

To use this library in HHVM (HipHop Virtual Machine) you will have to activate the scalar types. Add the following line "hhvm.php7.scalar_types = true" in your "/etc/hhvm/php.ini".

### Quick Start and Examples

To use this class, simply:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\WP_Menu\WP_Menu;

$menu = [
	'slug'       => 'searchinside-options',					// Required
	'name'       => __('Search Inside', 'search-iniside'),  // Required
	'title'      => __('Search Inside', 'search-iniside'),  // Optional
	'capability' => 'manage_options',					    // Optional
	'icon_url'   => '//searchinside-menu-admin.png',		// Optional
	'position'   => 25,										// Optional
];

// Add menu without associated method
WP_Menu::add(
	'menu', 
	$menu
);

// Add menu with associated method for output. If no methods are indicated for loading scripts and styles and there are "addStyles" and "addScripts" methods in the instance ($this in this case) will be loaded by default.
WP_Menu::add(
	'menu', 
	[$this, 'runPage']
);

// Add menu with associated method for output and methods to load styles and scripts.
WP_Menu::add(
	'menu', 
	[$this, 'runPage'], 
	'load_styles',		// It would be the same as: [$this, 'load_styles']
	'load_scripts'		// It would be the same as: [$this, 'load_scripts']
);

// Add menu with associated method for output and methods to load styles and scripts indicating each object individually.
WP_Menu::add(
	'menu', 
	[$instance1, 'runPage'], 
	[$instance3, 'load_styles'],
	[$instance3, 'load_scripts']
);

$submenu = [
	'slug'       => 'searchinside-options',				// Required
	'parent'     => 'searchinside-options',				// Required
	'name'       => __('Options', 'search-iniside'),	// Required
	'title'      => __('Options', 'search-iniside'),	// Optional
	'capability' => 'manage_options',					// Optional
];


// Add submenu without associated method
WP_Menu::add(
	'submenu', 
	$submenu
);

// Add submenu with associated method for output. If no methods are indicated for loading scripts and styles and there are "addStyles" and "addScripts" methods in the instance ($this in this case) will be loaded by default.
WP_Menu::add(
	'submenu', 
	[$this, 'runPage']
);

// Add submenu with associated method for output and methods to load styles and scripts.
WP_Menu::add(
	'submenu', 
	[$this, 'runPage'], 
	'load_styles',		// It would be the same as: [$this, 'load_styles']
	'load_scripts'		// It would be the same as: [$this, 'load_scripts']
);

// Add submenu with associated method for output and methods to load styles and scripts indicating each object individually.
WP_Menu::add(
	'submenu', 
	[$instance1, 'runPage'], 
	[$instance3, 'load_styles'],
	[$instance3, 'load_scripts']
);
```

### ☑ TODO

- [ ] Add tests

### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### Licensing

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

### Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).
