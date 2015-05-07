<?php
/**
 * Front Controller Interface
 *
 * @package    Controller
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 */
namespace CommonApi\Application;

use Exception;

/**
 * Front Controller Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface FrontControllerInterface
{
    /**
     * Execute Application: Request to Response Processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function process();

    /**
     * Schedule Event Processing
     *
     * @param   string $event_name
     * @param   array  $options
     *
     * @return  array
     * @since   1.0.0
     */
    public function scheduleEvent($event_name, array $options = array());

    /**
     * Method is called by PHP for errors if it has been assigned the PHP set_error_handler in the application
     *
     * @param   integer $error_number
     * @param   string  $message
     * @param   string  $file
     * @param   integer $line_number
     * @param   array   $context
     *
     * @return  $this
     * @since   1.0.0
     */
    public function setError($error_number, $message, $file, $line_number, array $context = array());

    /**
     * Method is called by PHP for errors if it has been assigned the PHP set_error_handler in the application
     *
     * @param   Exception $e
     *
     * @return  $this
     * @since   1.0.0.0
     */
    public function setException(Exception $e);

    /**
     * Method is called by PHP for errors if it has been assigned the PHP set_error_handler in the application
     *
     * @param   string  $message
     * @param   array   $context
     *
     * @return  $this
     * @since   1.0.0.0
     */
    public function setDebug($message, array $context = array());

    /**
     * Shutdown the application
     *
     * @return  void
     * @since   1.0.0
     */
    public function shutdown();
}
