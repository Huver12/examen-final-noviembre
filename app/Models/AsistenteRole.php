<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AsistenteRole
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Asistente[] $asistentes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AsistenteRole extends Model
{
    use SoftDeletes;

    protected $perPage = 20;
    public $table = 'asistente_roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistentes()
    {
        return $this->hasMany(\App\Models\Asistente::class, 'id', 'rol_id');
    }
    
}
