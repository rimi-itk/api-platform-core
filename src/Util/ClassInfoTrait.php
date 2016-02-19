<?php

/*
 * This file is part of the API Platform Builder package.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ApiPlatform\Builder\Util;

use Doctrine\Common\Util\ClassUtils;

/**
 * Retrieves information about a class.
 *
 * @internal
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
trait ClassInfoTrait
{
    /**
     * Get class name of the given object.
     *
     * @param object $object
     *
     * @return string
     */
    private function getObjectClass($object)
    {
        return class_exists('Doctrine\Common\Util\ClassUtils') ? ClassUtils::getClass($object) : get_class($object);
    }
}