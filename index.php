<?

require_once __DIR__ . '/vendor/autoload.php';

use App\Caesar\Caesar;

$cez = new Caesar();



$t = $cez->caesarEncrypt("Hello world!!!", 3);

$d = $cez->caesarDecrypt($t, 3);

echo $t . "<br>" . $d;