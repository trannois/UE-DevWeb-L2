<?php
session_start();
echo mktime() - $_SESSION['chrono'];