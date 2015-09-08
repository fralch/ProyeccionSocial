<?php
class NoticiasController extends AppController
{
	public $helpers = array ('Html','Form');
	public function index()
	{
		$this->set('noticias', $this->Noticia->find('all'));
	}
	public function home()
	{
		$this->set('noticias', $this->Noticia->find('all'));
	}

	public function admision() {

	}
}
?>