<?php

if (isset($_POST['submit'])) {
  $namelist = ['Michel', 'Flo', 'Basti', 'Trine'];
  $name = $_POST['name'];

  if (in_array($name, $namelist)) {
    echo 'Willkommen im Klub';
  } else {
    echo 'verpiss dich!';
  }
}

?>