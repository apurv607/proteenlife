<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TeenagerPasswordChangeRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
            return [
                'old_password'         => 'min : 6',
                'new_password'    => 'required | min : 6',
                'confirm_password'    => 'required | same:new_password',
           ];
    }
    
}
