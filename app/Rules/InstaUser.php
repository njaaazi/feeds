<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Http;


class InstaUser implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $url = 'https://www.instagram.com/'. $value .'/?__a=1';
        $response = Http::get($url)->json();
        $responseTest = Http::get($url);
        $responseTest->ok() : bool;
        $responseTest->clientError(): bool;
        $responseTest->successful() : bool;
        $responseTest->serverError() : bool;
        $responseTest->clientError() : bool;
        return $response != null;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This instagram user does not exist.';
    }
   
}
