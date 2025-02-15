<?php

declare(strict_types=1);

namespace EventSauce\ObjectHydrator;

interface PropertyCaster
{
    public function cast(mixed $value, ObjectHydrator $hydrator): mixed;
}
