<?php

die( "This is bad code." );

// This is baaad code :) that's why there's a die above!
$what = $_GET['what'];
$table = "safe";
$where = implode( " AND ", $_GET['where'] );
$wpdb->get_results( "SELECT {$what} FROM {$table} WHERE {$where}" );
