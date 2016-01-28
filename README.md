[![Latest Stable Version](https://poser.pugx.org/mazedlx/asset_helper/v/stable)](https://packagist.org/packages/mazedlx/asset_helper)
[![Total Downloads](https://poser.pugx.org/mazedlx/asset_helper/downloads)](https://packagist.org/packages/mazedlx/asset_helper)
[![Latest Unstable Version](https://poser.pugx.org/mazedlx/asset_helper/v/unstable)](https://packagist.org/packages/mazedlx/asset_helper)
[![License](https://poser.pugx.org/mazedlx/asset_helper/license)](https://packagist.org/packages/mazedlx/asset_helper)
[![Build Status](https://travis-ci.org/mazedlx/asset_helper.svg?branch=master)](https://travis-ci.org/mazedlx/asset_helper)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mazedlx/asset_helper/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mazedlx/asset_helper/?branch=master)
<!-- [![Monthly Downloads](https://poser.pugx.org/mazedlx/asset_helper/d/monthly)](https://packagist.org/packages/mazedlx/asset_helper) -->
<!-- [![Daily Downloads](https://poser.pugx.org/mazedlx/asset_helper/d/daily)](https://packagist.org/packages/mazedlx/asset_helper) -->

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
	    <?php echo $assetHelper->link_css('bootstrap.css'); ?>
	    <?php echo $assetHelper->link_js('jquery.min.js'); ?>
	    <?php echo $assetHelper->link_js('bootstrap.js'); ?>
	</head>
	<body>
        <h1>Lorem ipsum dolor sit amet</h1>
	</body>
</html>
```
