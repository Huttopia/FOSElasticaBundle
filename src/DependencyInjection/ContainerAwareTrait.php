<?php

/*
 * This file is part of the FOSElasticaBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\ElasticaBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Remplace Symfony\Component\DependencyInjection\ContainerAwareTrait, supprimé en Symfony 7.0.
 */
trait ContainerAwareTrait
{
    /**
     * @var ContainerInterface|null
     */
    protected $container;

    public function setContainer(?ContainerInterface $container = null): void
    {
        $this->container = $container;
    }
}
