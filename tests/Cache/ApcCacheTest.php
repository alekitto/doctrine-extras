<?php

namespace Kcs\Doctrine\Cache;

use Doctrine\Tests\Common\Cache\CacheTest;
use Kcs\Doctrine\Cache\ApcuCache;

/**
 * @requires extension apcu
 */
class ApcuCacheTest extends CacheTest
{
    protected function _getCacheDriver()
    {
        return new ApcuCache();
    }

    public function testLifetime()
    {
        $this->markTestSkipped('The APCu cache TTL is not working in a single process/request. See https://bugs.php.net/bug.php?id=58084');
    }
}
