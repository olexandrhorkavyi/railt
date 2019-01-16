<?php
/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Railt\SDL\Contracts\Dependent;

use Railt\SDL\Contracts\Definitions\TypeDefinition;

/**
 * Interface DependentTypeDefinition
 */
interface DependentDefinition extends TypeDefinition
{
    /**
     * @return TypeDefinition
     */
    public function getParent(): TypeDefinition;
}