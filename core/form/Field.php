<?php


namespace core\form;


use core\Model;

class Field
{
    public Model $model;
    public string $attribute;

    /**
     * Field constructor.
     * @param Model $model
     * @param string $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('
        <section class="%s">
                    <label>
                        <input class="%s" type="%s" name="%s" placeholder="%s">
                    </label>
        </section>
        ', $this->attribute,
           $this->attribute,
           $this->model->{$this->attribute},
        );
    }
}