<?php

require_once('core/start.php');

session::delete('username');
Redirect::to('index.php');