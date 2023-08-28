<?php

/**
 * Plugin Name: Security Author Data
 * Description: Test task for Eddy.
 * Version: 1.0
 * Author: Airmax
 * Author URI: https://airmax.pro
 * Text Domain: sad
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 */

declare(strict_types=1);

use SecurityAuthorData\Startup;

if (is_readable(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
}

new Startup();