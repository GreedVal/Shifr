<?

namespace App\Morze;

class Morze
{
    private $morseCodeDict = array(
        'A' => '.-', 'B' => '-...', 'C' => '-.-.', 'D' => '-..', 'E' => '.',
        'F' => '..-.', 'G' => '--.', 'H' => '....', 'I' => '..', 'J' => '.---',
        'K' => '-.-', 'L' => '.-..', 'M' => '--', 'N' => '-.', 'O' => '---',
        'P' => '.--.', 'Q' => '--.-', 'R' => '.-.', 'S' => '...', 'T' => '-',
        'U' => '..-', 'V' => '...-', 'W' => '.--', 'X' => '-..-', 'Y' => '-.--',
        'Z' => '--..',
    );

    public function encodeMorse($text): string
    {
        $encodedText = '';
        $text = strtoupper($text);

        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];
            if ($char == ' ') {
                $encodedText .= '  ';
            } elseif (isset($this->morseCodeDict[$char])) {
                $encodedText .= $this->morseCodeDict[$char];
            } else {
                $encodedText .= $char;
            }

            if ($i < strlen($text) - 1) {
                $encodedText .= ' ';
            }
        }

        return $encodedText;
    }
    public function decodeMorse($text): string
    {
        $morseCode = explode(' ', $text);
        $decodedText = '';

        foreach ($morseCode as $code) {
            if ($code === '') {
                $decodedText .= ' ';
                continue;
            }

            $decodedChar = array_search($code, $this->morseCodeDict);
            $decodedText .= $decodedChar !== false ? $decodedChar : $code;
        }

        return $decodedText;
    }
}
