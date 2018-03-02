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

    'accepted'             => 'Поле :attribute повинно бути прийняте.',
    'active_url'           => 'Поле :attribute не є дійсним URL.',
    'after'                => 'Поле :attribute повинно бути датою більшою за :date.',
    'after_or_equal'       => 'Поле :attribute повинно бути датою рівною або більшою за :date.',
    'alpha'                => 'Поле :attribute може містити лише літери.',
    'alpha_dash'           => 'Поле :attribute може містити лише літери, цифри та тире.',
    'alpha_num'            => 'Поле :attribute може містити лише літери та цифри.',
    'array'                => 'Поле :attribute повинно бути масивом.',
    'before'               => 'Поле :attribute повинно бути датою меншою за :date.',
    'before_or_equal'      => 'Поле :attribute повинно бути датою рівною або меншою за :date.',
    'between'              => [
        'numeric' => 'Поле :attribute повинно бути від :min до :max.',
        'file'    => 'Поле :attribute повинно бути від :min до :max кілобайт.',
        'string'  => 'Поле :attribute повинно бути від :min до :max символів.',
        'array'   => 'Поле :attribute повинно мати від :min до :max об\'єктів.',
    ],
    'boolean'              => 'Поле :attribute може бути лише так або ні',
    'confirmed'            => 'Поле :attribute не підтверджено.',
    'date'                 => 'Поле :attribute не є дійсною датою.',
    'date_format'          => 'Поле :attribute не є формату :format.',
    'different'            => 'Поля :attribute та :other повинні бути різними.',
    'digits'               => 'Поле :attribute повинно мати :digits цифр.',
    'digits_between'       => 'Поле :attribute повинно мати від :min до :max цифр.',
    'dimensions'           => 'Поле :attribute має не дійсні розміри зображення.',
    'distinct'             => 'Поле :attribute має значення що дублікується.',
    'email'                => 'Поле :attribute повинно бути дійсною адресою.',
    'exists'               => 'Обране поле :attribute є недійсним.',
    'file'                 => 'Поле :attribute повинно бути файлом.',
    'filled'               => 'Поле :attribute повинно мати значення.',
    'image'                => 'Поле :attribute повинно бути зображенням.',
    'in'                   => 'Обране поле :attribute є недійсним.',
    'in_array'             => 'Поле :attribute не присутнє в :other.',
    'integer'              => 'Поле :attribute повинно бути цілим.',
    'ip'                   => 'Поле :attribute повинно бути дійсною IP адресою.',
    'ipv4'                 => 'Поле :attribute повинно бути дійсною IPv4 адресою.',
    'ipv6'                 => 'Поле :attribute повинно бути дійсною IPv6 адресою.',
    'json'                 => 'Поле :attribute повинно бути дійсним JSON рядком.',
    'max'                  => [
        'numeric' => 'Поле :attribute не повинно бути більшим за :max.',
        'file'    => 'Поле :attribute не повинно бути більшим за :max кілобайт.',
        'string'  => 'Поле :attribute не повинно бути більшим за :max символів.',
        'array'   => 'Поле :attribute не повинно мати більше ніж :max об\'єктів.',
    ],
    'mimes'                => 'Поле :attribute повинно бути файлом типу: :values.',
    'mimetypes'            => 'Поле :attribute повинно бути файлом типу: :values.',
    'min'                  => [
        'numeric' => 'Поле :attribute повинно бути не менше ніж :min.',
        'file'    => 'Поле :attribute повинно бути не меншим ніж :min кілобайт.',
        'string'  => 'Поле :attribute повинно мати не менше ніж :min символів.',
        'array'   => 'Поле :attribute повинно мати не менше ніж :min об\'єктів.',
    ],
    'not_in'               => 'Обране поле :attribute є недійсним.',
    'numeric'              => 'Поле :attribute повинно бути числом.',
    'present'              => 'Поле :attribute повинно бути присутнім.',
    'regex'                => 'Формат поля :attribute є недійсним.',
    'required'             => 'Поле :attribute є обов\'язковим.',
    'required_if'          => 'Поле :attribute є обов\'язковим якщо :other рівне :value.',
    'required_unless'      => 'Поле :attribute є обов\'язковим поки :other рівне одному з цих значень: :values.',
    'required_with'        => 'Поле :attribute є обов\'язковим якщо :values присутнє.',
    'required_with_all'    => 'Поле :attribute є обов\'язковим якщо :values присутні.',
    'required_without'     => 'Поле :attribute є обов\'язковим якщо :values не присутнє.',
    'required_without_all' => 'Поле :attribute є обов\'язковим поки ні одне з полей :values не є присутнім.',
    'same'                 => 'Поля :attribute та :other мають співпадати.',
    'size'                 => [
        'numeric' => 'Поле :attribute повинно бути розміром :size.',
        'file'    => 'Поле :attribute повинно бути розміром :size кілобайт.',
        'string'  => 'Поле :attribute повинно бути розміром :size символів.',
        'array'   => 'Поле :attribute повинно містити :size об\'єктів.',
    ],
    'string'               => 'Поле :attribute повинно бути рядком.',
    'timezone'             => 'Поле :attribute повинно бути дійсним часовим поясом.',
    'unique'               => 'Поле :attribute вже існує.',
    'uploaded'             => 'Виникла помилка при завантаженні :attribute.',
    'url'                  => 'Поле :attribute недійсного формату.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
