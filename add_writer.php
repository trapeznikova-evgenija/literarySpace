<?php
require_once('include/common.inc.php');
require_once('include/secuire.inc.php');
session_start();
requireAuth();
echo getView('add_writer.twig', array());

