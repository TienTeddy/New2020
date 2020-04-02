<?php
class Home extends Controller{
        function index(){
            //Views
            $str="Tien handsome";
            $this->View("index",[
                "page"=>"contact",
                "params"=>$str,

            ]);
        }

        function detail(){
            $sv=$this->Model("SinhVienModel");
            echo $sv->GetSV();
        }
        
        function Show(){

            //Views
            $str="Tien handsome";
            $this->View("index",[
                "page"=>"contact",
                "params"=>$str,

            ]);
        }
    }
?>