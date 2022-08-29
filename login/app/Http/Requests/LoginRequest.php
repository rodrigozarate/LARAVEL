<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_name' => 'required',
            'password' => 'required'
        ];
    }

    public function getCredentials(){
        $user_name = $this->get('user_name');

        if($this->isEmail($user_name)){
            return [
                'email' => $user_name,
                'password' => $this->get('password')
            ];
        }
        return $this->only('user_name', 'password');
    }

    public function isEmail($value){
        $factory = $this->container->make(ValidationFactory::class);

        return !$factory->make(['user_name' => $value],['user_name' => 'email'])->fails();
    }
}
