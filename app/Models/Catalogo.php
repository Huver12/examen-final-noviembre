<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Catalogo
 *
 * @property $id
 * @property $nombre
 * @property $tipo_catalogo
 * @property $created_at
 * @property $updated_at
 *
 * @property Asistente[] $asistentes
 * @property EventosCorporativo[] $eventosCorporativos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Catalogo extends Model
{
    
    protected $perPage = 20;
    public $table = 'catalogo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'tipo_catalogo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistentes()
    {
        return $this->hasMany(\App\Models\Asistente::class, 'id', 'rol_asistente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventosCorporativos()
    {
        return $this->hasMany(\App\Models\EventosCorporativo::class, 'id', 'tipo_evento_id');
    }
    
}
