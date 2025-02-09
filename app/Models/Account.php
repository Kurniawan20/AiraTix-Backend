<?php

declare(strict_types=1);

namespace HiEvents\Models;

use HiEvents\DomainObjects\Enums\Role;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Account extends BaseModel
{
    protected function getCastMap(): array
    {
        return [
            'account_verified_at' => 'datetime',
            'stripe_connect_setup_complete' => 'boolean'
        ];
    }

    protected function getFillableFields(): array
    {
        return [
            'name',
            'email',
            'currency_code',
            'timezone',
            'stripe_account_id',
            'short_id',
            'stripe_connect_setup_complete',
            'account_verified_at'
        ];
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'account_users')
            ->withPivot('role')
            ->withTimestamps();
    }

    public function usersByRole(Role $roleName): BelongsToMany
    {
        return $this->users()->wherePivot('role', '=', $roleName->name);
    }
}
