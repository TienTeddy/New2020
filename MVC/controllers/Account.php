<?php
class Account extends Controller{

        public $SinhVienModel;

        function __construct(){

            $this->SinhVienModel=$this->model("SinhVienModel");
        }

        function Login(){

             $this->View("Account/Login",[
                "Page"=>"Login"
            ]);
        }

    }
?>