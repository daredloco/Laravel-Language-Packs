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

    'accepted' => 'O :attribute deve ser aceito.',
    'accepted_if' => ' O :attribute deve ser aceito quando :other for :value.',
    'active_url' => 'O :attribute não é uma URL válida.',
    'after' => 'O :attribute deve ser feito depois de :date.',
    'after_or_equal' => 'O :attribute deve ser em uma data após ou igual a :date.',
    'alpha' => 'O :attribute deve conter apenas letras.',
    'alpha_dash' => 'O :attribute devem conter apenas letras, números, traços e sublinhados.',
    'alpha_num' => 'O :attribute devem conter apenas letras e números.',
    'array' => 'O :attribute deve ser uma matriz.',
    'before' => 'O :attribute deve ser uma data antes de :date.',
    'before_or_equal' => 'O :attribute deve ser uma data anterior ou igual a :date.',
    'entre' => 'O :attribute deve ser uma data entre :date :date.',
    'between' => [
        'array' => 'O :attribute deve ter entre :min e :max itens.',
        'file' => 'O :attribute deve estar entre :min e :max Kbytes.',
        'numeric' => 'O :attribute deve estar entre :min e :max.',
        'string' => 'O :attribute deve estar entre :min e :max caracteres.',
    ],
    'boolean' => 'O :attribute campo deve ser verdadeiro ou falso.',
    'confirmed' => 'O :attribute confirmação não foi encontrada.',
    'current_password' => 'Senha incorreta',
    'date' => 'O :attribute Não é uma data válida.',
    'date_equals' => 'O :attribute deve ser uma data igual a :date.',
    'date_format' => 'O :attribute não corresponde ao formato :format.',
    'declined' => 'O :attribute deve ser recusado.',
    'declined_if' => 'O :attribute deve ser recusado queo :oOr is :value.',
    'different' => 'O :attribute e :oOr devem ser diferentes.',
    'digits' => 'O :attribute deve ter :digits digitos.',
    'digits_entre' => 'O :attribute deve ser entre :min e :max digitos.',
    'dimensions' => 'O :attribute tem dimensões de imagens inválidas.',
    'distinct' => 'O :attribute campo com valor duplicado.',
    'email' => 'O :attribute deve ter um e-mail válido.',
    'ends_with' => 'O :attribute deve terminar com um dos seguintes: :values.',
    'enum' => 'O :attribute selecionado é inválido.',
    'exists' => 'O :attribute selecionado é inválido.',
    'file' => 'O :attribute deve ser um arquivo.',
    'filled' => 'O :attribute campo deve ter um valor.',
    'gt' => [
        'array' => 'O :attribute deve ter mais que :value itens.',
        'file' => 'O :attribute deve ser maior que :value Kbytes.',
        'numeric' => 'O :attribute deve ser maior que :value.',
        'string' => 'O :attribute deve ser maior que :value caracteres.',
    ],
    'gte' => [
        'array' => 'O :attribute deve ter :value itens ou mais.',
        'file' => 'O :attribute deve ser maior que ou igual à :value Kbytes.',
        'numeric' => 'O :attribute deve ser maior que ou igual à :value.',
        'string' => 'O :attribute deve ser maior que ou igual à :value caracteres.',
    ],
    'image' => 'O :attribute selecionado deve ser uma imagem.',
    'in' => 'O :attribute é inválido.',
    'in_array' => 'O :attribute campo não existe em:oOr.',
    'integer' => 'O :attribute deve ser inteiro.',
    'ip' => 'O :attribute deve ser um endereço de IP válido.',
    'ipv4' => 'O :attribute deve ser um endereço de IPv4 válido.',
    'ipv6' => 'O :attribute deve ser um endereço de IPv6 válido.',
    'json' => 'O :attribute deve ser uma corrente JSON .',
    'lt' => [
        'array' => 'O :attribute deve ser menor que :value itens.',
        'file' => 'O :attribute deve ser menor que :value kbytes.',
        'numeric' => 'O :attribute deve ser menor que :value.',
        'string' => 'O :attribute deve ser menor que :value caracteres.',
    ],
    'lte' => [
        'array' => 'O :attribute não deve ter mais de :value itens.',
        'file' => 'O :attribute deve ser menor ou igual à :value kbytes.',
        'numeric' => 'O :attribute deve ser menor ou igual à :value.',
        'string' => 'O :attribute deve ser menor ou igual à :value caracteres.',
    ],
    'mac_address' => 'O :attribute deve ser um endereço MAC valido.',
    'max' => [
        'array' => 'O :attribute não deve ser maior que :max itens.',
        'file' => 'O :attribute não deve ser maior que :max kbytes.',
        'numeric' => 'O :attribute não deve ser maior que :max.',
        'string' => 'O :attribute não deve ser maior que :max caracteres.',
    ],
    'mimes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O :attribute deve ser a arquivo do tipo: :values.',
    'min' => [
        'array' => 'O :attribute deve ser pelo menos :min itens.',
        'file' => 'O :attribute deve ter pelo menos :min kbytes.',
        'numeric' => 'O :attribute deve ter pelo menos :min.',
        'string' => 'O :attribute deve ter pelo menos :min caracteres.',
    ],
    'multiple_of' => 'O :attribute deve ser um multiplo de :value.',
    'not_in' => 'O :attribute selecionado é inválido.',
    'not_regex' => 'O :attribute formato é inválido.',
    'numeric' => 'O :attribute deve ser um numero.',
    'password' => [
        'letters' => 'O :attribute deve conter pelo menos uma letra.',
        'mixed' => 'O :attribute deve conter pelo menos um letra maiuscula e uma minuscula.',
        'numbers' => 'O :attribute deve conter pelo menos um number.',
        'symbols' => 'O :attribute deve conter pelo menos um simbolo.',
        'uncompromised' => 'O :attribute apareceu em um vazamento de dados. Por favor escolha um diferente :attribute.',
    ],
    'present' => 'O :attribute campo deve estar presente.',
    'prohibited' => 'O :attribute campo é proibido.',
    'prohibited_if' => 'O :attribute campo éproibido quando:oOr é :value.',
    'prohibited_unless' => 'O :attribute campo é proibido a não ser que :oOr esteja em :values.',
    'prohibits' => 'O :attribute campo proibido :oOr de estar presente.',
    'regex' => 'O :attribute formato é inválido.',
    'required' => 'O :attribute campo é necessário.',
    'required_array_keys' => 'O :attribute campo deve conter entradas para: :values.',
    'required_if' => 'O :attribute campo é necessário quando :oOr é :value.',
    'required_unless' => 'O :attribute campo é obrigatório a menos que :oOr seja em :values.',
    'required_with' => 'O :attribute campo é requerido quando :values está presente.',
    'required_with_all' => 'O :attribute campo é requerido quando :values estão presentes.',
    'required_without' => 'O :attribute campo é requerido quando :values não está presente.',
    'required_without_all' => 'O :attribute campo é requerido quando num of :values estão presentes.',
    'same' => 'O :attribute e :oOr devem combinar.',
    'size' => [
        'array' => 'O :attribute deve conter :size itens.',
        'file' => 'O :attribute deve ter :size kbytes.',
        'numeric' => 'O :attribute deve ter :size.',
        'string' => 'O :attribute deve ter :size caracteres.',
    ],
    'starts_with' => 'O :attribute deve começar com um dos seguintes :values.',
    'string' => 'O :attribute deve ser uma linha.',
    'timezum' => 'O :attribute deve ser um prazo valido.',
    'unique' => 'O :attribute ja foi tomada.',
    'uploaded' => 'O :attribute falhou no carregamento.',
    'url' => 'O :attribute deve ser uma URL valida.',
    'uuid' => 'O :attribute deve ser um UUID valido.',


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

];
