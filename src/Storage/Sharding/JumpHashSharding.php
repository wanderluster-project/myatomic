<?php

namespace MyAtomic\Storage\Sharding;

use MyAtomic\Storage\StorageKey;

class JumpHashSharding implements ShardingStategyInterface
{
    /**
     * @inheritdoc
     */
    public function getShard(StorageKey $key, $numberOfShards):int
    {
        return jchash($key->getInt(), $numberOfShards);
    }
}
