<?

namespace App\Caesar;

class Caesar
{

    /**
     * 
     *
     * @param string $text // текст для шифрования
     * @param int $shift // шаг при шифровании
     * @return string
     */
    function caesarEncrypt($text, $shift): string
    {
        $result = "";

        $text = strtoupper($text);

        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];
            if (ctype_alpha($char)) {
                $asciiStart = ctype_upper($char) ? ord('A') : ord('a');
                $encryptedChar = chr(($asciiStart + ord($char) + $shift) % 26 + $asciiStart);
                $result .= $encryptedChar;
            } else {
                $result .= $char;
            }
        }
        return $result;
    }

    /**
     *
     *
     * @param string $text // текст для дешифрования
     * @param int $shift // шаг при дешифровании
     * @return string
     */
    function caesarDecrypt($text, $shift): string
    {
        $result = "";

        $text = strtoupper($text);

        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];
            if (ctype_alpha($char)) {
                $asciiStart = ctype_upper($char) ? ord('A') : ord('a');
                $decryptedChar = chr(($asciiStart + ord($char) - $shift) % 26 + $asciiStart);
                $result .= $decryptedChar;
            } else {
                $result .= $char;
            }
        }
        return $result;
    }
}
