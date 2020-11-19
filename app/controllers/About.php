<?php
class About
{
  public function index($nama = 'Sulistio', $pekerjaan = 'Programmer')
  {
    echo "Halo Saya $nama, saya adalah seorang $pekerjaan";
  }
  public function page()
  {
    echo 'About/page';
  }
}
