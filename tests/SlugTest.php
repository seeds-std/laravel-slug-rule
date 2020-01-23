<?php

namespace SeedsStd\SlugValidation\Tests;

use Illuminate\Support\Facades\Validator;
use Orchestra\Testbench\TestCase;
use SeedsStd\SlugValidation\Slug;

class SlugTest extends TestCase
{
    /**
     * @param $string
     * @param mixed $params
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator($string, $params = [])
    {
        return Validator::make(['name' => $string], ['name' => new Slug($params)]);
    }

    /**
     * @test
     */
    public function it_works_for_period()
    {
        $this->assertTrue($this->validator('.')->fails());
    }

    /**
     * @test
     */
    public function it_works_for_slash()
    {
        $this->assertTrue($this->validator('/')->fails());
    }

    /**
     * @test
     */
    public function it_works()
    {
        $this->assertTrue($this->validator('laravel-5-framework')->passes());
    }

    /**
     * @test
     */
    public function it_works_with_separator_option()
    {
        $this->assertTrue($this->validator('laravel_5_framework', ['separator' => '_'])->passes());
    }
}