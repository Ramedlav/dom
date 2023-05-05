<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

     'accepted' => 'Pole :attribute musi zostać zaakceptowane.',
     'accepted_if' => 'Pole :attribute musi zostać zaakceptowane, gdy :other to :value.',
     'active_url' => 'Pole :attribute nie jest prawidłowym adresem URL.',
     'after' => 'Pole :attribute musi być datą następującą po :date.',
     'after_or_equal' => 'Pole :attribute musi być datą późniejszą lub równą :date.',
     'alpha' => 'Pole :attribute może zawierać tylko litery.',
     'alpha_dash' => 'Pole :attribute może zawierać tylko litery, cyfry, myślniki i podkreślenia.',
     'alpha_num' => 'Pole :attribute może zawierać tylko litery i cyfry.',
     'array' => 'Pole :attribute musi być tablicą.',
     'before' => 'Pole :attribute musi być datą wcześniejszą niż :date.',
     'before_or_equal' => 'Pole :attribute musi być datą wcześniejszą lub równą :date.',
     'między' => [
         'numeric' => 'Pole :attribute musi zawierać się w przedziale od :min do :max.',
         'file' => 'Pole :attribute musi zawierać się w przedziale od :min do :max kilobajtów.',
         'string' => 'Pole :attribute musi zawierać się w przedziale od :min do :max znaków.',
         'array' => 'Pole :attribute musi zawierać elementy pomiędzy :min a :max.',
     ],
     'boolean' => 'Pole :attribute musi być prawdziwe lub fałszywe.',
     'confirmed' => 'Potwierdzenie :attribute nie pasuje.',
     'current_password' => 'Hasło jest nieprawidłowe.',
     'date' => 'Pole :attribute nie jest prawidłową datą.',
     'date_equals' => 'Pole :attribute musi być datą równą :date.',
     'date_format' => 'Pole :attribute nie pasuje do formatu :format.',
     'declined' => 'Pole :attribute musi zostać odrzucone.',
     'declined_if' => 'Pole :attribute musi zostać odrzucone, gdy :other to :value.',
     'different' => 'Pole :attribute i :other muszą być różne.',
     'digits' => 'Pole :attribute musi mieć postać :digits digits.',
     'digits_between' => 'Pole :attribute musi zawierać się w przedziale od :min do :max cyfr.',
     'dimensions' => 'Pole :attribute ma nieprawidłowe wymiary obrazu.',
     'distinct' => 'Pole :attribute ma zduplikowaną wartość.',
     'email' => 'Pole :attribute musi być poprawnym adresem e-mail.',
     'ends_with' => 'Pole :attribute musi kończyć się jednym z następujących: :values.',
     'enum' => 'Wybrany :atrybut jest nieprawidłowy.',
     'exists' => 'Wybrany :atrybut jest nieprawidłowy.',
     'file' => 'Pole :attribute musi być plikiem.',
     'filled' => 'Pole :attribute musi mieć wartość.',
     'gt' => [
         'numeric' => 'Pole :attribute musi być większe niż :value.',
         'file' => 'Pole :attribute musi być większe niż :value kilobajtów.',
         'string' => 'Pole :attribute musi być większe niż :value znaków.',
         'array' => 'Pole :attribute musi zawierać więcej elementów niż :value.',
     ],
     'gte' => [
         'numeric' => 'Pole :attribute musi być większe lub równe :value.',
         'file' => 'Pole :attribute musi być większe lub równe :value kilobajtów.',
         'string' => 'Pole :attribute musi być większe lub równe :value znaków.',
         'array' => 'Pole :attribute musi zawierać elementy :value lub więcej.',
     ],
     'image' => 'Pole :attribute musi być obrazem.',
     'in' => 'Wybrany :atrybut jest nieprawidłowy.',
     'in_array' => 'Pole :attribute nie istnieje w :other.',
     'integer' => 'Pole :attribute musi być liczbą całkowitą.',
     'ip' => 'Pole :attribute musi być poprawnym adresem IP.',
     'ipv4' => 'Pole :attribute musi być poprawnym adresem IPv4.',
     'ipv6' => 'Pole :attribute musi być poprawnym adresem IPv6.',
     'json' => 'Pole :attribute musi być poprawnym łańcuchem JSON.',
     'lt' => [
         'numeric' => 'Pole :attribute musi być mniejsze niż :value.',
         'file' => 'Pole :attribute musi być mniejsze niż :value kilobajtów.',
         'string' => 'Pole :attribute musi być mniejsze niż :value znaków.',
         'array' => 'Pole :attribute musi mieć mniej niż :value elementów.',
     ],
     'lte' => [
         'numeric' => 'Pole :attribute musi być mniejsze lub równe :value.',
         'file' => 'Pole :attribute musi być mniejsze lub równe :value kilobajtów.',
         'string' => 'Pole :attribute musi być mniejsze lub równe :value znaków.',
         'array' => 'Pole :attribute nie może zawierać więcej niż :value pozycji.',
     ],
     'mac_address' => 'Pole :attribute musi być poprawnym adresem MAC.',
     'maks' => [
         'numeric' => 'Pole :attribute nie może być większe niż :max.',
         'file' => 'Pole :attribute nie może być większe niż :max kilobajtów.',
         'string' => 'Pole :attribute nie może być większe niż :max znaków.',
         'array' => 'Pole :attribute nie może zawierać więcej niż :max elementów.',
     ],
     'mimes' => 'Pole :attribute musi być plikiem typu: :values.',
     'mimetypes' => 'Pole :attribute musi być plikiem typu: :values.',
     'min' => [
         'numeric' => 'Pole :attribute musi mieć co najmniej :min.',
         'file' => 'Pole :attribute musi mieć co najmniej :min kilobajtów.',
         'string' => 'Pole :attribute musi mieć co najmniej :min znaków.',
         'array' => 'Pole :attribute musi mieć co najmniej :min elementów.',
     ],
     'multiple_of' => 'Pole :attribute musi być wielokrotnością :value.',     'not_in' => 'Wybrany :atrybut jest nieprawidłowy.',
     'not_regex' => 'Format :attribute jest nieprawidłowy.',
     'numeric' => 'Pole :attribute musi być liczbą.',
     'password' => 'Hasło jest nieprawidłowe.',
     'present' => 'Pole :attribute musi być obecne.',
     'prohibited' => 'Pole :attribute jest zabronione.',
     'prohibited_if' => 'Pole :attribute jest zabronione, gdy :other to :value.',
     'prohibited_unless' => 'Pole :attribute jest zabronione, chyba że :other jest w :values.',
     'prohibits' => 'Pole :attribute zabrania obecności :other.',
     'regex' => 'Format :attribute jest nieprawidłowy.',
     'required' => 'Pole :attribute jest wymagane.',
     'required_array_keys' => 'Pole :attribute musi zawierać wpisy dla: :values.',
     'required_if' => 'Pole :attribute jest wymagane, gdy :other to :value.',
     'required_unless' => 'Pole :attribute jest wymagane, chyba że :other jest w :values.',
     'required_with' => 'Pole :attribute jest wymagane, gdy obecne jest :values.',
     'required_with_all' => 'Pole :attribute jest wymagane, gdy obecne są :values.',
     'required_without' => 'Pole :attribute jest wymagane, gdy nie ma :values.',
     'required_without_all' => 'Pole :attribute jest wymagane, gdy nie ma żadnych :wartości.',
     'same' => 'Pole :attribute i :other muszą być zgodne.',
     'rozmiar' => [
         'numeric' => 'Pole :attribute musi mieć wartość :size.',
         'file' => 'Pole :attribute musi mieć wartość :size kilobajtów.',
         'string' => 'Pole :attribute musi mieć postać :size znaków.',
         'array' => 'Pole :attribute musi zawierać elementy :size.',
     ],
     'starts_with' => 'Pole :attribute musi zaczynać się od jednego z poniższych: :values.',
     'string' => 'Pole :attribute musi być ciągiem znaków.',
     'timezone' => 'Pole :attribute musi być prawidłową strefą czasową.',
     'unique' => 'Pole :attribute zostało już zajęte.',
     'uploaded' => 'Przesłanie :attribute nie powiodło się.',
     'url' => 'Pole :attribute musi być prawidłowym adresem URL.',
     'uuid' => 'Pole :attribute musi być prawidłowym identyfikatorem UUID.',
];
