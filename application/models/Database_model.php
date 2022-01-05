<?php

use GuzzleHttp\Client;

class Database_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/ge-computer/'
        ]);
    }

    public function getAllKomputer()
    {

        $response = $this->_client->request('GET', 'Ge_computer');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['message'];
    }

    public function getKomputerId($id)
    {
        $response = $this->_client->request('GET', 'Ge_computer', [
            'query' => [
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['message'][$id];
    }

    public function tambahKomputer()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "gambar" => $this->input->post('gambar', true),
            "harga" => $this->input->post('harga', true)
        ];

        $response = $this->_client->request('POST', 'Ge_computer', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusKomputer($nama)
    {
        $response = $this->_client->delete('Ge_computer', [
            'form_params' => [
                'nama' => $nama,
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahDataKomputer()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "nama" => $this->input->post('nama', true),
            "gambar" => $this->input->post('gambar', true),
            "harga" => $this->input->post('harga', true),

        ];

        $response = $this->_client->request('PUT', 'Ge_computer', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function cariDataDatabase()
    {
        // $keyword = $this->input->post('keyword', true);
        // $this->db->like('nama', $keyword);
        // $this->db->or_like('gambar', $keyword);
        // $this->db->or_like('harga', $keyword);
        // return $this->db->get('database')->result_array();
        return false;
    }
}
