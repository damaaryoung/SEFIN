<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Tests\Command;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class RouterDebugCommandTest extends TestCase
{
    public function testDebugAllRoutes()
    {
        $tester = $this->createCommandTester();
        $ret = $tester->execute(array('name' => null), array('decorated' => false));

        $this->assertEquals(0, $ret, 'Returns 0 in case of success');
        $this->assertContains('Name   Method   Scheme   Host   Path', $tester->getDisplay());
    }

    public function testDebugSingleRoute()
    {
        $tester = $this->createCommandTester();
        $ret = $tester->execute(array('name' => 'foo'), array('decorated' => false));

        $this->assertEquals(0, $ret, 'Returns 0 in case of success');
        $this->assertContains('Route Name   | foo', $tester->getDisplay());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testDebugInvalidRoute()
    {
        $this->createCommandTester()->execute(array('name' => 'test'));
    }

    /**
     * @return CommandTester
     */
    private function createCommandTester()
    {
        $application = new Application($this->getKernel());

        $command = new RouterDebugCommand();
        $application->add($command);

        return new CommandTester($application->find('debug:router'));
    }

    private function getKernel()
    {
        $routeCollection = new RouteCollection();
        $routeCollection->add('foo', new Route('foo'));
        $router = $this->getMockBuilder('Symfony\Component\Routing\RouterInterface')->getMock();
        $router
            ->expects($this->any())
            ->method('getRouteCollection')
            ->will($this->returnValue($routeCollection))
        ;

        $container = $this->getMockBuilder('Symfony\Component\DependencyInjection\ContainerInterface')->getMock();
        $container
            ->expects($this->once())
            ->method('has')
            ->with('router')
            ->will($this->returnValue(true))
        ;
        $container
            ->expects($this->any())
            ->method('get')
            ->with('router')
            ->willReturn($router)
        ;

        $kernel = $this->getMockBuilder(KernelInterface::class)->getMock();
        $kernel
            ->expects($this->any())
            ->method('getContainer')
            ->willReturn($container)
        ;
        $kernel
            ->expects($this->once())
            ->method('getBundles')
            ->willReturn(array())
        ;

        return $kernel;
    }
}
