<?php

namespace Liip\ImagineBundle\Imagine\Cache;

use Liip\ImagineBundle\Binary\BinaryInterface;
use Liip\ImagineBundle\Imagine\Cache\Resolver\ResolverInterface;

interface CacheManagerInterface extends ResolverManagerInterface
{
    /**
     * Adds a resolver to handle cached images for the given filter.
     *
     * @param string $filter
     */
    public function addResolver($filter, ResolverInterface $resolver);

    /**
     * Gets filtered path for rendering in the browser.
     * It could be the cached one or an url of filter action.
     *
     * @param string $path          The path where the resolved file is expected
     * @param string $filter
     * @param string $resolver
     * @param int    $referenceType
     *
     * @return string
     */
    public function getBrowserPath($path, $filter, array $runtimeConfig = [], $resolver = null, $referenceType = UrlGeneratorInterface::ABSOLUTE_URL);

    /**
     * Get path to runtime config image.
     *
     * @param string $path
     *
     * @return string
     */
    public function getRuntimePath($path, array $runtimeConfig);

    /**
     * Returns a web accessible URL.
     *
     * @param string $path          The path where the resolved file is expected
     * @param string $filter        The name of the imagine filter in effect
     * @param string $resolver
     * @param int    $referenceType The type of reference to be generated (one of the UrlGenerator constants)
     *
     * @return string
     */
    public function generateUrl($path, $filter, array $runtimeConfig = [], $resolver = null, $referenceType = UrlGeneratorInterface::ABSOLUTE_URL);
}