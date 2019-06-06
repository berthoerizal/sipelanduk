<?php 
class MY_Encrypt extends CI_Encrypt
{
    /**
     * Encodes a string.
     * 
     * @param string $string The string to encrypt.
     * @param string $key[optional] The key to encrypt with.
     * @param bool $url_safe[optional] Specifies whether or not the
     *                returned string should be url-safe.
     * @return string
     */
    function encode($string, $key="", $url_safe=TRUE)
    {
        $ret = parent::encode($string, $key);

        if ($url_safe)
        {
            $ret = strtr(
                    $ret,
                    array(
                        '+' => '.',
                        '=' => '-',
                        '/' => '~'
                    )
                );
        }

        return $ret;
    }

    /**
     * Decodes the given string.
     * 
     * @access public
     * @param string $string The encrypted string to decrypt.
     * @param string $key[optional] The key to use for decryption.
     * @return string
     */
    function decode($string, $key="")
    {
        $string = strtr(
                $string,
                array(
                    '.' => '+',
                    '-' => '=',
                    '~' => '/'
                )
        );

        return parent::decode($string, $key);
    }
} ?>