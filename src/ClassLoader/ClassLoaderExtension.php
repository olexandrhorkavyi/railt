<?php
/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Railt\ClassLoader;

use Railt\Container\Exception\ContainerInvocationException;
use Railt\Foundation\Application;
use Railt\Foundation\Application\CompilerExtension;
use Railt\Foundation\Extension\Extension;
use Railt\Foundation\Extension\Status;
use Railt\Io\File;
use Railt\SDL\Schema\CompilerInterface;

/**
 * Class KernelExtension
 */
class ClassLoaderExtension extends Extension
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'ClassLoader';
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Provides the ability to reference PHP code from within GraphQL SDL files.';
    }

    /**
     * @return array
     */
    public function getDependencies(): array
    {
        return ['railt/railt' => CompilerExtension::class];
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return Application::VERSION;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return Status::STABLE;
    }

    /**
     * @throws ContainerInvocationException
     */
    public function register(): void
    {
        $this->registerIfNotRegistered(ClassLoaderInterface::class, function (CompilerInterface $compiler) {
            return new DirectiveClassLoader($compiler, $this->app);
        });
    }
}