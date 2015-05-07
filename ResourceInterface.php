<?php
/**
 * Resource Interface
 *
 * @package    Controller
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Application;

use stdClass;

/**
 * Resource Interface
 *
 * @package    Controller
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface ResourceInterface
{
    /**
     * Get Resource Data for Route
     *
     * @return  stdClass
     * @since   1.0.0
     */
    public function getResource();
}
