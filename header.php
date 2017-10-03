<div id="header" class="header">
    <!-- MAIN HEADER -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 logo">
                    <a href="#"><img alt="Cavada market" src="assets/images/logo9.png" /></a>
                </div>
                <div class="tool-header">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 header-search">
                        <span class="toggle-icon"></span>
                        <form class="form-search toggle-mobile">
                            <div class="input-search">
                                <input type="text"  placeholder="Search everything">
                            </div>
							
                            <div class="form-category dropdown">
							<?php
								include ("db.php");
								$sql1 = $db->query("SELECT * FROM `productcategory`");
								echo'<select class="box-category">';
								while($row = mysqli_fetch_array($sql1)){
									$CatID = $row['catId'];
									echo'<optgroup label="'.$row['catNane'].'"><option>All Category</option>';
									$sql2 = $db->query("SELECT * FROM productsubcategory WHERE CatCode='$CatID'");
									while($row = mysqli_fetch_array($sql2))
									{
										$subCatId = $row['subCatId'];
										echo'<option>'.$row['subCatName'].'</option>';
										$sql3 = $db->query("SELECT * FROM products WHERE subCatCode='$subCatId'");
										while($row = mysqli_fetch_array($sql3)){
											echo'<li>'.$row['productName'].'</li>';
											}
										echo'</ul></li>';
									}
										echo'</optgroup>';
								}
								echo'</select>';

							?>
                            </div>
                            <button type="submit" class="btn-search"></button>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 right-main-header">
                        
                        <div class="action">
                            <a title="Login" class="compare fa fa-user" href="admin/login.php"></a>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <!-- END MANIN HEADER -->
    <div id="nav-top-menu" class="nav-top-menu option inherit-width">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-6 col-md-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                        <h4 class="title">
                            <span class="btn-open-mobile home-page"><i class="fa fa-bars"></i></span>
                            <span class="title-menu">Categories Menu</span>
                        </h4>
                        <div class="vertical-menu-content is-home">
                            <ul class="vertical-menu-list">
                               <?php
include ("db.php");
$sql1 = $db->query("SELECT * FROM `productcategory`");
while($row = mysqli_fetch_array($sql1))
{
	$CatID = $row['catId'];
	echo'<li>
<a class="parent" href=""><img class="icon-menu" alt="cavada" src="assets/images/icon/iconvetical_1.png">'.$row['catNane'].'</a>
	<div class="vertical-dropdown-menu smartphone">
        <div class="vertical-groups clearfix">
			';
	$sql2 = $db->query("SELECT * FROM productsubcategory WHERE CatCode='$CatID' LIMIT 2");
	while($row = mysqli_fetch_array($sql2)){
		$subCatId = $row['subCatId'];
		echo'<div class="mega-group width col-md-12">
				<h4 class="mega-group-header" href="javascript:void()" onclick ="subshow(subshowid= '.$row['subCatId'].')"><span>'.$row['subCatName'].'</span></h4>
				<ul class="group-link-default">
			';
		$sql3 = $db->query("SELECT * FROM products WHERE subCatCode='$subCatId' LIMIT 4");
		while($row = mysqli_fetch_array($sql3)){
			echo'
	<li><a href="#">'.$row['productName'].'</a></li>
	
';
			}
echo'<li><a href="#">more...</a></li>
	</ul>
</div>';
	}
echo'</div>
	<div class="mega-custom-html col-sm-12">
		<a href="#"><img class="img-responsive" src="assets/data/market/menu-img/bn-smarphone.jpg" alt="Banner"></a>
	</div>
</div>
</li>';
}
?>             
                            </ul>
							<div class="all-category"><span><img class="icon-menu" alt="Cavada" src="assets/images/icon/iconvetical_10.png">All Categories</span><span style="display:none"><i class="fa fa-minus"></i>Close</span></div>
                        </div>
                    </div>
                </div>
                <a href="javascript:void()" class="menu-toggle col-md-6 col-sm-6 col-xs-6"><i class="fa fa-bars"></i>menu</a>
                <div id="main-menu" class="col-sm-9 col-md-9 main-menu menu-index9 inherit-custom-width navigation">
                    
                    <nav class="navbar navbar-default">
                        <div id="navbar" class="navbar-collapse collapse">
                            <a href="javascript:void()" class="menu-toggle-close"><i class="fa fa-times"></i></a>
                            <ul class="nav navbar-nav level0">
                                <li class="active dropdown home">
                                    <a class="dropdown-toggle" href="#">Home</a>
                                    <ul class="dropdown-menu level1">
                                        <li class="link_container"><a href="#">About</a></li>
                                        <li class="link_container"><a href="#">SiteMap</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>