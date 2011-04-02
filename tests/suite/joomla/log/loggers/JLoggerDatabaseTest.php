<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Log
 *
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

require_once JPATH_PLATFORM.'/joomla/log/loggers/database.php';

/**
 * Test class for JLoggerDatabase.
 */
class JLoggerDatabaseTest extends PHPUnit_Framework_TestCase
{
	/**
	 * Test the JLoggerDatabase::addEntry method.
	 */
	public function testAddEntry()
	{
		$this->markTestSkipped('TODO: Figure out how to test this logger.');
	}
}