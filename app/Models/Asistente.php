<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Asistente
 *
 * @property $id
 * @property $nombre
 * @property $email
 * @property $rol_id
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property AsistenteRole $asistenteRole
 * @property EventoCorporativosHasAsistente[] $eventoCorporativosHasAsistentes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asistente extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'email', 'rol_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function asistenteRole()
    {
        return $this->belongsTo(\App\Models\AsistenteRole::class, 'rol_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventoCorporativosHasAsistentes()
    {
        return $this->hasMany(\App\Models\EventoCorporativosHasAsistente::class, 'id', 'asistente_id');
    }
    
}
