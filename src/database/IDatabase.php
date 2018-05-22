<?php
Interface IDatabase {

    function connectToServer();
    function selectDatabase();
    function dropDatabase();
    function createDatabase();
    function isError();
    /*
     * This method will take an SQL statement,
     * query the database
     * and return the results as an associative array.
     */

}