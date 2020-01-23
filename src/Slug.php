<?php

namespace SeedsStd\SlugValidation;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;

class Slug implements Rule
{
    /**
     * @var array
     */
    protected $configs;

    /**
     * Create a new rule instance.
     *
     * @param array $configs
     * @return void
     */
    public function __construct(array $configs = [])
    {
        $default_configs = [
            'separator' => '-',
            'language' => 'en',
        ];

        $this->configs = array_merge($default_configs, $configs);
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $value === Str::slug($value, $this->configs['separator'], $this->configs['language']);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validation.slug');
    }
}
