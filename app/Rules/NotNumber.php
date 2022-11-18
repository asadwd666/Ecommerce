<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class NotNumber implements InvokableRule
{
    /**
     * Indicates whether the rule should be implicit.
     *
     * @var bool
     */
    public $implicit = true;

    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        // dd($value);
      
        if (is_numeric($value)){
           
            $fail('Please Provide a valid :attribute ');
        }
    }
}
