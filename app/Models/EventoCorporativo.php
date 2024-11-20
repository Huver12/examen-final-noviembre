<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EventoCorporativo
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $fecha
 * @property $tipo_evento_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Catalogo $catalogo
 * @property Asistente[] $asistentes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EventoCorporativo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'descripcion', 'fecha', 'tipo_evento_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogo()
    {
        return $this->belongsTo(\App\Models\Catalogo::class, 'tipo_evento_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistentes()
    {
        return $this->hasMany(\App\Models\Asistente::class, 'id', 'evento_corporativos_id');
    }
    
}
