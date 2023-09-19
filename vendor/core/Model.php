<?php

namespace core;

abstract class Model
{

    public array $attributes = [];
    public array $errors = [];
    public array $rules = [];
    public array $labes = [];


    public function __construct()
    {
        Db::getInstance();
    }

}