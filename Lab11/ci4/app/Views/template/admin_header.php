<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="<?= base_url('/artikel_style.css'); ?>">

</head>

<body>
  <div id="container">
    <header>
      <h1>Admin Portal Berita</h1>
    </header>
    <!-- index.php/admin/artikel -->
    <nav>
      <a href="<?= base_url('index.php/admin/artikel'); ?>" class="active">Dashboard</a>
      <a href="<?= base_url('/artikel'); ?>">Artikel</a>
      <a href="<?= base_url('index.php/admin/artikel/add'); ?>">Tambah Artikel</a>
      <a href="<?= base_url('/user/logout'); ?>">Logout</a>
    </nav>
    <section id="wrapper">
      <section id="main">