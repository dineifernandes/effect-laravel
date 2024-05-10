<?php


/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Models\EnvironmentModel;

/**
 * Class EnvironmentModel
 *
 * @property int $id
 * @property string nome
 * @property int $status
 * @property Carbon $data_cadastro
 * @property Carbon $data_update
 * @property int $ambiente_id
 * @package App\Models
 */
class CategoriasModel extends Model
{
    protected $table = 'categorias';
    public $timestamps = false;

    protected $casts = [
        'status' => 'int',
        'ambiente_id' => 'int',
        'data_cadastro' => 'datetime',
        'data_update' => 'datetime'
    ];

    protected $fillable = [
        'nome',
        'status',
        'data_cadastro',
        'data_update',
        'ambiente_id'
    ];

    public function ambiente()
    {
        return $this->belongsTo(EnvironmentModel::class);
    }

//    public function usuario()
//    {
//        return $this->belongsTo(UsuarioModel::class);
//    }

//    public function pessoas()
//    {
//        return $this->hasMany(PessoaModel::class);
//    }
}
