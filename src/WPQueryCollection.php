<?php

declare(strict_types=1);

namespace Jascha030\Collection\Post;

use Illuminate\Support\Collection;
use WP_Query;

class WPQueryCollection extends Collection
{
    public function __construct(WP_Query $query)
    {
        parent::__construct($query->get_posts());
    }
}
