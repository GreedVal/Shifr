<?

require_once __DIR__ . '/vendor/autoload.php';

use App\Caesar\Caesar;
use App\Morze\Morze;

$cez = new Caesar();
$mor = new Morze();


$t = $cez->caesarEncrypt("Hello world!!!", 10);

$d = $cez->caesarDecrypt($t, 10);

$tr = "Hello world";
$m = $mor->encodeMorse($tr);

$g = $mor->decodeMorse($m);
echo $t . "<br>" . $d . "<br>" . $m . "<br>" . $g;