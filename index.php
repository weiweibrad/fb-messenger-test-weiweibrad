<?php

// print_r($_GET["hub_challenge"]);
echo file_put_contents("output.txt", file_get_contents("php://input"));