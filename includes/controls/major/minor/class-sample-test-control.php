<?php

namespace axis_sample\major\minor;

use axis_framework\includes\controls;
use axis_framework\includes\core;


class Sample_Test_Control extends controls\Base_Control {

	public function __construct( array $args = array() ) {

		parent::__construct( $args );
	}

	public function run() {

		echo "controller is alright!";
	}
}