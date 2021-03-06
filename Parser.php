<?php
require_once 'ParserInterface.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Parser
 *
 * @author r_tru
 */
class Parser implements ParserInterface {

    public function process(string $url, string $tag): array {
        $htmlpage = file_get_contents($url);
        if($htmlpage === false){
            return ['INVALID PAGE'];
        }
        $patch = "/<$tag.*?>(.*?)<\/$tag>/s";
        preg_match_all($patch, $htmlpage, $string);
        
        if(empty($string[1])){
            return ["Даних тегів на цій сторінці не знайдено"];
        }
       
        return $string[1];
    }
}
