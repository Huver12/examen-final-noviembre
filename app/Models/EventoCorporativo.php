<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EventoCorporativo
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $fecha
 * @property $tipo_id
 * @property $tipo_evento_id
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property EventoCorporativoTipo $eventoCorporativoTipo
 * @property EventoCorporativosHasAsistente[] $eventoCorporativosHasAsistentes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EventoCorporativo extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'descripcion', 'fecha', 'tipo_id', 'tipo_evento_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventoCorporativoTipo()
    {
        return $this->belongsTo(\App\Models\EventoCorporativoTipo::class, 'tipo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventoCorporativosHasAsistentes()
    {
        return $this->hasMany(\App\Models\EventoCorporativosHasAsistente::class, 'id', 'evento_id');
    }
    
}
