<?php

namespace App\Http\Requests;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {

        $user = User::find($this->users);
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'role_id'=>'required',
                    'is_active'=>'required',
                    'password'=>'required|confirmed|min:5',
                    'password_confirmation'=>''
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name' => 'required',
                    'email'=>'required|email|unique:users,email,' . $this->get('id'),
                    'role_id'=>'required' ,
                    'is_active'=>'required' ,
                    'password'=>'confirmed',
                    'password_confirmation'=>''
                ];
            }
            default:break;
        }
    }
}
