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

namespace ZfrRestTest\Http\Exception;

use PHPUnit_Framework_TestCase as TestCase;
use ZfrRest\Http\Exception;

class ClientExceptionTest extends TestCase
{
    public function testThrowExceptionIfStatusCodeIsNotInRange()
    {
        $this->setExpectedException(
            'InvalidArgumentException',
            'Status code for client errors must be between 400 and 499, 500 given'
        );

        $exception = new Exception\ClientException(500);

        $this->setExpectedException(
            'InvalidArgumentException',
            'Status code for client errors must be between 400 and 499, 399 given'
        );

        $exception = new Exception\ClientException(399);
    }

    public function testAlwaysContainDefaultMessage()
    {
        $exception = new Exception\ClientException(401);
        $this->assertContains('A client error occurred', $exception->getMessage());
    }
}
