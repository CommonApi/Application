<?php
/**
 * Application Interface
 *
 * @package    Controller
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Application;

use stdClass;

/**
 * Application Interface
 *
 * @package    Controller
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface ApplicationInterface
{
    /**
     * Using Request, Identify and Set the Application
     *
     * @return  $this
     * @since   1.0.0
     */
    public function setApplication();

    /**
     * Retrieve Application Configuration Data
     *
     * @return  stdClass
     * @since   1.0.0
     */
    public function getConfiguration();

    /**
     * Check if the Site has permission to utilise this Application
     *
     * @param   integer  $site_id
     *
     * @return  $this
     * @since   1.0.0
     * @throws  \CommonApi\Exception\RuntimeException
     */
    public function verifySiteApplication($site_id);
}
