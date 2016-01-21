# asset_helper
CodeIgniter Asset Helper for CSS and JS

## Installation

### Via Composer
```
composer require mazedlx/asset_helper
```

### Manual
1. Copy `asset_helper.php` to `/application/helpers/`.
2. In `/application/config/autoload.php` add `asset_helper` to `$autoload['helper']`:
```php
$autoload['helper'] = array('url', 'file', 'html', 'asset_helper');
```

## Usage
```
<!doctpye html>
<html lang="de">
	<head>
	    <base href="<?php echo base_url(); ?>" />
	    <?php echo link_css('bootstrap'); ?>
	    <?php echo link_js('jquery'); ?>
	    <?php echo link_js('bootstrap'); ?>
	</head>
	<body>

	</body>
</html>
```
