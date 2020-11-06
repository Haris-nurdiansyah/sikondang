<?php
    class Koneksi{
        public function open_db(){
            $kon = mysqli_connect("localhost","root","","sikondang");
            return $kon;
        }
    }
?>