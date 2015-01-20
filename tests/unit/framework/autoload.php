<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

$magentoDir = require __DIR__ . '/../../../etc/magento_path.php';
require_once $magentoDir . '/app/autoload.php';

$vendorDir = require $magentoDir . '/app/etc/vendor_path.php';
$vendorAutoload = require $magentoDir . "/{$vendorDir}/autoload.php";
$testsBaseDir = "$magentoDir/$vendorDir/magento/migration-tool/tests/unit";
$vendorAutoload->add('Migration\\Test\\', "{$testsBaseDir}/testsuite/Migration");
