<?php

class Agency extends AppModel {
    public $validate = array(
        'agency_name' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A username is required'
            )
        )
    );
}