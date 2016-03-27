<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promocion extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
        public function __construct()
        {
            parent::__construct();
            $this->load->model('promocion_model','promocion');
        }

        public function index()
        {
            $this->load->helper('url');
            $this->load->view('promocion_view');
        }

        public function ajax_list()
        {
            $list = $this->promocion->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $promocion) {
                $no++;
                $row = array();
                $row[] = $promocion->titulo;
                $row[] = $promocion->empresa;
                $row[] = $promocion->desc_empresa;
                $row[] = $promocion->direccion;
                $row[] = $promocion->telefono;
                $row[] = $promocion->desc_descuento;
                $row[] = $promocion->desc_restriccion;
                $row[] = $promocion->imagen;

                //add html for action
                $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="edit_promocion('."'".$promocion->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                      <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_promocion('."'".$promocion->id."'".')"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>';

                $data[] = $row;
            }

            $output = array(
                            "draw" => $_POST['draw'],
                            "recordsTotal" => $this->promocion->count_all(),
                            "recordsFiltered" => $this->promocion->count_filtered(),
                            "data" => $data,
                    );
            //output to json format
            echo json_encode($output);
        }

        public function ajax_edit($id)
        {
            $data = $this->promocion->get_by_id($id);
            echo json_encode($data);
        }

        public function ajax_add()
        {
            $this->_validate();
            $data = array(
                    'titulo' => $this->input->post('titulo'),
                    'empresa' => $this->input->post('empresa'),
                    'desc_empresa' => $this->input->post('desc_empresa'),
                    'direccion' => $this->input->post('direccion'),
                    'telefono' => $this->input->post('telefono'),
                    'desc_descuento' => $this->input->post('desc_descuento'),
                    'desc_restriccion' => $this->input->post('desc_restriccion'),
                    'imagen' => $this->input->post('imagen')
                );
            $insert = $this->promocion->save($data);
            echo json_encode(array("status" => TRUE));
        }

        public function ajax_update()
        {
            $this->_validate();
            $data = array(
                    'titulo' => $this->input->post('titulo'),
                    'empresa' => $this->input->post('empresa'),
                    'desc_empresa' => $this->input->post('desc_empresa'),
                    'direccion' => $this->input->post('direccion'),
                    'telefono' => $this->input->post('telefono'),
                    'desc_descuento' => $this->input->post('desc_descuento'),
                    'desc_restriccion' => $this->input->post('desc_restriccion'),
                    'imagen' => $this->input->post('imagen')
                );
            $this->promocion->update(array('id' => $this->input->post('id')), $data);
            echo json_encode(array("status" => TRUE));
        }

        public function ajax_delete($id)
        {
            $this->promocion->delete_by_id($id);
            echo json_encode(array("status" => TRUE));
        }
        
        private function _validate()
        {
            $data = array();
            $data['error_string'] = array();
            $data['inputerror'] = array();
            $data['status'] = TRUE;

            if($this->input->post('titulo') == '')
            {
                $data['inputerror'][] = 'titulo';
                $data['error_string'][] = "El campo 'Título' es obligatorio.";
                $data['status'] = FALSE;
            }

            if($this->input->post('empresa') == '')
            {
                $data['inputerror'][] = 'empresa';
                $data['error_string'][] = "El campo 'Empresa' es obligatorio.";
                $data['status'] = FALSE;
            }

            if($this->input->post('desc_empresa') == '')
            {
                $data['inputerror'][] = 'desc_empresa';
                $data['error_string'][] = "El campo 'Desc. Empresa' es obligatorio.";
                $data['status'] = FALSE;
            }

            if($this->input->post('direccion') == '')
            {
                $data['inputerror'][] = 'direccion';
                $data['error_string'][] = "El campo 'Dirección' es obligatorio.";
                $data['status'] = FALSE;
            }
            
            if($this->input->post('telefono') == '')
            {
                $data['inputerror'][] = 'telefono';
                $data['error_string'][] = "El campo 'Teléfono' es obligatorio.";
                $data['status'] = FALSE;
            } else {
                if(!is_numeric($this->input->post('telefono')))
                {
                    $data['inputerror'][] = 'telefono';
                    $data['error_string'][] = "El campo 'Teléfono' debe ser entero.";
                    $data['status'] = FALSE;
                }
            }

            if($this->input->post('desc_descuento') == '')
            {
                $data['inputerror'][] = 'desc_descuento';
                $data['error_string'][] = "El campo 'Desc. Descuento' es obligatorio.";
                $data['status'] = FALSE;
            }
            
            if($this->input->post('desc_restriccion') == '')
            {
                $data['inputerror'][] = 'desc_restriccion';
                $data['error_string'][] = "El campo 'Desc. Restricción' es obligatorio.";
                $data['status'] = FALSE;
            }

            if($this->input->post('imagen') == '')
            {
                $data['inputerror'][] = 'imagen';
                $data['error_string'][] = "El campo 'Imagen' es obligatorio.";
                $data['status'] = FALSE;
            } else {
                if(!is_numeric($this->input->post('imagen')))
                {
                    $data['inputerror'][] = 'imagen';
                    $data['error_string'][] = "El campo 'Imagen' debe ser entero.";
                    $data['status'] = FALSE;
                }
            }
            
            if($data['status'] === FALSE)
            {
                echo json_encode($data);
                exit();
            }
        }
        
}
