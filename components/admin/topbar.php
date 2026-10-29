<?php

$user = $_SESSION['user'];

require_once __DIR__ . "/../../middleware/auth.php";
$user = getAuthUser();
?>

<header class="app-topbar">
  <div class="page-title">
    <h1><?= $pageTitle ?></h1>
@@ -19,4 +17,4 @@
      </span>
    </div>
  </div>
</header>
</header>