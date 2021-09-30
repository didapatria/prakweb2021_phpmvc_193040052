<?php

class About
{
  // method
  public function index($nama = 'Adinda', $pekerjaan = 'Mahasiswa', $umur = 22)
  {
    echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun.";
  }
  public function page()
  {
    echo 'About/page';
  }
}
