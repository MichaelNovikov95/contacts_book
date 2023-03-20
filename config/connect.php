<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'users');

if (!$connect) {
  die('Problem with connect, try again later');
}