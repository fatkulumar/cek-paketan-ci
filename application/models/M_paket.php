<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
     
    class M_paket extends CI_Model{
        private $table = "tb_paket";

        function tampil_data_asc(){
            return $this->db
            ->order_by('id_paket','asc')
            ->get($this->table)->result_array();
        }

        function tampil_data_desc(){
            return $this->db
            ->order_by('id_paket','desc')
            ->get($this->table)->result_array();
        }

        public function getOne($id)
        {
            return $this->db->get_where($this->table, ["id_paket" => $id])->row();
        }

        function hapus_data($id)
        {
            return $this->db->delete($this->table, array("id_paket" => $id));
        }
    
        function input_paket($data,$table)
        {
            $this->db->insert($table,$data);
        }

        function update_data($data, $table, $id)
        {
            $this->db->update($table, $data, ["id_paket" => $id]);
        }

        function hitungCod()
        {
            return $this->db->get_where($this->table, ['jenis_kirim' => 'COD'])->num_rows();
        }

        function hitungLangsung()
        {
            return $this->db->get_where($this->table, ['jenis_kirim' => 'Langsung'])->num_rows();
        }

        function grafikNamaPaket()
        {
            return $query = $this->db
            ->select('nama_paket,jenis_kirim, count(*) as jumlah')
            ->group_by('nama_paket')
            ->get($this->table);

            //dadi siji kene g iso a
        
        }
    }

?>  