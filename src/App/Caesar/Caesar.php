<?

namespace App\Caesar;

class Caesar
{

    /**
     * We encrypt the text with the Caesar cipher (Latin alphabet only).
     *
     * @param string $text   Text for encryption
     * @param int $shift     The encryption step
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
     * Decrypt the text encrypted with the Caesar cipher (Latin alphabet only).
     *
     * @param string $text   Text for encryption
     * @param int $shift     The encryption step
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
