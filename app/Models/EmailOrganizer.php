<?php

namespace HiEvents\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class EmailOrganizer extends BaseModel
{
    use SoftDeletes;

    protected $table = 'email_organizer';

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }

    protected function getFillableFields(): array
    {
        return [
            'email',
            'uuid'
        ];
    }

    protected function getCastMap(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'uuid' => 'string'
        ];
    }
}
