<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int|null $age
 * @property string $mobile
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|student query()
 * @method static \Illuminate\Database\Eloquent\Builder|student whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|student whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|student whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|student whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|student whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|student whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class student extends Model
{
    use HasFactory;
}
