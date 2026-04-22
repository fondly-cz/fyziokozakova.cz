<?php
session_start();
define('PASSWORD', 'FyzioterapieKremlickovaKolin');

if (isset($_GET['logout'])) {
    $_SESSION = [];
    session_destroy();
    header('Location: admin.php');
    exit;
}

$error = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
    if (hash_equals(PASSWORD, (string) $_POST['password'])) {
        $_SESSION['auth'] = true;
    } else {
        $error = 'Nesprávné heslo.';
    }
}

$authenticated = !empty($_SESSION['auth']);
$file = __DIR__ . '/notice.txt';
$content = $authenticated && is_readable($file) ? file_get_contents($file) : '';
?>
<!doctype html>
<html lang="cs">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Administrace oznámení</title>
<style>
  body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; max-width: 640px; margin: 40px auto; padding: 20px; background: #f5f5f5; color: #222; }
  h1 { margin-top: 0; display: flex; justify-content: space-between; align-items: baseline; }
  form { background: #fff; padding: 24px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, .08); }
  label { display: block; margin-bottom: 8px; font-weight: 600; }
  input[type="password"], textarea { width: 100%; box-sizing: border-box; padding: 10px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px; font-family: inherit; }
  textarea { min-height: 140px; resize: vertical; }
  button { margin-top: 12px; padding: 10px 20px; font-size: 14px; background: #327355; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
  button:hover { background: #255441; }
  .error { color: #c00; margin-bottom: 12px; }
  .success { color: #080; margin-bottom: 12px; }
  .logout { font-size: 13px; font-weight: normal; }
  .hint { margin-top: 8px; font-size: 12px; color: #666; }
</style>
</head>
<body>
<?php if (!$authenticated): ?>
  <h1>Administrace oznámení</h1>
  <?php if ($error): ?><p class="error"><?= htmlspecialchars($error) ?></p><?php endif; ?>
  <form method="post">
    <label for="password">Heslo</label>
    <input type="password" id="password" name="password" autofocus>
    <button type="submit">Přihlásit</button>
  </form>
<?php else: ?>
  <h1>Oznámení <a href="?logout=1" class="logout">Odhlásit</a></h1>
  <?php if (isset($_GET['ok'])): ?><p class="success">Uloženo.</p><?php endif; ?>
  <form method="post" action="save.php">
    <label for="text">Text oznámení</label>
    <textarea id="text" name="text"><?= htmlspecialchars($content) ?></textarea>
    <p class="hint">Ponechte prázdné pro skrytí oznámení na webu.</p>
    <button type="submit">Uložit</button>
  </form>
<?php endif; ?>
</body>
</html>
