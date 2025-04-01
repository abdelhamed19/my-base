<?php
return [
    'required' => 'حقل :attribute مطلوب.',
    'string' => 'يجب أن يكون :attribute نصًا.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صالحًا.',
    'numeric' => 'يجب أن يكون :attribute رقمًا.',
    'date' => 'يجب أن يكون :attribute تاريخًا صالحًا.',
    'exists' => 'القيمة المحددة لـ :attribute غير موجودة.',
    'unique' => 'القيمة المحددة لـ :attribute موجودة بالفعل.',
    'min' => [
        'numeric' => 'يجب أن يكون :attribute على الأقل :min.',
        'file' => 'يجب أن يكون حجم الملف لـ :attribute على الأقل :min كيلوبايت.',
        'string' => 'يجب أن يحتوي :attribute على الأقل :min حرفًا.',
        'array' => 'يجب أن تحتوي المصفوفة لـ :attribute على الأقل :min عنصرًا.',
    ],
    'max' => [
        'numeric' => 'يجب ألا يكون :attribute أكبر من :max.',
        'file' => 'يجب ألا يكون حجم الملف لـ :attribute أكبر من :max كيلوبايت.',
        'string' => 'يجب ألا يحتوي :attribute على أكثر من :max حرفًا.',
        'array' => 'يجب ألا تحتوي المصفوفة لـ :attribute على أكثر من :max عنصرًا.',
    ],
    'in' => 'القيمة المحددة لـ :attribute غير صالحة.',
    'file' => 'يجب أن يكون :attribute ملفًا.',
    'image' => 'يجب أن يكون :attribute صورة.',
    'mimes' => 'يجب أن يكون :attribute ملفًا من نوع: :values.',
    'mimetypes' => 'يجب أن يكون :attribute ملفًا من نوع: :values.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'accepted' => 'يجب قبول :attribute.',
    'active_url' => ':attribute ليس عنوان URL صالحًا.',
    'after' => 'يجب أن يكون :attribute تاريخًا بعد :date.',
    'after_or_equal' => 'يجب أن يكون :attribute تاريخًا بعد أو يساوي :date.',
    'alpha' => 'يجب أن يحتوي :attribute على أحرف فقط.',
    'alpha_dash' => 'يجب أن يحتوي :attribute على أحرف وأرقام وشرطات وشرطات سفلية فقط.',
    'alpha_num' => 'يجب أن يحتوي :attribute على أحرف وأرقام فقط.',
    'array' => 'يجب أن يكون :attribute مصفوفة.',
    'before' => 'يجب أن يكون :attribute تاريخًا قبل :date.',
    'before_or_equal' => 'يجب أن يكون :attribute تاريخًا قبل أو يساوي :date.',
    'between' => [
        'numeric' => 'يجب أن يكون :attribute بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف لـ :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يحتوي :attribute على بين :min و :max حرفًا.',
        'array' => 'يجب أن تحتوي المصفوفة لـ :attribute على بين :min و :max عنصرًا.',
    ],
    'valid_section_name' => [
        'numbers_only' => 'يجب ألا يحتوي حقل :attribute على أرقام فقط.',
        'multiple_spaces' => 'يجب ألا يحتوي حقل :attribute على مسافات متتالية.',
        'start_end_spaces' => 'يجب ألا يبدأ أو ينتهي حقل :attribute بمسافات.',
        'special_characters' => 'يجب ألا يحتوي حقل :attribute على رموز خاصة.',
    ],
    'boolean' => ':attribute يجب أن تكون صحيحة أو خاطئة.',
    'confirmed' => ':attribute تأكيد لا يتطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date_equals' => ':attribute يجب أن يكون تاريخًا يساوي :date.',
    'date_format' => ':attribute لا يتطابق مع التنسيق :format.',
    'declined' => ':attribute يجب رفضه.',
    'declined_if' => ':attribute يجب رفضه عندما يكون :other هو :value.',
    'route' => [
        'string' => 'يجب أن يكون :attribute نصًا.',
        'max' => 'يجب ألا يتجاوز :attribute 255 حرفًا.',
        'regex_slash' => 'يجب أن يبدأ :attribute بشرطة مائلة (/).',
        'regex_num' => 'يجب أن يحتوي :attribute على أحرف وأرقام وشرطات سفلية وشرطات مائلة فقط.',
    ],
    'password' => [
        'letters' => 'يجب أن يحتوي :attribute على حرف واحد على الأقل.',
        'mixed' => 'يجب أن يحتوي :attribute على حرف كبير واحد على الأقل وحرف صغير واحد على الأقل.',
        'numbers' => 'يجب أن يحتوي :attribute على رقم واحد على الأقل.',
        'symbols' => 'يجب أن يحتوي :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'تم العثور على :attribute في تسرب بيانات. يرجى اختيار :attribute مختلف.',
        'min' => 'يجب أن يحتوي :attribute على الأقل :min حرفًا.',
    ]
    // 'The ' . $attribute . ' must start with a forward slash (/).'
];
