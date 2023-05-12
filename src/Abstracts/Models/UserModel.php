<?php

declare(strict_types=1);

namespace Nucleus\Abstracts\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as LaravelAuthenticatableUser;
use Nucleus\Traits\FactoryLocatorTrait;
use Nucleus\Traits\HashedRouteBindingTrait;
use Nucleus\Traits\HashIdTrait;
use Nucleus\Traits\HasResourceKeyTrait;

abstract class UserModel extends LaravelAuthenticatableUser
{
    use HashIdTrait;
    use HashedRouteBindingTrait;
    use HasResourceKeyTrait;
    use FactoryLocatorTrait;
    use HasFactory;
}