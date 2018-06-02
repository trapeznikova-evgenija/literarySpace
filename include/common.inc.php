<?php
chdir(dirname(__FILE__));

define('ROOT_DIR', dirname(dirname(__FILE__) . "../"));
define('TEMPLATE_DIR', ROOT_DIR . '/template');

require_once('../vendor/autoload.php');
require_once('template.inc.php');
require_once('config.inc.php');
require_once('database.inc.php');
require_once('request.inc.php');
require_once('filter.inc.php');
require_once('add_writer.inc.php');
require_once('upload_image.inc.php');

dbInitialConnect();