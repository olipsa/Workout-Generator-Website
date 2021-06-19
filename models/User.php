<?php

namespace models;

use core\DBModel;

class User extends DBModel
{
    public string $email ='';
    public string $password='';
    public string $confirmPass='';

    public function getTableName(): string
    {
        return 'users';
    }

    public function register(): bool
    {
        $this->save();
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'confirmPass' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']]
        ];
    }

    public function getAttributes(): array
    {
        return ['email', 'password'];
    }
}