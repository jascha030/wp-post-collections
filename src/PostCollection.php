<?php

declare(strict_types=1);

namespace Jascha030\Collection\Post;

use Illuminate\Support\Collection;
use WP_Query;

class PostCollection extends Collection
{
    private function __construct($items)
    {
        parent::__construct(
            new WPQueryCollection(
            $items instanceof WP_Query
                ? $items
                : new WP_Query($items)
            )
        );
    }

    public static function fromArguments(array $arguments): PostCollection
    {
        return new static($arguments);
    }

    public static function fromQuery(WP_Query $query): PostCollection
    {
        return new static($query);
    }
}
