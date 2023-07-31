<?php
/**
 * Test the core Mnemo class with the Kolab backend.
 *
 * PHP version 5
 *
 * @category   Horde
 * @package    Mnemo
 * @subpackage UnitTests
 * @author     Gunnar Wrobel <wrobel@pardus.de>
 * @link       http://www.horde.org/apps/mnemo
 * @license    http://www.horde.org/licenses/apache
 */

/**
 * Test the core Mnemo class with the Kolab backend.
 *
 * Copyright 2011-2017 Horde LLC (http://www.horde.org/)
 *
 * See the enclosed file LICENSE for license information (ASL). If you
 * did not receive this file, see http://www.horde.org/licenses/apache.
 *
 * @category   Horde
 * @package    Mnemo
 * @subpackage UnitTests
 * @author     Gunnar Wrobel <wrobel@pardus.de>
 * @link       http://www.horde.org/apps/mnemo
 * @license    http://www.horde.org/licenses/apache
 */
class Mnemo_Unit_Mnemo_KolabTest extends Mnemo_Unit_Mnemo_Base
{
    protected $backupGlobals = false;

    /**
     * The default share name expected to be used.
     *
     * @var string
     */
    protected $default_name = 'Notes';

    public static function setUpBeforeClass(): void
    {
        self::markTestSkipped('Skipping because of "Cannot bind interface or abstract class "Horde_Share_Base" to an interface. in /usr/share/php/Horde/Injector/Binder/Implementation.php:78"');
        self::$setup = new Horde_Test_Setup();
        parent::setUpBeforeClass();
        self::createKolabShares(self::$setup);
    }
}
