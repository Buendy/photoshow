<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('Text', 'components.form.text', ['name', 'value' => null, 'attributes' =>[]]);
        Form::component('TextArea', 'components.form.textArea', ['name', 'value' => null, 'attributes' => []]);
        Form::component('Submit', 'components.form.submit', ['value' => 'Submit', 'attributes' => []]);
        Form::component('File', 'components.form.file', ['name', 'attributes' =>[]]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
