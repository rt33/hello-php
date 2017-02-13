<?php

class App_Model
{
    public function all()
    {
        $app = array(
            array('id' => 1, 'name' => 'Apple'),
            array('id' => 2, 'name' => 'Orange')
        );

        return $app;
    }
}