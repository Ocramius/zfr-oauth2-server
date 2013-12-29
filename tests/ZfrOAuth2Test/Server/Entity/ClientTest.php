<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace ZfrOAuth2Test\Server\Entity;

use ZfrOAuth2\Server\Entity\Client;

/**
 * @author  Michaël Gallego <mic.gallego@gmail.com>
 * @licence MIT
 * @cover \ZfrOAuth2\Server\Entity\Client
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testGettersAndSetters()
    {
        $client = new Client();

        $client->setId('id');
        $client->setSecret('secret');
        $client->setName('name');
        $client->setScope('scope');
        $client->setRedirectUri('http://www.example.com');

        $this->assertEquals('id', $client->getId());
        $this->assertEquals('secret', $client->getSecret());
        $this->assertEquals('name', $client->getName());
        $this->assertEquals('http://www.example.com', $client->getRedirectUri());
        $this->assertEquals('scope', $client->getScope());
    }

    public function testCanCheckPublicClient()
    {
        $client = new Client();
        $this->assertTrue($client->isPublic());

        $client->setSecret('secret');
        $this->assertFalse($client->isPublic());
    }
}
