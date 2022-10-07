<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class LoggerRepository extends BaseRepository
{
    public function model(): string
    {
        return "App\\Models\\Logger";
    }

    /**
     * @param $response
     * @param $status
     * @param $message
     * @return void
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function log($response = [], $status = 200, $message = '')
    {
        $this->create(['ip'               => request()->getClientIp(),
                       'user_agent'       => request()->header('User-Agent'),
                       "user_id"          => auth()->user()?->id,
                       'action'           => request()->route()->getAction(),
                       'uri'              => request()->url(),
                       'method'           => request()->method(),
                       'headers'          => request()->header(),
                       'payload'          => request()->input(),
                       'response_headers' => request()->header(),
                       'response_message' => $message,
                       'response_status'  => $status,
                       'response'         => $response]);
    }
}
