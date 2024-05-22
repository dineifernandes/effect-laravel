<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CompanyModel
 *
 * @property int $id
 * @property string empresa_id
 * @property int $status
 * @property Carbon $data_cadastro
 * @property Carbon $data_update
 * @package App\Models
 */
class FotosEmpresaModel extends Model
{

    protected $table = 'fotosempresa';
    public $timestamps = false;


    protected $casts = [
        'status' => 'int',
        'empresa_id' => 'int',
        'data_cadastro' => 'datetime',
        'data_update' => 'datetime'
    ];

    protected $fillable = [
        'empresa_id',
        'foto',
        'data_cadastro',
        'data_update',
        'status',
    ];

    public function company()
    {
        return $this->belongsTo(CompanyModel::class, 'empresa_id');
    }
}

?>
