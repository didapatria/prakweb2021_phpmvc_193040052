<?php

class About
{
  // method
  public function index($nama = 'Adinda', $pekerjaan = 'Mahasiswa')
  {
    echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
  }
  public function page()
  {
    echo 'About/page';
  }
}
