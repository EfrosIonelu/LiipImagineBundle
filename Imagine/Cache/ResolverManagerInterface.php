<?php

namespace Liip\ImagineBundle\Imagine\Cache;

interface ResolverManagerInterface
{
    /**
     * Checks whether the path is already stored within the respective Resolver.
     *
     * @param string $path
     * @param string $filter
     * @param string $resolver
     *
     * @return bool
     */
    public function isStored($path, $filter, $resolver = null);

    /**
     * Resolves filtered path for rendering in the browser.
     *
     * @param string $path
     * @param string $filter
     * @param string $resolver
     *
     * @return string The url of resolved image
     * @throws NotFoundHttpException if the path can not be resolved
     *
     */
    public function resolve($path, $filter, $resolver = null);

    /**
     * @param string $path
     * @param string $filter
     * @param string $resolver
     * @see ResolverInterface::store
     *
     */
    public function store(BinaryInterface $binary, $path, $filter, $resolver = null);

    /**
     * @param string|string[]|null $paths
     * @param string|string[]|null $filters
     */
    public function remove($paths = null, $filters = null);
}