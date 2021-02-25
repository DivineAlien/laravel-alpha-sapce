<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AlphaSpace implements Rule
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
        return count(preg_grep(
            // * Only  alphabets, numbers and space
            // * english (upper and lower), persian unicode, space
            "/^[\p{Ll}\p{Lu}\p{N}\x{0621}\x{0627}\x{0649}\x{066E}\x{062D}\x{0633}\x{0635}\x{0637}\x{0639}\x{06A1}\x{066F}\x{0644}\x{0645}\x{062F}\x{0631}\x{0648}\x{0647}\x{0628}\x{062C}\x{0646}\x{062E}\x{0636}\x{0638}\x{063A}\x{0641}\x{0630}\x{0632}\x{06CC}\x{062A}\x{0642}\x{0629}\x{067E}\x{0686}\x{062B}\x{0634}\x{0698}\x{06AF}\x{0621}\x{0627}\x{0649}\x{06BA}\x{062D}\x{0633}\x{0635}\x{0637}\x{0639}\x{066F}\x{0644}\x{0644}\x{0645}\x{062F}\x{0631}\x{0648}\x{0647}\x{0622}\x{0625}\x{0623}\x{0626}\x{0624}\x{06C0}\x{FBB2}\x{FBB3}\x{FBB4}\x{FBB5}\x{FBB6}\x{FBB7}\x{FBB9}\x{203E}\x{06E4}\x{0653}\x{0654}\x{0655}\x{0674}\x{06F0}\x{06F1}\x{06F2}\x{06F3}\x{06F4}\x{06F5}\x{06F6}\x{06F7}\x{06F8}\x{06F9}\x{06A9}\s]+$/u",
            [$value,]
        ));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'the :attribute may contains only perisan or english characters and space';
    }
}
