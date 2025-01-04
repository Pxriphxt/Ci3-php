<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portfolio | Puriphat Paosee</title>
    <!-- Font icons -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/themify-icons/css/themify-icons.css'); ?>">
    <!-- Bootstrap main styles -->
    <link rel="stylesheet" href="<?= base_url('assets/css/work1.css'); ?>">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <h4 class="header-subtitle">Hello, I am</h4>
                <h1 class="header-title">Puriphat Paosee</h1>
            </div>
        </div>
    </header>

    <!-- Navbar Section -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="<?php echo base_url(); ?>" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('about'); ?>" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('resume'); ?>" class="nav-link">Resume</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('portfolio'); ?>" class="nav-link">Portfolio</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('cars'); ?>" class="nav-link">Cars</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('cars/create'); ?>" class="nav-link">Add Cars</a></li>
                </ul>
            </div>
        </div>
    </nav>

        <!-- About Section -->
        <section id="about" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Who am I?</h3>
                    <p>My name is Puriphat Paosee</p>
                </div>
                <div class="col-md-4">
                    <h3>Personal Info</h3>
                    <ul class="list-unstyled">
                        <li><strong>Name:</strong> Puriphat Paosee</li>
                        <li><strong>Nickname:</strong> Poom</li>
                        <li><strong>Birthdate:</strong> 22/09/2005</li>
                        <li><strong>Email:</strong> puriphatpaoshi@gmail.com</li>
                        <li><strong>Phone:</strong> + (66) 65-482-0800</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>My Experience</h3>
                    <p>NT Service Center Phrae</p>
                </div>
            </div>
        </div>
    </section>

      <!-- Resume Section -->
      <section id="resume" class="section bg-light">
        <div class="container">
            <h2 class="mb-5">My <span class="text-danger">Resume</span></h2>
            <div class="row">
                <div class="col-md-4">
                    <h4>Experience</h4>
                    <p>2022-2023: NT Service Center Phrae</p>
                </div>
                <div class="col-md-4">
                    <h4>Education</h4>
                    <p>2001 - Present: Technicphrae</p>
                    <p>1997 - 2000: Piriyalai School Phrae</p>
                    <p>1991 - 1997: Watmethangkarawas</p>
                </div>
                <div class="col-md-4">
                    <h4>Skills</h4>
                    <p>HTML & CSS - 85%</p>
                    <p>JavaScript - 75%</p>
                    <p>PHP - 80%</p>
                    <h4>Languages</h4>
                    <p>English - 70%</p>
                </div>
            </div>
        </div>
    </section>

     <!-- Portfolio Section -->
     <section id="portfolio" class="section">
        <div class="container">
            <h2 class="mb-5">My <span class="text-danger">Portfolio</span></h2>
            <div class="row">
                <!-- Portfolio Item 1 -->
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?= base_url('assets/imgs/1.jpg'); ?>" class="img-fluid" alt="Project 1">
                        <h6>2564</h6>
                        <p>โครงการเชิดชูเกียรติผู้มีความประพฤติดีระดับภาคเรียน 2</p>
                    </div>
                </div>
                <!-- Portfolio Item 2 -->
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?= base_url('assets/imgs/2.jpg'); ?>" class="img-fluid" alt="Project 2">
                        <h6>2565</h6>
                        <p>โครงการเชิดชูเกียรติผู้มีความประพฤติดีระดับภาคเรียน 1</p>
                    </div>
                </div>
                <!-- Portfolio Item 3 -->
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?= base_url('assets/imgs/3.jpg'); ?>" class="img-fluid" alt="Project 3">
                        <h6>2566</h6>
                        <p>โครงการเชิดชูเกียรติผู้มีความประพฤติดีระดับภาคเรียน 1</p>
                    </div>
                </div>
                <!-- Portfolio Item 4 -->
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?= base_url('assets/imgs/4.jpg'); ?>" class="img-fluid" alt="Project 4">
                        <h6>2566</h6>
                        <p>โครงการเชิดชูเกียรติผู้มีความประพฤติดีระดับภาคเรียน 2</p>
                    </div>
                </div>
                <!-- Portfolio Item 5 -->
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?= base_url('assets/imgs/5.jpg'); ?>" class="img-fluid" alt="Project 5">
                        <h6>2565</h6>
                        <p>โครงการเชิดชูเกียรติผู้มีผลการเรียนดีระดับภาคเรียน 2</p>
                    </div>
                </div>
                <!-- Portfolio Item 6 -->
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?= base_url('assets/imgs/6.jpg'); ?>" class="img-fluid" alt="Project 6">
                        <h6>2566</h6>
                        <p>โครงการเชิดชูเกียรติผู้มีผลการเรียนดีระดับภาคเรียน 2</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Scripts -->
    <script src="<?= base_url('assets/vendors/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap/bootstrap.bundle.js'); ?>"></script>
    <script src="<?= base_url('assets/js/work1.js'); ?>"></script>
</body>
</html>
