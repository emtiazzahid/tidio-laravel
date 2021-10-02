<?php

namespace EmtiazZahid\Tidio;

class TidioAPI
{
    /**
     * Echo out the tidio widget script
     *
     * @param  string|null  $link
     * @return void
     * @throws \Exception
     */
    public function widgetCode(string $link = null)
    {
        $link = $link ?? config('tidio.link');

        if (empty($link)) {
            throw new \Exception('Your tidio public key can not be empty.');
        }

        echo self::script($link);
    }

    /**
     * Create Tidio JavaScript code.
     *
     * @param  string  $key
     * @return string
     */
    private static function script(string $key) : string
    {
        $embed_link = 'https://code.tidio.co/' . $key . '.js';

        return '<script type="text/javascript" src="'.$embed_link.'" async></script>';
    }
}
