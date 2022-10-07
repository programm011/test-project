<?php

namespace App\Services;

use App\Repositories\LoggerRepository;
use App\Jobs\LoggerJob;

class LoggerService extends BaseService
{
    public function __construct(
        LoggerRepository $repository,
    ) {
        parent::__construct($repository);
    }

    public function log($response = [], $status = 200, $message = '')
    {
        LoggerJob::dispatchAfterResponse($response, $status, $message);
    }

}
