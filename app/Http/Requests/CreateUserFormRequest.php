<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserFormRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */

    public function messages()
    {
        return [
            'first_name.required' => 'Voornaam is vereist',
            'last_name.required' => 'Achternaam is vereist',
            'function.required' => 'Functie is vereist',
            'date_of_birth.required' => 'Geboortedatum is vereist',
            'postal_code.required' => 'Postcode is vereist',
            'housenumber.required' => 'Huisnummer is vereist',
            'street.required' => 'Straat is vereist',
            'residence.required' => 'Woonplaats is vereist',
            'email.required' => 'E-mail is vereist',
            'phone_number.required' => 'Telefoonnummer is vereist',
            'username.required' => 'Gebruikersnaam is vereist',
            'password.required' => 'Wachtwoord is vereist',
            'password2.required' => 'Wachtwoord herhalen is vereist',

        ];
    }

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
		return [
			'first_name' => 'required',
            'last_name' => 'required',
            'function' => 'required',
            'date_of_birth' => 'required',
            'postal_code' => 'required',
            'housenumber' => 'required',
            'street' => 'required',
            'residence' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'username' => 'required',
            'password' => 'required',
            'password2' => 'required',
		];

	}

}
