<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promocion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database('default');
        $this->load->model('mfiles');
        $this->load->model('mpromociones');
        is_logged_in() ? true : redirect('admin');
    }

    public function index() {
        $data['data'] = $this->mpromociones->promociones_entrys();
        $this->load->view('admin/promociones', $data);
    }

    public function viewhtml() {
        $this->load->view('promocion');
    }

    public function form($id = false) {
        $this->load->model('mcategorias');
        $this->load->model('mempresas');
        $this->load->model('mprovincias');
        $this->load->model('mdestacadas');
        $data['categorias'] = $this->mcategorias->categorias_entrys();
        $data['empresas'] = $this->mempresas->empresas_entrys();
        $data['provincias'] = $this->mprovincias->provincias_entrys();
        if ( $id ) {
            $data['datap'] = $this->mprovincias->provincias_promo($id);
            $data['datad'] = $this->mdestacadas->destacadas_promo($id);
            $data['data'] = $this->mpromociones->promociones_entrys($id);
        }
        if ( $id )
            $this->load->view('admin/promocionesedit', $data);
        else {
            unset($data['data']);
            $this->load->view('admin/promocionesedit', $data);
        }
    }

    public function edit($id) {
        $config['upload_path'] = './uploads/promociones';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        
        if ( $this->upload->do_upload('imagen') ) {
            $dataimg = $this->upload->data();
            $imagenid = $this->mfiles->insert_file( array('nombre' => $dataimg['file_name'], 'fecha' => strtotime("now")) );
            //rename("./uploads/promociones/" . $dataimg['file_name'], "./uploads/promociones/" . $imagenid . $dataimg['file_ext']);
        }
        else
            $imagenid = $this->input->post('imagenh'); 

        $formdata = array (
            'id' => $id,
            'titulo' => $this->input->post('titulo'),
            'bajada' => $this->input->post('bajada'),
            'descripcion' => $this->input->post('descripcion'),
            'restriccion' => $this->input->post('restriccion'),
            'direcciones' => $this->input->post('direcciones'),
            'descuento' => $this->input->post('descuento'),
            'empresaid' => $this->input->post('empresaid'),
            'categoriaid' => $this->input->post('categoriaid'),
            'nuevo' => $this->input->post('nuevo'),
            'imagen' => $imagenid,
            'mod_created' => strtotime("now")
        );
        $this->mpromociones->promociones_update($formdata);
        $this->mpromociones->promociones_destacadas($id, $this->input->post('destacadas'));
        $this->mpromociones->promociones_provincia_create($id, $this->input->post('provincias'));
        redirect('promocion');
    }

    public function add() {
        $config['upload_path'] = './uploads/promociones';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        
        if ( $this->upload->do_upload('imagen') ) {
            $dataimg = $this->upload->data();
            $imagenid = $this->mfiles->insert_file( array('nombre' => $dataimg['file_name'], 'fecha' => strtotime("now")) );
        }
        $data['data'] = $this->mpromociones->promociones_entrys();
        $formdata = array (
            'titulo' => $this->input->post('titulo'),
            'bajada' => $this->input->post('bajada'),
            'descripcion' => $this->input->post('descripcion'),
            'restriccion' => $this->input->post('restriccion'),
            'direcciones' => $this->input->post('direcciones'),
            'descuento' => $this->input->post('descuento'),
            'empresaid' => $this->input->post('empresaid'),
            'categoriaid' => $this->input->post('categoriaid'),
            'nuevo' => $this->input->post('nuevo') ? $this->input->post('nuevo') : 0,
            'imagen' => $imagenid ? $imagenid : 0,
            'created' => strtotime("now"),
            'mod_created' => strtotime("now"),
        );
        $id = $this->mpromociones->promociones_create($formdata);
        $this->mpromociones->promociones_provincia_create($id, $this->input->post('provincias'));
        redirect('promocion');
    }

    public function delete($id) {
        $this->load->model('mdestacadas');
        $this->mdestacadas->destacadas_delete_bypromo($id);
        $this->mpromociones->promociones_delete($id);
        redirect('promocion');
    }
}