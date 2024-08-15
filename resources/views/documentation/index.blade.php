<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> MAANLMS </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/documentation/assets/img/favicon.png') }}">

	<!-- ========== Start Stylesheet ========== -->
	<link href="{{ asset('public/documentation/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/documentation/assets/css/fontawesome.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/documentation/assets/css/bsnav.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/documentation/style.css') }}" rel="stylesheet">
	<link href="{{ asset('public/documentation/assets/css/responsive.css') }}" rel="stylesheet" />
	<!-- ========== End Stylesheet ========== -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="{{ asset('public/documentation/assets/js/html5/html5shiv.min.js') }}"></script>
		<script src="{{ asset('public/documentation/assets/js/html5/respond.min.js') }}"></script>
	<![endif]-->

	<!-- ========== Google Fonts ========== -->
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:400,600') }}" rel="stylesheet">
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:400,600') }}" rel="stylesheet">

</head>

<body>

	<!-- Start Header
    ============================================= -->
    <header class="header">
		<div class="col-xl-12">
			<div class="main-navigation">
			<div class="navbar navbar-expand-sm bsnav bsnav-sticky bsnav-scrollspy">
					<div class="container">
						<a class="navbar-brand" href="#home"><img src="{{ asset('public/documentation/assets/img/logo.png') }}" alt="thumb"></a>
						<button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
						<div class="collapse navbar-collapse justify-content-sm-end">
							<ul class="navbar-nav navbar-mobile mr-0">
								<li class="nav-item"><a class="nav-link smooth-menu" href="#start" data-scrollspy="start">start</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="#intro" data-scrollspy="intro">intro</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="#installation" data-scrollspy="installation">installation</a></li>
								<li class="nav-item"><a class="nav-link smooth-menu" href="#frontend" data-scrollspy="frontend">forntend</a></li>
                                <li class="nav-item"><a class="nav-link smooth-menu" href="#customization" data-scrollspy="customization">dashboard</a></li>

							</ul>
						</div>
					</div>
				</div>
				<div class="bsnav-mobile">
					<div class="bsnav-mobile-overlay"></div>
					<div class="navbar"></div>
				</div>
			</div>
		</div>
    </header>
    <!-- End Header -->

	<section id="start" class="de-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="item">
                        <div class="heading">
                            <h1>MAANLMS </h1>
                        </div>
                        <ul>
                            <li><strong>Created:</strong> 15/08/2022</li>
                            <li><strong>By:</strong> <a target="_blank" href="{{ asset('walaahassan.com') }}">walaahassan</a></li>
                            <li><strong>Email:</strong> <a href="mailto:walaahassan2021.com">walaahassan2021.com</a></li>
                        </ul>
                        <p>
                            Thank you for purchasing our product. We hope that you find all your questions regarding this product answered in this Documentation as much in details as possible. However, if you still need support, do not hesitate to contact us at our support forum for this Template. If you have any questions that are beyond the scope of this help file, please feel free to email me. Thanks so much!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="intro" class="de-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="item">
                        <div class="heading">
                            <h1>Intro</h1>
                            <div class="alert alert-info">
                                <strong>MAANLMS</strong> Documentation <strong>V1.0.0</strong>
                            </div>
                        </div>

                        <p>
                           In the following sections we will explain how to set up and use <strong>MAANLMS</strong> Creative Portfolio & Ajency Script the easiest way possible. Although there're a lot of things written in this documentation, the theme itself is not hard to use. After installing the theme, you can discover everything yourself. This file is more of a reference if you do not know what to do, or if you are not familiar with Laravel.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="installation" class="de-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="item">
                        <div class="heading">
                            <h1>Installation</h1>
                        </div>
                        <p>After you’ve downloaded the main theme archive from CodeCanyon you’ll see the following items inside:</p>
                        <ol>

                                <ul>
                                    <li><code>maanlms(.zip)</code> - The actual files that you will need to upload into your web server setup.</li>
                                    <li><code>db_maanlms.sql</code> – It contains the database you need to install on your server.</li>
                                    <li><code>documentation (folder)</code> - Documentation files</li>

                                </ul>

                        </ol>
                        <h5>We can now install <strong>MAAM|LMS</strong>. Don't worry, it's simple and fun.</h5>
                        <div class="heading">
                            <h3>Server Requirements</h3>

                            <ol>

                                <ul>
                                    <li><code>PHP >= 8.0</code> </li>
                                    <li><code>Ctype PHP Extension</code></li>
                                    <li><code>Fileinfo PHP extension</code> </li>
                                    <li><code>JSON PHP Extension</code> </li>
                                    <li><code>Mbstring PHP Extension</code> </li>
                                    <li><code>OpenSSL PHP Extension</code> </li>
                                    <li><code>PDO PHP Extension</code> </li>
                                    <li><code>Tokenizer PHP Extension</code> </li>
                                    <li><code>XML PHP Extension</code> </li>

                                </ul>

                        </ol>



                        </div>

                        <div class="heading">
                            <h3>Step 1</h3>
                        </div>
                        <p>
                            1. You must first buy a domain name. This will be the name of your site. For example<strong> http://example.com</strong><br>
                            2. Then you should buy a Shared hosting or VPS hosting. This is completely your choice. Shared hosting is the one we recommend to save money for this project.<br>
                            3.<strong>Note:</strong> When buying your hosting, please do not forget to mark the Linux Operating System.
                         </p>
                         <div class="heading">
                            <hr>
                            <h3>Step 2</h3>
                        </div>
                        <p>
                            1. There is a <strong> cPanel</strong> on the server you bought. First, login to <strong> cPanel</strong>.<br>
                            2. Click <strong>MySQL® Databases</strong>
                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/database_create1.png') }}" alt="Thumb">
                        </p>
                        <p>
                            3. Set New Database Name.<br>
                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/database_name.png') }}" alt="Thumb">
                        </p>
                        <p>
                            4. Find <strong>MySQL Users</strong> title on the same page.<br>
                            5. Click <strong>Add</strong> buton.
                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/database_user.png') }}" alt="Thumb">
                        </p>
                        <p>
                            6. Find <strong>Add User To Database</strong>  title on the same page.<br>
                            7. <strong>Add New User</strong>
                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/add_user_database.png') }}" alt="Thumb">
                        </p>
                        <p>
                            8. On the page you are directed to, please select <strong>ALL PRIVILEGES</strong> checkbox and then click <strong>Make Changes</strong> button.<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/database_all_previleges.png') }}" alt="Thumb">
                        </p>
                        <p>
                            9. Come back to the homepage and click <strong>phpMyAdmin</strong><br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/phpmyadmin.png') }}" alt="Thumb">
                        </p>
                        <p>
                            10. On this page you will see your <strong>database</strong> and <strong>language</strong> change settings. You can change the language<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/phpmyadmin_language.png') }}" alt="Thumb">
                        </p>
                        <p>
                            11. When you click on the <strong>database</strong>, you will see that the tables have not been created yet.<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/phpmyadmin_db_select.png') }}" alt="Thumb">
                        </p>
                        <p>
                            12.Click <strong>Import</strong> tab.<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/import_database_tab.png') }}" alt="Thumb">
                        </p>
                        <p>
                            13.Please add the <strong>database</strong> you downloaded from <strong>CodeCanyon</strong> with the following operations, respectively.<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/import_database.png') }}" alt="Thumb">
                        </p>
                        <p>
                            14.Your <strong>tables</strong> have been added to your <strong>database</strong><br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/imported_table.png') }}" alt="Thumb">
                        </p>
                        <p>
                            <strong>Note</strong>: The created database information is as follows. You can use your own customization.<br>
                            <strong>Database</strong>: lmsmaantheme_dbname<br>
                            <strong>User</strong>: lmsmaantheme_username<br>
                            <strong>Password</strong>: strongpass=password<br>

                         </p>
                         <p>
                            <strong>Your database is now ready to be used. That's all.</strong>

                         </p>
                         <div class="heading">
                            <hr>
                            <h3>Step 3</h3>
                        </div>
                        <p>
                            1. There is a <strong> cPanel</strong> on the server you bought. First, login to <strong> cPanel</strong>.<br>
                            2. Click <strong>File Manager</strong>
                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/file_manager.png') }}" alt="Thumb">
                        </p>
                        <p>
                            3. Click on the <strong>public_html</strong> folder. Then you will see a field like the one below.<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/public_html.png') }}" alt="Thumb">
                        </p>
                        <p>
                            4. Click <strong>Upload</strong><br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/public_html_upload.png') }}" alt="Thumb">
                        </p>

                        <p>
                            5. Click <strong>Select File</strong> button<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/upload_button.png') }}" alt="Thumb">
                        </p>
                        <p>
                            6. Start the installation by zipping the <strong>maanlms(.zip)</strong> you downloaded from the <strong>CodeCanyon</strong><br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/upload_project.png') }}" alt="Thumb">
                        </p>
                        <p>
                            7. Make sure the installation is complete and continue to the next step.<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/upload_success.png') }}" alt="Thumb">
                        </p>
                        <p>
                            8. Come to the <strong>File Manager</strong> and click on the <strong>public_html</strong> folder again. You will see the space below.<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/uploaded_project_zip.png') }}" alt="Thumb">
                        </p>
                        <p>
                            9. Click <strong>Extract</strong>.<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/project_extract.png') }}" alt="Thumb">
                        </p>
                        <p>
                            10. Click on the <strong>Extract File</strong> button.<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/project_extract1.png') }}" alt="Thumb">
                        </p>
                        <p>
                            11. You can delete the <strong>maanlms.zip</strong> folder.<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/upload_project_zip_delete.png') }}" alt="Thumb">
                        </p>
                        <p>
                            12. Click <strong>public_html/maanlms</strong> folder. You will find the following files in it.<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/project_in.png') }}" alt="Thumb">
                        </p>

                        <p>
                            13. Don't worry if you can't see some files.<br>
                            14. If you can't see files like <strong>.env</strong>. Click the <strong>Settings</strong> button in the upper right..<br>
                            15. Click <strong>Show Hidden Files</strong> checkbox and <strong>save</strong>.

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/project_env_hidden.png') }}" alt="Thumb">
                        </p>
                        <p>
                            16. Select all and click move.<br>

                        </p>
                        <p>
                            <img src="{{ asset('public/documentation/assets/img/select_all.png') }}" alt="Thumb">
                        </p>
                        <p>
                            17. Update <strong>directory /public_html</strong> and click <strong>Move Files</strong> button<br>

                        </p>
                        <p>
                            <img src="{{ asset('public/documentation/assets/img/select_all_move.png') }}" alt="Thumb">
                        </p>
                        <p>
                            18. Come back <strong>directory /public_html</strong> and select <strong>maanlms</strong> folder<br>
                            19. Click <strong>delete</strong> tab.

                        </p>
                        <p>
                            <img src="{{ asset('public/documentation/assets/img/project_root_foolder_delete.png') }}" alt="Thumb">
                        </p>

                        <p>
                            20. To edit the <strong>.env</strong> file, proceed as follows.<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/env_edit_1.png') }}" alt="Thumb">
                        </p>
                        <p>
                            21. Edit the fields in the boxes and click <strong>Save Changes</strong> button.<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/env_edit_2.png') }}" alt="Thumb">
                        </p>
                        <p>
                            22. Open the homepage again in a new tab. Then click <strong>MultiPHP Manager</strong> .<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/multiphp.png') }}" alt="Thumb">
                        </p>
                        <p>
                            23. Please choose <strong>PHP Version</strong>.<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/php_version.png') }}" alt="Thumb">
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="frontend" class="de-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="item">
                        <div class="heading">
                            <h3>Frontend</h3>

                        </div>
                         <p>
                             <strong>Congratulations! Your application is ready</strong>.<br>

                         </p>
                         <p>
                            <img src="{{ asset('public/documentation/assets/img/frontend.png') }}" alt="Thumb">
                        </p>
                        <p>
                             Note: Open your browser and enter login url, example: <strong>https://yourdomain.com/login</strong><br>
                             <strong>Login informatin</strong><br>
                             <strong>Username:</strong> superadmin21@gmail.com <br>
                             <strong>Password:</strong> superadmin21<br>
                             <strong>Username:</strong> admin21@gmail.com <br>
                              <strong>Password:</strong> admin21<br>
                             <strong>Username:</strong> instructor21@gmail.com <br>
                             <strong>Password:</strong> instructor21<br>




                         </p>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="customization" class="default-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="item">
                        <div class="heading">
                            <h2>Dashboard</h2>
                        </div>

                        <strong>When you login to the admin panel, the following screen will meet you.</strong>
                        <p>
                            <img src="{{ asset('public/documentation/assets/img/dashboard.png') }}" alt="Thumb">
                        </p>



                    </div>
                </div>
            </div>
        </div>
    </section>







   <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('public/documentation/assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('public/documentation/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/documentation/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/documentation/assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('public/documentation/assets/js/bsnav.min.js') }}"></script>
    <script src="{{ asset('public/documentation/assets/js/main.js') }}"></script>

</body>
</html>

