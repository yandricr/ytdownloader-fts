<?php
// author: yandricr
// date: 16/12/2022

namespace Ytfts\Downloader;

use Exception;

class Downloader {
    
    public function getInf($ul){
        $err = array("message" => "error", "name" => "ytdownloader-fts");
        try {
            $con = @file_get_contents("https://ytdownloader.projectsrpp.repl.co/?q=".urlencode($ul));
            if($con != true){
                return json_encode($err);
            } else {
                return $con;
            }
        } catch(Exception $e){
            return json_encode($err);
        }
    }

}

?>