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

     'accepted' => ' :attribute moet geaccepteerd worden.',
     'accepted_if' => ' :attribute moet geaccepteerd worden als :other :value is.',
     'active_url' => ' :attribute is geen geldige URL.',
     'after' => 'De :attribute moet een datum na :date zijn.',
     'after_or_equal' => ' :attribute moet een datum na of gelijk aan :date zijn.',
     'alpha' => ' :attribute mag alleen letters bevatten.',
     'alpha_dash' => ' :attribute mag alleen letters, cijfers, streepjes en underscores bevatten.',
     'alpha_num' => ' :attribute mag alleen letters en cijfers bevatten.',
     'array' => ' :attribute moet een array zijn.',
     'before' => 'De :attribute moet een datum zijn vóór :date.',
     'before_or_equal' => ' :attribute moet een datum zijn vóór of gelijk aan :date.',
     'tussen' => [
         'numeric' => ' :attribute moet tussen :min en :max liggen.',
         'file' => ' :attribute moet tussen :min en :max kilobytes zijn.',
         'string' => ' :attribute moet tussen :min en :max tekens staan.',
         'array' => ' :attribute moet tussen :min en :max items bevatten.',
     ],
     'boolean' => 'Het veld :attribute moet waar of niet waar zijn.',
     'confirmed' => 'De :attribute bevestiging komt niet overeen.',
     'current_password' => 'Het wachtwoord is onjuist.',
     'date' => ' :attribute is geen geldige datum.',
     'date_equals' => 'De :attribute moet een datum zijn die gelijk is aan :date.',
     'date_format' => ' :attribute komt niet overeen met formaat :format.',
     'declined' => ' :attribute moet geweigerd worden.',
     'declined_if' => ' :attribute moet geweigerd worden als :other :value is.',
     'different' => ' :attribute en :other moeten verschillend zijn.',
     'digits' => ' :attribute moet :digits digits zijn.',
     'digits_between' => ' :attribute moet tussen :min en :max cijfers liggen.',
     'dimensions' => ' :attribute heeft ongeldige afbeeldingsafmetingen.',
     'distinct' => 'Het veld :attribute heeft een dubbele waarde.',
     'email' => 'Het :attribute moet een geldig e-mailadres zijn.',
     'ends_with' => ' :attribute moet eindigen op een van de volgende: :values.',
     'enum' => 'Het geselecteerde :attribute is ongeldig.',
     'exists' => 'Het geselecteerde :attribute is ongeldig.',
     'file' => ' :attribute moet een bestand zijn.',
     'filled' => 'Het veld :attribute moet een waarde hebben.',
     'gt' => [
         'numeric' => ' :attribute moet groter zijn dan :value.',
         'file' => ' :attribute moet groter zijn dan :value kilobytes.',
         'string' => ' :attribute moet groter zijn dan :value karakters.',
         'array' => ' :attribute moet meer dan :value items bevatten.',
     ],
     'gte' => [
         'numeric' => ' :attribute moet groter zijn dan of gelijk zijn aan :value.',
         'file' => ' :attribute moet groter zijn dan of gelijk zijn aan :value kilobytes.',
         'string' => ' :attribute moet groter zijn dan of gelijk zijn aan :value karakters.',
         'array' => ' :attribute moet :value items of meer hebben.',
     ],
     'image' => 'De :attribute moet een afbeelding zijn.',
     'in' => 'Het geselecteerde :attribute is ongeldig.',
     'in_array' => 'Het veld :attribute bestaat niet in :other.',
     'integer' => ' :attribute moet een geheel getal zijn.',
     'ip' => 'Het :attribute moet een geldig IP-adres zijn.',
     'ipv4' => ' :attribute moet een geldig IPv4-adres zijn.',
     'ipv6' => ' :attribute moet een geldig IPv6-adres zijn.',
     'json' => ':attribute moet een geldige JSON-string zijn.',
     'het' => [
         'numeric' => ' :attribute moet kleiner zijn dan :value.',
         'file' => ' :attribute moet kleiner zijn dan :value kilobytes.',
         'string' => ' :attribute moet kleiner zijn dan :value karakters.',
         'array' => ' :attribute moet minder dan :value items bevatten.',
     ],
     'lte' => [
         'numeric' => ' :attribute moet kleiner zijn dan of gelijk zijn aan :value.',
         'file' => ' :attribute moet kleiner zijn dan of gelijk zijn aan :value kilobytes.',
         'string' => ' :attribute moet kleiner zijn dan of gelijk zijn aan :value tekens.',
         'array' => ' :attribute mag niet meer dan :value items bevatten.',
     ],
     'mac_address' => ' :attribute moet een geldig MAC-adres zijn.',
     'max' => [
         'numeric' => ' :attribute mag niet groter zijn dan :max.',
         'file' => ' :attribute mag niet groter zijn dan :max kilobytes.',
         'string' => ' :attribute mag niet groter zijn dan :max karakters.',
         'array' => ' :attribute mag niet meer dan :max items bevatten.',
     ],
     'mimes' => 'De :attribute moet een bestand zijn van het type: :values.',
     'mimetypes' => 'De :attribute moet een bestand zijn van het type: :values.',
     'min' => [
         'numeric' => ' :attribute moet minimaal :min zijn.',
         'file' => ' :attribute moet minstens :min kilobytes zijn.',
         'string' => ' :attribute moet minstens :min tekens bevatten.',
         'array' => ' :attribute moet minstens :min items bevatten.',
     ],
     'multiple_of' => ' :attribute moet een veelvoud zijn van :value.',
     'not_in' => 'Het geselecteerde :attribute is ongeldig.',
     'not_regex' => 'Het :attribute formaat is ongeldig.',
     'numeric' => ' :attribute moet een getal zijn.',
     'password' => 'Het wachtwoord is onjuist.',
     'present' => 'Het veld :attribute moet aanwezig zijn.',
     'prohibited' => 'Het veld :attribute is niet toegestaan.',
     'prohibited_if' => 'Het veld :attribute is verboden wanneer :other :value is.',
     'prohibited_unless' => 'Het veld :attribute is niet toegestaan tenzij :other in :values staat.',
     'prohibits' => 'Het :attribute veld verbiedt :other om aanwezig te zijn.',
     'regex' => 'De indeling :attribute is ongeldig.',
     'required' => 'Het veld :attribute is verplicht.',
     'required_array_keys' => 'Het :attribute veld moet ingangen bevatten voor: :values.',
     'required_if' => 'Het veld :attribute is verplicht wanneer :other :value is.',
     'required_unless' => 'Het :attribute veld is verplicht tenzij :other in :values staat.',
     'required_with' => 'Het veld :attribute is verplicht wanneer :values aanwezig is.',
     'required_with_all' => 'Het veld :attribute is vereist wanneer :values aanwezig zijn.',
     'required_without' => 'Het veld :attribute is vereist wanneer :values niet aanwezig is.',
     'required_without_all' => 'Het veld :attribute is verplicht als geen van de :values aanwezig is.',
     'same' => ' :attribute en :other moeten overeenkomen.',
     'maat' => [
         'numeric' => ' :attribute moet :size zijn.',
         'file' => ' :attribute moet :size kilobytes zijn.',
         'string' => ' :attribute moet :size karakters zijn.',
         'array' => ' :attribute moet :size items bevatten.',
     ],
     'starts_with' => ' :attribute moet beginnen met een van de volgende: :values.',
     'string' => ' :attribute moet een string zijn.',
     'timezone' => ' :attribute moet een geldige tijdzone zijn.',
     'unique' => ' :attribute is al in gebruik.',
     'uploaded' => 'De :attribute kon niet worden geüpload.',
     'url' => 'De :attribute moet een geldige URL zijn.',
     'uuid' => ' :attribute moet een geldige UUID zijn.',
];
