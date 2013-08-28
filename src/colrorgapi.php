<?php

/**
 * Description of colrorgapi
 * @author do9iigane
 */

namespace colrlib\src;

class colrorgapi {

    var $colrorgAPI = 'http://www.colr.org/json';

    public function rand($num = null)
    {
        $endpointuri = isset($num) ? "/colors/random/$num" : "/color/random";
        $result = json_decode(file_get_contents($this->colrorgAPI . $endpointuri));
        return $result;
    }

    public function getColor($type = null, $num = null)
    {
        switch ($type) {
            case 'rand':
                $result = $this->rand($num);
                break;
            case 'latest':
                $result = $this->latest();
                break;
            default:
                break;
        }

        return isset($num) ? $result->matching_colors : $result->new_color;
    }

    public function latest()
    {
        $endpointuri = "/color/latest";
        $result = json_decode(file_get_contents($this->colrorgAPI . $endpointuri));
        return $result;
    }

}

?>
