<?php

session_start();

print session_id() . '<br>';

print $_SESSION['name'];