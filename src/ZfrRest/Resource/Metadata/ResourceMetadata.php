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

namespace ZfrRest\Resource\Metadata;

use Metadata\ClassMetadata;

/**
 * ResourceMetadata
 *
 * @license MIT
 * @author  Michaël Gallego <mic.gallego@gmail.com>
 */
class ResourceMetadata extends ClassMetadata implements ResourceMetadataInterface
{
    /**
     * @var \Doctrine\Common\Persistence\Mapping\ClassMetadata
     */
    public $classMetadata;

    /**
     * @var string
     */
    public $controller;

    /**
     * @var string
     */
    public $inputFilter;

    /**
     * @var string
     */
    public $hydrator;

    /**
     * @var string[]|array
     */
    public $encoders;

    /**
     * @var string[]|array
     */
    public $decoders;

    /**
     * @var ResourceMetadataInterface[]|array
     */
    public $associations;


    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        return $this->name;
    }

    /**
     * {@inheritDoc}
     */
    public function getClassMetadata()
    {
        return $this->classMetadata;
    }

    /**
     * {@inheritDoc}
     */
    public function getControllerName()
    {
        return $this->controller;
    }

    /**
     * {@inheritDoc}
     */
    public function getInputFilterName()
    {
        return $this->inputFilter;
    }

    /**
     * {@inheritDoc}
     */
    public function getHydratorName()
    {
        return $this->hydrator;
    }

    /**
     * {@inheritDoc}
     */
    public function getEncoderNames()
    {
        return $this->encoders;
    }

    /**
     * {@inheritDoc}
     */
    public function getDecoderNames()
    {
        return $this->decoders;
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociationMetadata($association)
    {
        return $this->associations[$association];
    }

    /**
     * {@inheritDoc}
     */
    public function hasAssociation($association)
    {
        return isset($this->associations[$association]);
    }
}
