<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Logger
 *
 * @property int $id
 * @property string $ip
 * @property string $user_agent
 * @property int|null $user_id
 * @property array $action
 * @property string $uri
 * @property string $method
 * @property array $headers
 * @property array|null $payload
 * @property array|null $response
 * @property int|null $response_status
 * @property string|null $response_message
 * @property Carbon $date
 * @property-read mixed $happened
 * @property-read User|null $user
 * @method static Builder|Logger newModelQuery()
 * @method static Builder|Logger newQuery()
 * @method static Builder|Logger query()
 * @method static Builder|Logger whereAction($value)
 * @method static Builder|Logger whereDate($value)
 * @method static Builder|Logger whereHeaders($value)
 * @method static Builder|Logger whereId($value)
 * @method static Builder|Logger whereIp($value)
 * @method static Builder|Logger whereMethod($value)
 * @method static Builder|Logger wherePayload($value)
 * @method static Builder|Logger whereResponse($value)
 * @method static Builder|Logger whereResponseMessage($value)
 * @method static Builder|Logger whereResponseStatus($value)
 * @method static Builder|Logger whereUri($value)
 * @method static Builder|Logger whereUserAgent($value)
 * @method static Builder|Logger whereUserId($value)
 * @mixin \Eloquent
 */
class Logger extends Model
{

    protected $table = 'logger';

    protected $fillable = ['ip',
                           'user_agent',
                           'user_id',
                           'action',
                           'uri',
                           'method',
                           'headers',
                           'payload',
                           'response',
                           'response_status',
                           'response_message'];

    protected $casts = [
        'date'     => 'datetime:Y-m-d H:i:s',
        'action'   => 'array',
        'headers'  => 'array',
        'payload'  => 'array',
        'response' => 'array',
    ];

    protected $dates = ['date'];

    public $timestamps = false;

    protected array $searchable = [
        'uri',
        'user_agent',
        'response_message',
    ];

    protected $appends = ['happened'];

    //show diff with date at now method Happened

    /**
     * @return string
     */
    public function getHappenedAttribute(): string
    {
        return $this->date->diffForHumans();
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
