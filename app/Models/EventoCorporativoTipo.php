<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EventoCorporativoTipo
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property EventoCorporativo[] $eventoCorporativos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EventoCorporativoTipo extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventoCorporativos()
    {
        return $this->hasMany(\App\Models\EventoCorporativo::class, 'id', 'tipo_id');
    }
    
}
