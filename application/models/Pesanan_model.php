<?php

use GuzzleHttp\Client;

class Pesanan_model extends CI_model
{

  private $_client;
  public function __construct()
  {
    $this->_client = new Client([
      'base_uri' => 'http://localhost/gunung/api/',

    ]);
  }


  public function getAllPesan()
  {

    $response = $this->_client->request('GET', 'pesanan', [
      'query' => [
        'kdr-key' => 'kdr123'
      ]
    ]);
    $result = json_decode($response->getbody()->getContents(), true);

    return $result['data'];
  }

  public function getPesanById($id_pesan)
  {
    $response = $this->_client->request('GET', 'pesanan', [
      'query' => [
        'kdr-key' => 'kdr123',
        'id_pesan' => $id_pesan
      ]
    ]);
    $result = json_decode($response->getbody()->getContents(), true);
    return $result['data'][0];
  }

  public function tambahDataPesan()
  {

    $data = [
      'nama_team' => $this->input->post('nama_team', true),
      'alamat' => $this->input->post('alamat', true),
      'tanggal_berangkat' => $this->input->post('tanggal_berangkat', true),
      'tanggal_pulang' => $this->input->post('tanggal_pulang', true),
      'no_hp' => $this->input->post('no_hp', true),
      'kdr-key' => 'kdr123'
    ];
    $response = $this->_client->request('POST', 'pesanan', [
      'form_params' => $data
    ]);
    $result = json_decode($response->getbody()->getContents(), true);

    return $result;
  }

  public function hapusDataPesan($id_pesan)
  {
    $response = $this->_client->request('DELETE', 'pesanan', [
      'form_params' => [
        'id_pesan' => $id_pesan,
        'kdr-key' => 'kdr123'
      ]
    ]);
    $result = json_decode($response->getbody()->getContents(), true);

    return $result;
  }

  public function ubahDataPesan()
  {
    $data = [
      'id_pesan' => $this->input->post('id_pesan', true),
      'nama_team' => $this->input->post('nama_team', true),
      'alamat' => $this->input->post('alamat', true),
      'tanggal_berangkat' => $this->input->post('tanggal_berangkat', true),
      'tanggal_pulang' => $this->input->post('tanggal_pulang', true),
      'no_hp' => $this->input->post('no_hp', true),
      'kdr-key' => 'kdr123'
    ];

    $response = $this->_client->request('PUT', 'pesanan', [
      'form_params' => $data
    ]);
    $result = json_decode($response->getbody()->getContents(), true);

    return $result;
  }
}
