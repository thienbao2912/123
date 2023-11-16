<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Drool</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <?php 
	//	$sql_category = mysqli_query($conn,'SELECT * FROM loaisanpham ORDER BY id_lsp DESC');
	?>
<link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
    rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="css/templatemo-topic-listing.css" rel="stylesheet">
<link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/admin/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../assets/admin/dist/css/bootstrap-icons.css" rel="stylesheet">

    <link href="../assets/admin/dist/css/templatemo-topic-listing.css" rel="stylesheet">
</head>

<body>
<nav class="bg-white navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand text-dark" href="index.php">
                    <i class="bi-back"></i>
                    <span>ĐBSHOP</span>
                </a>

                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll text-dark" href="index.php">Trang Chủ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="sanpham-ds.php" id="navbarLightDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Danh Mục</a>

                            <ul class="dropdown-menu dropdown-menu-light bg-dark" aria-labelledby="navbarLightDropdownMenuLink">
                            <?php 
							$sql_category_danhmuc = mysqli_query($conn,'SELECT * FROM loaisanpham ORDER BY id_lsp DESC');
							while($row_category_danhmuc = mysqli_fetch_array($sql_category_danhmuc)){
						?>
						<li class="nav-item bg-dark mr-lg-2 mb-lg-0 mb-2">

							<a class="nav-link" href="?quanly=danhmuc&id=<?php echo $row_category_danhmuc['id_lsp'] ?>" role="button"  aria-haspopup="true" aria-expanded="false">
								<?php echo $row_category_danhmuc['ten'] ?>
							</a>
							
						</li>
						<?php
						} 
						?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll text-dark" href="#section_2">Giới Thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll text-dark" href="#section_2">Liên Hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll text-dark" href="#section_2">Hỏi Và Đáp</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll text-dark" href="giohang.php">Giỏ Hàng</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll text-dark" href="dangnhap.php">Đăng Nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll text-dark" href="../admin/dangnhap.php">Admin</a>
                        </li>
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="./dangky.php" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>