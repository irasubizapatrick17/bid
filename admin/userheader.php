
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>Cyamunara</title>


    <!-- uikit -->
    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="assets/icons/flags/flags.min.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="assets/css/main.min.css" media="all">

    <!-- themes -->
    <link rel="stylesheet" href="assets/css/themes/themes_combined.min.css" media="all">


</head>
<body class=" sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
    
<header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
               
                    
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="assets/img/avatars/avatar_11_tn.png" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="page_user_profile.html">My profile</a></li>
                                    <li><a href="../logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        
    </header><!-- main header end -->
     <aside id="sidebar_main">
        
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="index.html" class="sSidebar_hide sidebar_logo_large">
                    <img class="logo_regular" src="assets/img/logo_main.png" alt="" height="15" width="71"/>
                    <img class="logo_light" src="assets/img/logo_main_white.png" alt="" height="15" width="71"/>
                </a>
                <a href="index.html" class="sSidebar_show sidebar_logo_small">
                    <img class="logo_regular" src="assets/img/logo_main_small.png" alt="" height="32" width="32"/>
                    <img class="logo_light" src="assets/img/logo_main_small_light.png" alt="" height="32" width="32"/>
                </a>
            </div>
        </div>
        
        <div class="menu_section">
            <ul>
                <li title="Dashboard">
                    <a href="../index.php">
                        <span class="menu_icon"><i class="material-icons">home</i></span>
                        <span class="menu_title">HOME</span>
                    </a>
                </li>
                <li title="Dashboard">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">comment</i></span>
                        <span class="menu_title">Messeges <?php 
			$sqlmesseges = $db->query("SELECT c.postcode, c.commentBy, p.postedBy
FROM postscomments c
INNER JOIN posts p
ON c.postcode = p.postId
AND p.postedBy Like '%$username%'");
			//$num_of_messeges = mysqli_num_rows($sqlmesseges);
//echo $num_of_messeges;?></span>
                    </a>
                </li>
				<li title="Dashboard">
                    <?php 
								$sqlseller1 = $db->query("SELECT * FROM company1 WHERE cumpanyUserCode = '$thisid'");
								$countComanies1 = mysqli_num_rows($sqlseller1);
								if($countComanies1>0)
									{
										while($row = mysqli_fetch_array($sqlseller1)) 
											{
                                                $companyid = $row['companyId'];
												$companyName = $row['companyName'];
                                                echo '<a href="items.php?companyid='.$companyid.'">
                                                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                                                        <span class="menu_title">'.$row['companyName'].'</span>';
											}
									}
								?>
                    </a>
                </li>
            </ul>
        </div>
    </aside><!-- main sidebar end -->

	