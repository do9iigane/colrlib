<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of colrorgapi
 *
 * @author do9iigane
 */
class colrorgapi {

    var $colrorgAPI = 'http://www.colr.org/json';

    public function rand($num = null)
    {
        $endpointuri = isset($num) ? "/colors/random/$num" : "/color/random";
        $result = json_decode(file_get_contents($this->colrorgAPI . $endpointuri));
        return $result;
    }

    public function randColor($num = null)
    {
        $rand = $this->rand($num);
        return isset($num) ?$rand->matching_colors:$rand->new_color;
    }

}

?>
