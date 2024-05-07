<?php

namespace App\Models;

// 使うツールを取り込んでいます。
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carmodel;
use App\Http\Controllers\CarmodelController;

// Productという名前のツール（クラス）を作っています。
class Carmodel extends Model
{
    // ダミーレコードを代入する機能を使うことを宣言しています。
    use HasFactory;

    protected $table = 'car_model';

    protected $primaryKey = 'model_id','maker_id';

    // 以下の情報（属性）を一度に保存したり変更したりできるように設定しています。
    // $fillable を設定しないと、Laravelはセキュリティリスクを避けるために、この一括代入をブロックします。
    protected $fillable = [
        'model_id',
        'model_name',
        'maker_id',
        /*'price_24h',
        'color',
        'capacity',
        'handle',
        'displacement',
        'fuel',
        'size_l',
        'size_w',
        'size_h',
        'insurance deductible (property)',
        'insurance deductible (vehicle)',
        'noc_self-propelled',
        'noc_not-self-drive',
        'model_year',
        'new_flg',
        'Remarks',*/
    ];

    // Productモデルがsalesテーブルとリレーション関係を結ぶためのメソッドです
    /*public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    // Productモデルがcompanysテーブルとリレーション関係を結ぶ為のメソッドです
    public function company()
    {
        return $this->belongsTo(Company::class);
    }*/
}



