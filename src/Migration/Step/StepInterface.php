<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Migration\Step;

/**
 * Interface StepInterface
 */
interface StepInterface
{
    /**
     * Run step
     *
     * @return void
     */
    public function run();

    /**
     * @return int
     */
    public function getMaxSteps();
}