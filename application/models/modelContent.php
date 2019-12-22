<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelContent extends CI_Model
{
    private $_table = 'content';

    public $content_id;
    public $profile_perusahaan;
    public $visi_perusahaan;
    public $misi_perusahaan;
    public $alamat_perusahaan;

    public function rules()
    {
        return [
            [
                'field' => 'profile',
                'label' => 'Profile Perusahaan',
                'rules' => 'required'
            ],
            [
                'field' => 'visi',
                'label' => 'Visi Perusahaan',
                'rules' => 'required'
            ],
            [
                'field' => 'misi',
                'label' => 'Misi Perusahaan',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat Perusahaan',
                'rules' => 'required'
            ]
        ];
    }

    // get all content in database
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    // get all content in database by id
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['content_id' => $id])->row();
    }

    // save content
    public function save()
    {
        $post = $this->input->post();
        $this->content_id = uniqid();
        $this->profile_perusahaan = $post["profile_perusahaan"];
        $this->visi_perusahaan = $post["visi_perusahaan"];
        $this->misi_perusahaan = $post["misi_perusahaan"];
        $this->alamat_perusahaan = $post["alamat_perusahaan"];
        $this->db->insert($this->_table, $this);
    }

    // update content
    public function update()
    {
        $post = $this->input->post();
        $this->content_id = $post["content_id"];
        $this->profile_perusahaan = $post["profile_perusahaan"];
        $this->visi_perusahaan = $post["visi_perusahaan"];
        $this->misi_perusahaan = $post["misi_perusahaan"];
        $this->alamat_perusahaan = $post["alamat_perusahaan"];
        $this->db->update($this->_table, $this, array('content_id' => $post['id']));
    }

    // delete content
    public function delete($id)
    {
        return $this->db->delete($this->_table, array('content_id' => $id));
    }
}
