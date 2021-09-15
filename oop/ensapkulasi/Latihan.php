<?php   

    class Login 
    {
        
        public $namaLengkap ="Farid Ahmad";
        protected $username ="FaridAhmad013";
        private $password ="khairil0610";

        public function prosesLogin()
        {
            return $this->username == "FaridAhmad013" && $this->password == "khairil0610" ? "Login Sukses" : "Login Gagal";
        }

        public function getInfo()
        {
            return "<li>Username : <b>{$this->username}</b> </li> <li>Nama Lengkap : <b>{$this->namaLengkap}</b></li> ";
        }

    }

    $login = new Login;

    echo "Nama Lengkap : <b>{$login->namaLengkap}</b> <br>";
    echo "Info User :{$login->getInfo()} <br>";
    echo "Status Login : <b>{$login->prosesLogin()}</b>";

