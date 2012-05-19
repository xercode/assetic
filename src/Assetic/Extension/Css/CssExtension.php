<?php

/*
 * This file is part of the Assetic package, an OpenSky project.
 *
 * (c) 2010-2012 OpenSky Project Inc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Assetic\Extension\Css;

use Assetic\AbstractExtension;
use Assetic\EnvironmentInterface;
use Assetic\Extension\Css\Loader\CssLoader;

class CssExtension extends AbstractExtension
{
    private $factory;

    public function initialize(EnvironmentInterface $env)
    {
        $this->factory = $env->getFactory();
    }

    public function getLoaderVisitors()
    {
        return array(
            new CssLoader($this->factory),
        );
    }

    public function getName()
    {
        return 'css';
    }
}