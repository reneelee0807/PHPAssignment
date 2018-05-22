<?php
Interface ITable {
    function createTable($table, $sql );
    function query( $sql );
}