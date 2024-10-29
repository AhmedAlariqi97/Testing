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

    'accepted' => 'الحقل :attribute يجب قبوله.',
    'accepted_if' => 'الحقل :attribute يجب قبولها عندما :other يكون :value.',
    'active_url' => 'الحقل :attribute ليس عنوان URL صالحًا.',
    'after' => 'الحقل :attribute يجب أن يكون تاريخًا بعد :date.',
    'after_or_equal' => 'الحقل :attribute يجب أن يكون تاريخًا بعد أو يساوي :date.',
    'alpha' => 'الحقل :attribute يجب أن يحتوي فقط على أحرف.',
    'alpha_dash' => 'الحقل :attribute يجب أن يحتوي فقط على أحرف, أرقام والشرطات والشرطات السفلية.',
    'alpha_num' => 'الحقل :attribute يجب أن يحتوي فقط على أحرف و أرقام.',
    'array' => 'الحقل :attribute يجب أن يكون مصفوفة.',
    'before' => 'الحقل :attribute يجب أن يكون تاريخ قبل :date.',
    'before_or_equal' => 'الحقل :attribute يجب أن يكون تاريخ قبل أو يساوي :date.',
    'between' => [
        'numeric' => 'الحقل :attribute لابد ان تكون بين :min و :max.',
        'file' => 'الحقل :attribute لابد ان تكون بين :min و :max كيلوبايت.',
        'string' => 'الحقل :attribute لابد ان تكون بين :min و :max محارف.',
        'array' => 'الحقل :attribute يجب أن يكون بين :min و :max عناصر.',
    ],
    'boolean' => 'الحقل :attribute يجب أن يكون الحقل صحيحًا أو خطأ.',
    'confirmed' => 'الحقل :attribute التأكيد غير متطابق.',
    'current_password' => 'الحقل كلمة المرور غير صحيحة.',
    'date' => 'الحقل :attribute هذا ليس تاريخ صحيح.',
    'date_equals' => 'الحقل :attribute يجب أن يكون تاريخًا مساويًا لـ :date.',
    'date_format' => 'الحقل :attribute لا يتطابق مع الشكل :format.',
    'declined' => 'الحقل :attribute يجب رفضه.',
    'declined_if' => 'الحقل :attribute يجب رفضه عندما :other يكون :value.',
    'different' => 'الحقل :attribute و :other يجب أن تكون مختلف.',
    'digits' => 'الحقل :attribute يجب أن يكون :digits أرقام.',
    'digits_between' => 'الحقل :attribute لابد ان تكون بين :min و :max أرقام.',
    'dimensions' => 'الحقل :attribute له أبعاد صورة غير صالحة.',
    'distinct' => 'الحقل :attribute له قيمة مكررة.',
    'doesnt_end_with' => 'لا يجوز أن تنتهي :attribute بأي مما يلي: :values.',
    'doesnt_start_with' => 'لا يجوز أن تبدأ :attribute بأي مما يلي: :values.',
    'email' => 'الحقل :attribute يجب أن يكون عنوان بريد الكتروني مفعّل.',
    'ends_with' => 'الحقل :attribute يجب أن ينتهي بواحد مما يلي: :values.',
    'enum' => 'الحقل المحدد :attribute غير صالح.',
    'exists' => 'الحقل المحدد :attribute غير صالح.',
    'file' => 'الحقل :attribute يجب أن يكون ملف.',
    'filled' => 'الحقل :attribute يجب أن يكون له قيمة.',
    'gt' => [
        'numeric' => 'الحقل :attribute يجب أن يكون أكبر من :value.',
        'file' => 'الحقل :attribute يجب أن يكون أكبر من :value كيلوبايت.',
        'string' => 'الحقل :attribute يجب أن يكون أكبر من :value محارف.',
        'array' => 'الحقل :attribute يجب أن يحتوي على أكثر من :value عناصر.',
    ],
    'gte' => [
        'numeric' => 'الحقل :attribute يجب أن يكون أكبر من أو يساوي :value.',
        'file' => 'الحقل :attribute يجب أن يكون أكبر من أو يساوي :value كيلوبايت.',
        'string' => 'الحقل :attribute يجب أن يكون أكبر من أو يساوي :value محارف.',
        'array' => 'الحقل :attribute يجب ان يملك :value عناصر او اكثر.',
    ],
    'image' => 'الحقل :attribute يجب أن يكون صورة.',
    'in' => 'الحقل المحدد :attribute غير صالح.',
    'in_array' => 'الحقل :attribute غير موجود في :other.',
    'integer' => 'الحقل :attribute يجب أن يكون عدد صحيح.',
    'ip' => 'الحقل :attribute يجب أن يكون عنوان IP صالح.',
    'ipv4' => 'الحقل :attribute يجب أن يكون عنوان IPv4 صالح.',
    'ipv6' => 'الحقل :attribute يجب أن يكون عنوان IPv6 صالح.',
    'json' => 'الحقل :attribute يجب أن يكون سلسلة JSON صالحة.',
    'lt' => [
        'numeric' => 'الحقل :attribute يجب أن يكون أقل من :value.',
        'file' => 'الحقل :attribute يجب أن يكون أقل من :value كيلوبايت.',
        'string' => 'الحقل :attribute يجب أن يكون أقل من :value محارف.',
        'array' => 'الحقل :attribute يجب ان يملك أقل من :value عناصر.',
    ],
    'lte' => [
        'numeric' => 'الحقل :attribute يجب أن يكون أقل من أو يساوي :value.',
        'file' => 'الحقل :attribute يجب أن يكون أقل من أو يساوي :value كيلوبايت.',
        'string' => 'الحقل :attribute يجب أن يكون أقل من أو يساوي :value محارف.',
        'array' => 'الحقل :attribute يجب ألا يحتوي على أكثر من :value عناصر.',
    ],
    'mac_address' => 'الحقل :attribute يجب أن يكون عنوان MAC صالح.',
    'max' => [
        'numeric' => 'الحقل :attribute يجب ألا يكون أكبر من :max.',
        'file' => 'الحقل :attribute يجب ألا يكون أكبر من :max كيلوبايت.',
        'string' => 'الحقل :attribute يجب ألا يكون أكبر من :max محارف.',
        'array' => 'الحقل :attribute يجب ألا يحتوي على أكثر من :max عناصر.',
    ],
    'max_digits' => 'يجب ألا تحتوي :attribute على أكثر من :max رقمًا.',
    'mimes' => 'الحقل :attribute يجب أن يكون ملف من النوع: :values.',
    'mimetypes' => 'الحقل :attribute يجب أن يكون ملف من النوع: :values.',
    'min' => [
        'numeric' => 'الحقل :attribute يجب أن يكون على الأقل :min.',
        'file' => 'الحقل :attribute يجب أن يكون على الأقل :min كيلوبايت.',
        'string' => 'الحقل :attribute يجب أن يكون على الأقل :min محارف.',
        'array' => 'الحقل :attribute يجب ان يملك على الأقل :min عناصر.',
    ],
    'min_digits' => 'يجب أن تحتوي :attribute على رقم :min على الأقل.',
    'multiple_of' => 'الحقل :attribute يجب أن يكون من مضاعفات :value.',
    'not_in' => 'الحقل المحدد :attribute غير صالح.',
    'not_regex' => 'الحقل :attribute صيغة غير صالح.',
    'numeric' => 'الحقل :attribute يجب أن يكون رقم.',
    'password' => [
        'letters' => 'يجب أن تحتوي :attribute على حرف واحد على الأقل.',
        'mixed' => 'يجب أن تحتوي :attribute على حرف كبير واحد وحرف صغير واحد على الأقل.',
        'numbers' => 'يجب أن تحتوي :attribute على رقم واحد على الأقل.',
        'symbols' => 'يجب أن تحتوي :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'ظهرت :attribute المعطاة في تسرب بيانات. الرجاء اختيار :attribute مختلفة.',
    ],
    'present' => 'الحقل :attribute يجب أن يكون حاضر',
    'prohibited' => 'الحقل :attribute يحظر.',
    'prohibited_if' => 'الحقل :attribute يحظر عندما :other يكون :value.',
    'prohibited_unless' => 'الحقل :attribute يحظر ما لم :other في داخل :values.',
    'prohibits' => 'الحقل :attribute يحظر :other من الوجود حاضر',
    'regex' => 'الحقل :attribute صيغة غير صالح.',
    'required' => 'الحقل :attribute مطلوب.',
    'required_array_keys' => 'الحقل :attribute يجب أن يحتوي على إدخالات لـ: :values.',
    'required_if' => 'الحقل :attribute مطلوب عندما :other يكون :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'الحقل :attribute مطلوب ما لم :other في داخل :values.',
    'required_with' => 'الحقل :attribute مطلوب عندما :values يكون حاضر',
    'required_with_all' => 'الحقل :attribute مطلوب عندما :values يكون حاضر',
    'required_without' => 'الحقل :attribute مطلوب عندما :values لا يكون حاضر',
    'required_without_all' => 'الحقل :attribute مطلوب عندما none of :values are حاضر',
    'same' => 'الحقل :attribute و :other يجب تطابقهم.',
    'size' => [
        'numeric' => 'الحقل :attribute يجب أن يكون :size.',
        'file' => 'الحقل :attribute يجب أن يكون :size كيلوبايت.',
        'string' => 'الحقل :attribute يجب أن يكون :size محارف.',
        'array' => 'الحقل :attribute يجب أن يحتوي :size عناصر.',
    ],
    'starts_with' => 'الحقل :attributeيجب أن يبدأ بواحد مما يلي: :values.',
    'string' => 'الحقل :attribute يجب أن يكون سلسلة.',
    'timezone' => 'الحقل :attribute يجب أن يكون منطقة زمنية صالحة.',
    'unique' => 'الحقل :attribute موجودة مسبقا.',
    'uploaded' => 'الحقل :attribute فشل التحميل.',
    'url' => 'الحقل :attribute يجب أن يكون URL صالح.',
    'uuid' => 'الحقل :attribute يجب أن يكون UUID صالح.',

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
