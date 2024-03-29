<?php

namespace MyAtomic\Storage\ShardingStrategy;

use MyAtomic\Storage\StorageKey;

class JumpHashSharding implements ShardingStategyInterface
{
    /**
     * @inheritdoc
     */
    public function getShard(StorageKey $key, int $numberOfShards):int
    {
        return jchash($key->getInt(), $numberOfShards);
    }
}
