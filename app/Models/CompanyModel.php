<?php


/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CompanyModel
 *
 * @property int $id
 * @property string nome
 * @property int $status
 * @property Carbon $data_cadastro
 * @property Carbon $data_update
 * @package App\Models
 */
class CompanyModel extends Model
{
    protected $table = 'empresa';
    public $timestamps = false;

    protected $casts = [
        'status' => 'int',
        'data_cadastro' => 'datetime',
        'data_update' => 'datetime'
    ];

    protected $fillable = [
        'nome',
        'razao_social',
        'logo',
        'slogan',
        'historia',
        'proposito',
        'missao',
        'visao',
        'valores',
        'video_institucional',
        'data_cadastro',
        'data_update',
        'status',
    ];

//    public function usuario()
//    {
//        return $this->belongsTo(UsuarioModel::class);
//    }

//    public function pessoas()
//    {
//        return $this->hasMany(PessoaModel::class);
//    }
}
