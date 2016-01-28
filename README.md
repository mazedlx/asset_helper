[![Build Status](https://travis-ci.org/mazedlx/asset_helper.svg?branch=master)](https://travis-ci.org/mazedlx/asset_helper)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mazedlx/asset_helper/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mazedlx/asset_helper/?branch=master)

# asset_helper
Super-simple asset helper for CodeIgniter for local js and css files.

## Installation

`composer require mazedlx/asset_helper`

## Usage
Make sure that CodeIgniter ist autoloading your Composer packages (`application/config/config.php`):

`$config['composer_autoload'] = true;`


In your view:
```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetHelper = new AssetHelper\AssetHelper();
?>
<!DOCTYPE html>
<html lang="de">
    <head>
	    <base href="<?php echo base_url(); ?>" />
	    <?php echo $assetHelper->link_css('bootstrap'); ?>
	    <?php echo $assetHelper->link_js('jquery'); ?>
	    <?php echo $assetHelper->link_js('bootstrap'); ?>
	</head>
	<body>
        <h1>Lorem ipsum dolor sit amet</h1>
	</body>
</html>
```
