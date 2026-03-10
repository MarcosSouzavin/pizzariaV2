<?php

require_once __DIR__ . '/../app/config/database.php';
require_once __DIR__ . '/../app/services/CartService.php';
session_name($_ENV['SESSION_NAME'] ?? 'pizzaria_v2_session');
session_start();

require_once __DIR__ . '/../app/config/app.php';

if (isset($_GET['api'])) {
    require_once __DIR__ . '/../routes/api.php';
    exit;
}
require_once __DIR__ . '/../app/helpers/functions.php';
require_once __DIR__ . '/../app/helpers/response.php';
require_once __DIR__ . '/../app/helpers/csrf.php';
require_once __DIR__ . '/../app/helpers/auth.php';

require_once __DIR__ . '/../app/models/Category.php';
require_once __DIR__ . '/../app/models/Product.php';

require_once __DIR__ . '/../routes/web.php';