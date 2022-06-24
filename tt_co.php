<?php

     trait BanglaTv{
        
        public function go(){
           echo " go bangldesh ";

        }

     }

     class EnglishTv {

     	use BanglaTv;
     }


     $diTv = new EnglishTv();



     $diTv->go();





?>