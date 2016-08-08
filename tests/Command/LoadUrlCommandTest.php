<?php

/*
 * This file is part of the bisarca/bisarca package.
 *
 * (c) Emanuele Minotto <minottoemanuele@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bisarca\Command;

use PHPUnit_Framework_TestCase;

/**
 * @covers Bisarca\Command\LoadUrlCommand
 * @group unit
 */
class LoadUrlCommandTest extends PHPUnit_Framework_TestCase
{
    use UrlAwareTraitTestTrait;

    /**
     * @var LoadUrlCommand
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->object = new LoadUrlCommand();
    }
}
