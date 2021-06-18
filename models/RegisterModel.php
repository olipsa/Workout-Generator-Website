<?php


namespace models;


use core\Model;

class RegisterModel extends Model
{
    public string $email ='';
    public string $pass='';
    public string $confirmPass='';

    public function register()
    {
        return 'Creating new user';
    }

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'pass' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'confirmPass' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'pass']]
        ];
    }
}