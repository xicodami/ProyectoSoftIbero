<?php session_start();
    class Logout{
        public function __construct(){}
        # --  Cerrar Sesión ----//
        public function index(){
            session_destroy();
            header("Location: ?");
        }
    }
