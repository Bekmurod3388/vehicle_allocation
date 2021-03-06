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

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'Please enter :attribute.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

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

    'exception' => [
        'message' => 'The given data is invalid! Error list :',
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

    'attributes' => [
        'vehicle_no' => 'vehicle number',
        'shipper_no'=> 'Shipper No',
        'shipper'=>'Shipper',
        'shipper_name1'=>'Shipper name 1',
        'shipper_name2'=>'Shipper name 2',
        'shipper.abbreviation'=>'Abbrevation',
        'postal_code' => 'Postal code',
        'address1' => 'Address 1',
        'address2' => 'Address 2',
        'phone_number'=>'Phone number',
        'fax_number'=>'FAX number',
        'furigana'=>'Furigana',
        'closing_date'=>'Closing date',
        'payment_date'=>'Payment date',
        'at_most_60_letters'=>'At most 60 letters',
        'bill_to' => 'Bill-to',
        'deposit_registration'=>'Deposit registration',
        'delete'=>'Delete',
        'deposit_year'=>'Deposit year',
        'deposit_month'=>'Deposit month',
        'deposit_day'=>'Deposit day',
        'transfer'=>'Transfer',
        'offset'=>'Offset',
        'other'=>'Other',
        'transfer_fee'=>'Transfer fee',
        'total_credit_amount'=>'Total credit amount',
        'invoice_balance'=>'Invoice balance',
        'yen'=>'yen',
        'dispatch_board' => 'Dispatch board',
        'dispatch_day' => 'Dispatch day',
        'display' => 'Display',
        'next_day' => 'Next day',
        'two_days_later' => 'Two days later',
        'car_no' => 'Car No',
        'driver_name' => 'Driver name',
        'morning' => 'Morning',
        'noon' => 'Noon',
        'next_product' => 'Next product',
        'add' => 'Add',
        'printing'=>'Printing',
        'remarks'=>'Remarks',
        'pl_available'=>'PL available',
        'add_driver'=>'Add Driver',
        'check'=>'Check',
        'cancel'=>'Cancel',
        'driver_list' => 'Driver list ',
        'type' => 'Type',
        'name' => 'Name',
        'mobile_number' => 'Mobile number',
        'max_load' => 'Max Load',
        '10tw' => '10tW',
        '10t_flat' => '10t flat',
        '4tw' => '4tW',
        '4t_flat' => '4t flat',
        'controller' => 'Controller',
        'bulk' => 'Bulk',
        'admin'=>'Admin',
        'password'=>'Password',
        'invoice_month' => 'Invoice month',
        'invoice_day' => 'Invoice day',
        'weekday' => 'Weekday',
        'loading_port' => 'Loading port',
        'drop_off' => 'Drop off',
        'amount' => 'Amount',
        'delivery_date' => 'Delivery date',
        'weight' => 'Weight',
        'item_price' => 'Unit price',
        'status' => 'Status',
        'matter_no' => 'Matter No',
        'delivery_time' => 'Delivery time',
        'invoice_date' => 'Invoice date',
        'total_sales' => 'Total sales',
        'total_consumption_tax' => 'Total consumption tax',
        'other_totals' => 'Other totals',
        'sales_total' => 'Sales total',
        'aggregate'=>'Aggregate',
        '20th'=>'20th',
        '30th'=>'30th',
        'stack_date'=>'Stack date',
        'unloading_place' => 'Unloading place',
        'down_date' => 'Down Date',
        'stack_time' => 'Stack Time',
        'down_time' => 'Down Time',
        'vehicle_model' => 'Vehicle Model',
        'shipper_name' => 'Shipper Name',
        'stack_point' => 'Stack Point',
        'number_t' => 'Number (t)',
        'per_ton' => 'Per ton',
        'per_vehicle' => 'Per vehicle',
        'amount_of_money' => 'Amount of money',
        'chartered_vehicle' => 'Chartered Vehicle',
        'invoice' => 'Invoice',
        'down_point' => 'Down point',
        'empty_pl' => 'Empty PL',
        'rental_vehicle_payment' => 'Rental Vehicle Payment',
        'item_list' => 'Item list',
        'item_registration' => 'Item registration',
        'required' => 'required',
        'yes'=>'Yes',
        'none'=>'None',
        'completed'=>'Completed',
        'incomplete'=>'Incomplete',
        'update'=>'Update ',
        'wing'=>'Wing ',
        'flat'=>'Flat ',
        'trailer'=>'Trailer ',
        'payment_registration' => 'Payment registration ',
        'payment_year' => 'Payment year ',
        'payment_month' => 'Payment month ',
        'payment_day' => 'Payment day ',
        'total_payment' => 'Total payment ',
        'outgoing_balance' => 'Outgoing balance ',
        'unit_price_list' => 'Unit Price List ',
        'car_type' => 'Car type ',
        'unit_price' => 'Unit price ',
        'unit_price_id' => 'Unit price ID ',
        'shipper_id' => 'Shipper ID ',
        'car_types' => [
            'wing' => 'Wing ',
            'flat' => 'Flat ',
            'trailer' => 'Trailer ',
            'bulk' => 'Bulk ',
            ],
        'vehicle_list' => 'Vehicle list ',
        'company_name' => 'Company name ',
        'kana_name' => 'Kana name ',
        'company_abbr' => 'Company Abbr ',
        'address' => 'Address ',
        'phone' => 'Phone ',
        'fax' => 'Fax ',
        'remark' => 'Remark ',
        'driver_pass'=>'Driver password ',
        'vehicle_type'=>'vehicle type',
        'payment_amount'=>'Payment amount',
        'deposit_amount'=>'Deposit amount',
        'driver_no'=>'Drivero No',
        'driver_remark'=>'Driver Remark',
        'driver_mobile_number'=>'Driver mobile number',
        'maximum_Loading'=>'Maximum Loading',
        'vehicle_no3'=>'Vehicle No3',
        'shipper_company_abbreviation'=>'Shipper company abbreviation',
        'shipper_kana_name1'=>'Shipper kana name 1 ',
        'shipper_kana_name2'=>'Shipper kana name 2 ',
        'company_kana_name'=>'Company kana name',
        'vehicle_company_abbreviation'=>'Vehicle company abbreviation',
        'vehicle_postal_code'=>'Vehicle postal code',
        'vehicle_address1'=>'Vehicle address 1',
        'vehicle_address2'=>'Vehicle address 2',
        'vehicle_phone_number'=>'Vehicle phone number',
        'vehicle_fax_number'=>'vehicle fax number',
        'item_remark'=>'Item Remark',
        'vehicle_payment'=>'Vehicle Payment',
        'item_driver_name'=>'Item driver name',
        'item_vehicle'=>'Item vehicle',
        'item_completion_date'=>'Item completion date',
        'down_invoice'=>'Down invoice',

    ],

];
