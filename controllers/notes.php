<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'My Notes';

$notes = $db->query('SELECT * FROM notes WHERE user_id = 7')->fetchAll();

require "views/notes.view.php";