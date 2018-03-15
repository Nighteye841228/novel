<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Novel
 *
 * @property int $id
 * @property string $name
 * @property string $apply_start 報名開始時間
 * @property string $apply_end 報名結束時間
 * @property string $type 規則類型
 * @property string $num_content 定義每一家數目，且有開始、結束上傳時間，及可否遲交
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Novel whereApplyEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Novel whereApplyStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Novel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Novel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Novel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Novel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Novel whereNumContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Novel whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Novel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Novel extends Model
{
    //
}
