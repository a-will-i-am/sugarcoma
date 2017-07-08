<?php
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] && $_SESSION['perm'] == 'admin')) {
	header("Location: home.php");
}
?>
<!doctype html>
<html lang="en">
<head>
	<title> HomeTeamDreams: Get Your Game Up - Your #1 Site for Athletic Gear </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<?php include("header.html"); ?>

	<div class="main_wrapper">

    <div id="admin-header">

      <div id="left">
          <h2 style="text-align:center;">Manage Content</h2>
		  <ul id="adminNav">
			  		<li><a href="admin.php?insert_product">Insert New Product</a></li>
            <li><a href="admin.php?view_products">View All Products</a></li>
            <li><a href="admin.php?insert_cat">Insert New Category</a></li>
            <li><a href="admin.php?view_cats">View All Categories</a></li>
            <li><a href="admin.php?insert_brands">Insert New Brand</a></li>
            <li><a href="admin.php?view_brands">View All Brands</a></li>
            <li><a href="admin.php?view_users">View Customers</a></li>
		  </ul>

      </div>

      <div id="right">
      <?php
        if(isset($_GET['insert_product'])){

          include("insert_product.php");
        } else
        if(isset($_GET['view_products'])){

          include("view_products.php");

        } else
        if(isset($_GET['edit_pro'])){

          include("edit_pro.php");

        } else
        if(isset($_GET['insert_cat'])){

          include("insert_cat.php");

        } else
        if(isset($_GET['view_cats'])){

          include("view_cats.php");

        } else
        if(isset($_GET['edit_cat'])){

          include("edit_cat.php");

        }
				if(isset($_GET['insert_brands'])){

					include("insert_brands.php");

				}
				if(isset($_GET['view_brands'])){

					include("view_brands.php");

				}
				if(isset($_GET['edit_brand'])){

					include("edit_brand.php");

				}
				if(isset($_GET['view_customers'])){

					include("view_customers.php");

				}
				if(isset($_GET['view_users'])){

					include("view_users.php");

				}
				if(isset($_GET['edit_users'])){

					include("edit_users.php");

				}
       ?>
     </div>
    </div>

  </div>

	<div class="clearFloat"></div>

	<?php include("footer.html"); ?>
</body>
</html>
