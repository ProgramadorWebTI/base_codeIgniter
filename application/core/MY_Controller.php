<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{ 
public function __construct()
{
parent::__construct();
$logado = $this->session->userdata('autenticado');
if ($logado != 1)
redirect(base_url('logar'));
}
}
