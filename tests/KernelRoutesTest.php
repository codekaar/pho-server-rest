<?php

/*
 * This file is part of the Pho package.
 *
 * (c) Emre Sokullu <emre@phonetworks.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class KernelRoutesTest extends TestCase
{

    public function testFounder()
    {
        $body = $this->get('/founder');
        $this->assertEquals("PhoNetworksAutogenerated\\User", $body["class"]);
        $this->assertRegExp('/^[a-f0-9]{32}$/i', $body["id"]);
    }

    public function testGraph()
    {
        $body = $this->get('/graph');
        $this->assertEquals("PhoNetworksAutogenerated\\Graph", $body["class"]);
        $this->assertRegExp('/^[a-f0-9]{32}$/i', $body["id"]);
    }

    public function testSpace()
    {
        $body = $this->get('/space');
        $this->assertEquals("Pho\\Kernel\\Standards\\Space", $body["class"]);
        $this->assertEquals(str_repeat("0", 32), $body["id"]);
    }

}
