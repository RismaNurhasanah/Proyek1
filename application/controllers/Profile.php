<?php
    class Profile extends CI_Controller{

        function index(){
            $this->load->view('vprofile');
        }
        function biodata(){
            $this->load->view('vbiodata');
        }
        function coba($namad, $namab, $tempatlahir, $tanggall, $jeniskelamin, $alamat, $jenjang){

            $add = [
                'nmd'    => $namad,
                'nmb'    => $namab,
                'tmpl'   => $tempatlahir,
                'tgll'   => $tanggall,
                'jk'     => $jeniskelamin,
                'almt'   => $alamat,
                'jjg'    => $jenjang,
            ];
            $this->load->view('vtampildata', $add);
        }
        function tambah_data(){
            $this->load->view('vtambah_data');
        }
        function action_tambah_data(){
            $add = [
                'namad'         => $this->input->post('namad'),
                'namab'         => $this->input->post('namab'),
                'tempatlahir'   => $this->input->post('tempatlahir'),
                'tanggall'      => $this->input->post('tanggall'),
                'jeniskelamin'  => $this->input->post('jeniskelamin'),
                'alamat'        => $this->input->post('alamat'),
                'jenjang'       => $this->input->post('jenjang'),
            ];

            $this->db->insert('tbl_profile', $add);
            redirect('../profile/tampil_data');
        }
        public function tampil_data(){ 
            $this->load->model('M_profile'); 
            $data['profile'] = $this->M_profile->tampil_data()->result(); 
            $this->load->view('vtampildata', $data); 
        } 
        public function update_data($id){
            $this->load->model('M_profile');
            $data['profile'] = $this->M_profile->get_data_by_id($id)->row_array();
            $this->load->view('vupdatedata', $data);
        }
        public function action_update_data(){
            $id = $this->input->post('id');
            $update = [
                'namad'         => $this->input->post('namad'),
                'namab'         => $this->input->post('namab'),
                'tempatlahir'   => $this->input->post('tempatlahir'),
                'tanggall'      => $this->input->post('tanggall'),
                'jeniskelamin'  => $this->input->post('jeniskelamin'),
                'alamat'        => $this->input->post('alamat'),
                'jenjang'       => $this->input->post('jenjang'),
            ];
            $update = $this->db->update('tbl_profile', $update, ['id' => $id]);
            redirect('../profile/tampil_data');
        }
        public function hapus_data($id){
            $id = $id;
            $this->db->delete('tbl_profile', ['id' => $id]);
            redirect('../profile/tampil_data');
        }
        
    }
?>