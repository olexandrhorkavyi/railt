<?php
/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Railt\HttpFactory;

use Railt\Http\ResponseInterface;

/**
 * Interface ResponseFactoryInterface
 */
interface ResponseFactoryInterface
{
    /**
     * @return ResponseInterface
     */
    public function empty(): ResponseInterface;
}