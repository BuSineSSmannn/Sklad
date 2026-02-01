<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Permission extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'permissions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    /**
     * Получить локализованное название разрешения
     */
    public function getLocalizedTitleAttribute()
    {
        return __('global.permissions.' . $this->title) !== 'global.permissions.' . $this->title
            ? __('global.permissions.' . $this->title)
            : $this->title;
    }
}
