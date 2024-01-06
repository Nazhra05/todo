<?php

$conn = mysqli_connect("localhost", "root", "", "todo");

if (!$conn) {
	echo "Connection failed!";
}