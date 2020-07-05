<?php

class block_helloworld_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('helloworld', 'block_helloworld'));

        // A sample string variable with a default value.
        $mform->addElement('text', 'config_text', get_string('helloworld', 'block_helloworld'));
        $mform->setDefault('config_text', 'Hello World');
        $mform->setType('config_text', PARAM_RAW);

    }
}
