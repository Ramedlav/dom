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

     'accepted' => 'Потрібно прийняти :attribute.',
     'accepted_if' => 'Атрибут :attribute повинен прийматися, якщо :other є :value.',
     'active_url' => ':attribute не є дійсною URL-адресою.',
     'after' => ':attribute має бути датою після :date.',
     'after_or_equal' => ':attribute має бути датою після або дорівнювати :date.',
     'alpha' => ':attribute має містити лише літери.',
     'alpha_dash' => ':attribute повинен містити лише літери, цифри, тире та підкреслення.',
     'alpha_num' => 'Поле :attribute має містити лише літери та цифри.',
     'array' => ':attribute має бути масивом.',
     'before' => ':attribute має бути датою перед :date.',
     'before_or_equal' => 'Поле :attribute має бути датою, що передує або дорівнює :date.',
     'між' => [
         'numeric' => 'Поле :attribute має бути між :min і :max.',
         'file' => 'Поле :attribute має бути між :min і :max кілобайтами.',
         'string' => 'Поле :attribute має бути між символами :min і :max.',
         'array' => 'Поле :attribute має містити між :min і :max елементами.',
     ],
     'boolean' => 'Поле :attribute має бути true або false.',
     'confirmed' => 'Підтвердження :attribute не збігається.',
     'current_password' => 'Пароль невірний.',
     'date' => ':attribute не є дійсною датою.',
     'date_equals' => 'Поле :attribute має бути датою, що дорівнює :date.',
     'date_format' => ':attribute не відповідає формату:format.',
     'declined' => ':attribute має бути відхилено.',
     'declined_if' => 'Атрибут :attribute має бути відхилений, якщо :other є :value.',
     'different' => 'Параметри :attribute і :other мають бути різними.',
     'digits' => ':attribute має бути :digits цифрами.',
     'digits_between' => 'Поле :attribute має бути між :min та :max цифрами.',
     'dimensions' => 'Атрибут :attribute має недійсні розміри зображення.',
     'distinct' => 'Поле :attribute має повторюване значення.',
     'email' => ':attribute має бути дійсною електронною адресою.',
     'ends_with' => 'Поле :attribute має закінчуватися одним із наступних: :values.',
     'enum' => 'Вибраний :attribute недійсний.',
     'exists' => 'Вибраний :attribute недійсний.',
     'file' => ':attribute має бути файлом.',
     'filled' => 'Поле :attribute повинно мати значення.',
     'gt' => [
         'numeric' => 'Параметр :attribute має бути більшим за :value.',
         'file' => 'Параметр :attribute має бути більшим за :value кілобайт.',
         'string' => 'Поле :attribute має бути більше ніж :value символів.',
         'array' => ':attribute повинен містити більше ніж :value елементів.',
     ],
     'gte' => [
         'numeric' => 'Поле :attribute має бути більше або дорівнювати :value.',
         'file' => 'Поле :attribute має бути більше або дорівнювати :value кілобайт.',
         'string' => 'Поле :attribute має бути більше або дорівнювати символам :value.',
         'array' => ':attribute повинен містити елементи :value або більше.',
     ],
     'image' => ':attribute має бути зображенням.',
     'in' => 'Вибраний :attribute недійсний.',
     'in_array' => 'Поле :attribute не існує в :other.',
     'integer' => 'Поле :attribute має бути цілим числом.',
     'ip' => ':attribute має бути дійсною IP-адресою.',
     'ipv4' => ':attribute має бути дійсною адресою IPv4.',
     'ipv6' => ':attribute має бути дійсною адресою IPv6.',
     'json' => ':attribute має бути дійсним рядком JSON.',
     'lt' => [
         'numeric' => 'Поле :attribute має бути менше за :value.',
         'file' => 'Поле :attribute має бути меншим за :value кілобайт.',
         'string' => 'Поле :attribute має містити менше символів :value.',
         'array' => ':attribute має містити менше ніж :value елементів.',
     ],
     'lte' => [
         'numeric' => 'Поле :attribute має бути менше або дорівнювати :value.',
         'file' => 'Поле :attribute має бути менше або дорівнювати :value кілобайт.',
         'string' => 'Поле :attribute має бути менше або дорівнювати символам :value.',
         'array' => ':attribute не може містити більше ніж :value елементів.',
     ],
     'mac_address' => ':attribute має бути дійсною MAC-адресою.',
     'max' => [
         'numeric' => 'Параметр :attribute не повинен перевищувати :max.',
         'file' => 'Параметр :attribute не повинен перевищувати :max кілобайт.',
         'string' => 'Поле :attribute не повинно перевищувати :max символів.',
         'array' => ':attribute не може містити більше ніж :max елементів.',
     ],
     'mimes' => ':attribute має бути файлом типу: :values.',
     'mimetypes' => ':attribute має бути файлом типу: :values.',
     'min' => [
         'numeric' => 'Поле :attribute має бути не менше :min.',
         'file' => 'Поле :attribute має бути не менше :min кілобайт.',
         'string' => 'Поле :attribute має містити принаймні :min символів.',
         'array' => ':attribute повинен містити принаймні :min елементів.',
     ],
     'multiple_of' => 'Поле :attribute має бути кратним :value.',
     'not_in' => 'Вибраний :attribute недійсний.',
     'not_regex' => 'Формат :attribute недійсний.',
     'numeric' => ':attribute має бути числом.',
     'password' => 'Пароль невірний.',
     'present' => 'Поле :attribute повинно бути присутнім.',
     'prohibited' => 'Поле :attribute заборонено.',
     'prohibited_if' => 'Поле :attribute заборонено, якщо :other дорівнює :value.',
     'prohibited_unless' => 'Поле :attribute заборонено, якщо :other не міститься в :values.',
     'prohibits' => 'Поле :attribute забороняє присутність :other.',
     'regex' => 'Формат :attribute недійсний.',
     'required' => 'Поле :attribute є обов\'язковим.',
     'required_array_keys' => 'Поле :attribute має містити записи для: :values.',
     'required_if' => 'Поле :attribute є обов\'язковим, якщо :other є :value.',
     'required_unless' => 'Поле :attribute є обов\'язковим, якщо :other не міститься в :values.',
     'required_with' => 'Поле :attribute є обов\'язковим, якщо присутній :values.',
     'required_with_all' => 'Поле :attribute є обов\'язковим, якщо присутні :values.',
     'required_without' => 'Поле :attribute є обов\'язковим, якщо немає :values.',
     'required_without_all' => 'Поле :attribute є обов\'язковим, якщо немає жодного з :values.',
     'same' => ':attribute і :other повинні збігатися.',
     'розмір' => [
         'numeric' => 'Поле :attribute має бути :size.',
         'file' => 'Поле :attribute має бути :size кілобайт.',
         'string' => 'Поле :attribute має містити символи :size.',
         'array' => ':attribute повинен містити елементи :size.',
     ],
     'starts_with' => 'Поле :attribute повинно починатися з одного з наступного: :values.',
     'string' => ':attribute має бути рядком.',
     'timezone' => 'Поле :attribute має бути дійсним часовим поясом.',
     'unique' => ':attribute вже використано.',
     'uploaded' => 'Не вдалося завантажити :attribute.',
     'url' => 'Поле :attribute має бути дійсною URL-адресою.',
     'uuid' => ':attribute має бути дійсним UUID.',

];
