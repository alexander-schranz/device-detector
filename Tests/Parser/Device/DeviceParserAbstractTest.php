<?php declare(strict_types=1);

/**
 * Device Detector - The Universal Device Detection library for parsing User Agents
 *
 * @link https://matomo.org
 *
 * @license http://www.gnu.org/licenses/lgpl.html LGPL v3 or later
 */

namespace DeviceDetector\Tests\Parser\Device;

use DeviceDetector\Parser\Device\DeviceParserAbstract;
use PHPUnit\Framework\TestCase;

class DeviceParserAbstractTest extends TestCase
{
    public function testGetAvailableDeviceTypes(): void
    {
        $available = DeviceParserAbstract::getAvailableDeviceTypes();
        $this->assertGreaterThan(5, count($available));
        $this->assertContains('desktop', array_keys($available));
    }

    public function testGetAvailableDeviceTypeNames(): void
    {
        $available = DeviceParserAbstract::getAvailableDeviceTypeNames();
        $this->assertGreaterThan(5, count($available));
        $this->assertContains('desktop', $available);
    }

    public function testGetFullName(): void
    {
        $this->assertEquals('', DeviceParserAbstract::getFullName('Invalid'));
        $this->assertEquals('Asus', DeviceParserAbstract::getFullName('AU'));
        $this->assertEquals('Google', DeviceParserAbstract::getFullName('GO'));
    }
}