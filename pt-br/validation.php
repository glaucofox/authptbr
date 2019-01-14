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

    'accepted' => 'O campo :attribute deve ser aceito.',
    'active_url' => 'O campo :attribute n&atilde;o &eacute; uma URL v&aacute;lida.',
    'after' => 'O campo :attribute deve ter a data posterior a :date.',
    'after_or_equal' => 'O campo :attribute deve ter a data igual ou posterior a :date.',
    'alpha' => 'O campo :attribute aceita apenas letras.',
    'alpha_dash' => 'O campo :attribute aceita apenas letras, n&uacute;meros, tra&ccedil;os e underline.',
    'alpha_num' => 'O campo :attribute aceita apenas letras e n&uacute;meros.',
    'array' => 'O campo :attribute deve ser um array.',
    'before' => 'O campo :attribute deve ter a data anterior a :date.',
    'before_or_equal' => 'O campo :attribute deve ter a data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O campo :attribute deve estar entre :min e :max.',
        'file' => 'O campo :attribute deve estar entre :min e :max kilobytes.',
        'string' => 'O campo :attribute deve estar entre :min e :max caracteres.',
        'array' => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'O campo :attribute, a confirma&ccedil;&atilde;o n&atilde;o confere.',
    'date' => 'O campo :attribute não possui data v&aacute;lida.',
    'date_equals' => 'O campo :attribute deve ter data igual a :date.',
    'date_format' => 'O campo :attribute n&atilde;o corresponde ao formato :format.',
    'different' => 'O campo :attribute e :other devem ser diferentes.',
    'digits' => 'O campo :attribute deve ter :digits d&iacute;gitos.',
    'digits_between' => 'O campo :attribute deve estar entre :min e :max d&iacute;gitos.',
    'dimensions' => 'O campo :attribute cont&eacute;m dimens&otilde;es de imagem inv&aacute;lidas.',
    'distinct' => 'O campo :attribute est&aacute; com valor duplicado.',
    'email' => 'O campo :attribute deve conter endere&ccedil;o de e-mail v&aacute;lido.',
    'exists' => 'O campo :attribute selecionado &eacute; inv&aacute;lido.',
    'file' => 'O campo :attribute deve ser um arquivo.',
    'filled' => 'O campo :attribute deve ter um valor atribu&iacute;do.',
    'gt' => [
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'file' => 'O campo :attribute deve ser maior que :value kilobytes.',
        'string' => 'O campo :attribute deve ser maior que :value caracteres.',
        'array' => 'O campo :attribute deve ter mais que :value itens.',
    ],
    'gte' => [
        'numeric' => 'O campo :attribute deve ser maior ou igual a :value.',
        'file' => 'O campo :attribute deve ser maior ou igual a :value kilobytes.',
        'string' => 'O campo :attribute deve ser maior ou igual a :value caracteres.',
        'array' => 'O campo :attribute deve ter :value itens ou mais.',
    ],
    'image' => 'O campo :attribute deve ser uma imagem.',
    'in' => 'O campo :attribute selecionado &eacute; inv&aacute;lido.',
    'in_array' => 'O campo :attribute n&atilde;o existe em :other.',
    'integer' => 'O campo :attribute deve ser um inteiro.',
    'ip' => 'O campo :attribute deve ter um endere&ccedil;o IP v&aacute;lido.',
    'ipv4' => 'O campo :attribute deve ter um endere&ccedil;o IPv4 v&aacute;lido.',
    'ipv6' => 'O campo :attribute deve ter um endere&ccedil;o IPv6 v&aacute;lido.',
    'json' => 'O campo :attribute deve ter uma string JSON v&aacute;lida.',
    'lt' => [
        'numeric' => 'O campo :attribute deve ser menor que :value.',
        'file' => 'O campo :attribute deve ser menor que :value kilobytes.',
        'string' => 'O campo :attribute deve ser menor que :value caracteres.',
        'array' => 'O campo :attribute deve ser menor que :value itens.',
    ],
    'lte' => [
        'numeric' => 'O campo :attribute deve ser menor ou igual :value.',
        'file' => 'O campo :attribute deve ser menor ou igual :value kilobytes.',
        'string' => 'O campo :attribute deve ser menor ou igual :value caracteres.',
        'array' => 'O campo :attribute n&atilde;o deve ultrapassar :value itens.',
    ],
    'max' => [
        'numeric' => 'O campo :attribute n&atilde;o deve ultrapassar :max.',
        'file' => 'O campo :attribute n&atilde;o deve ultrapassar :max kilobytes.',
        'string' => 'O campo :attribute n&atilde;o deve ultrapassar :max caracteres.',
        'array' => 'O campo :attribute n&atilde;o deve ultrapassar :max itens.',
    ],
    'mimes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O campo :attribute deve ter pelo menos :min.',
        'file' => 'O campo :attribute deve ter pelo menos :min kilobytes.',
        'string' => 'O campo :attribute deve ter pelo menos :min caracteres.',
        'array' => 'O campo :attribute deve ter pelo menos :min itens.',
    ],
    'not_in' => 'O campo :attribute selecionado &eacute; inv&aacute;lido.',
    'not_regex' => 'O formato :attribute &eacute; inv&aacute;lido.',
    'numeric' => 'O campo :attribute deve ser um n&uacute;mero.',
    'present' => 'O campo :attribute deve estar presente.',
    'regex' => 'O formato :attribute  &eacute; inv&aacute;lido.',
    'required' => 'O campo :attribute &eacute; obrigat&oacute;rio.',
    'required_if' => 'O campo :attribute &eacute; obrigat&oacute;rio quando :other &eacute; :value.',
    'required_unless' => 'O campo :attribute &eacute; obrigat&oacute;rio a menos que :other esteja em :values.',
    'required_with' => 'O campo :attribute &eacute; obrigat&oacute;rio quando :values est&atilde;o presentes.',
    'required_with_all' => 'O campo :attribute field &eacute; obrigat&oacute;rio quando :values est&atilde;o presentes.',
    'required_without' => 'O campo :attribute field &eacute; obrigat&oacute;rio quando :values n&atilde;o est&atilde;o presentes.',
    'required_without_all' => 'O campo :attribute field &eacute; obrigat&oacute;rio quando none of :values est&atilde;o presentes.',
    'same' => 'O campo :attribute e :other devem ser iguais.',
    'size' => [
        'numeric' => 'O campo :attribute dever ter :size.',
        'file' => 'O campo :attribute dever ter :size kilobytes.',
        'string' => 'O campo :attribute dever ter :size caracteres.',
        'array' => 'O campo :attribute deve conter :size itens.',
    ],
    'starts_with' => 'O campo :attribute come&ccedil;ar com um dos seguintes valores: :values',
    'string' => 'O campo :attribute deve ser uma string.',
    'timezone' => 'O campo :attribute deve ser uma zona v&aacute;lida.',
    'unique' => 'O campo :attribute j&aacute; foi escolhido.',
    'uploaded' => 'O campo :attribute falhou ao fazer upload.',
    'url' => 'O formato :attribute &eacute; inv&aacute;lido.',
    'uuid' => 'O campo :attribute deve ter um UUID v&aacutelido.',

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
    | O campo following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
