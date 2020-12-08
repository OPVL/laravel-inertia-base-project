<?php

namespace App\Actions\User;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class CreateUser
{
    protected $class = User::class;

    public function execute(array $data): User
    {
        $data['password'] = bcrypt(
            Arr::get($data, 'password', base64_encode(
                Carbon::now()->unix() + config('auth.default_seed')
            ))
        );

        return $this->class::create($data);
    }
}
