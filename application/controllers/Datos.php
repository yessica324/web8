<?php

class Datos extends CI_Controller
{
    public function index()
    {
        echo "soy el inicio";
    }
    public function nuevo()
    {
        // $this->load->helper('url');
        $this->load->helper('form');
        $this->load->view('datos/nuevo');

    }
    public function guardar()
    {
        $nombre=$this->input->get('nombre');
        $apellido=$this->input->get('apellido');
        $edad=$this->input->get('edad');
        $carnet=$this->input->get('carnet');

        echo "GUARDANDO LOS DATOS de " . $nombre . $apellido . " con la edad " . $edad . " y su carnet es: " . $carnet;
    }
}
