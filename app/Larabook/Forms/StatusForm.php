<?php namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

class StatusForm extends FormValidator  {

    /**
     * Validation rules for the publish status form.
     *
     * @var array
     */
    protected $rules = [
        'body' => 'required|min:2'
    ];

}