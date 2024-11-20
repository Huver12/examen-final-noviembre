<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asistente
 *
 * @property $id
 * @property $evento_id
 * @property $nombre
 * @property $email
 * @property $rol_asistente_id
 * @property $created_at
 * @property $updated_at
 *
 * @property EventosCorporativo $eventosCorporativo
 * @property Catalogo $catalogo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asistente extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['evento_id', 'nombre', 'email', 'rol_asistente_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventosCorporativo()
    {
        return $this->belongsTo(\App\Models\EventosCorporativo::class, 'evento_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogo()
    {
        return $this->belongsTo(\App\Models\Catalogo::class, 'rol_asistente_id', 'id');
    }
    
}
