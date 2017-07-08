<?php
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] && $_SESSION['perm'] == 'admin')) {
	header("Location: home.php");
}
?>
<?php include("header.html"); ?>

	<div class="main_wrapper">

    <div id="admin-header">

      <div id="right">
          <h2 style="text-align:center;">Manage Content</h2>
		  <ul id="adminNav">
			  <li><a href="admin_test.php?insert_product">Insert New Product</a></li>
            <li><a href="admin.php?view_products">View All Products</a></li>
            <li><a href="admin.php?insert_cat">Insert New Category</a></li>
            <li><a href="admin.php?view_cats">View All Categories</a></li>
            <li><a href="admin.php?insert_brands">Insert New Brand</a></li>
            <li><a href="admin.php?view_brands">View All Brands</a></li>
            <li><a href="admin.php?view_customers">View Customer Orders</a></li>
            <li><a href="admin.php?insert_orders">View Orders</a></li>
            <li><a href="admin.php?insert_payments">View Payments</a></li>
		  </ul>

      </div>

      <div id="left">
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
				if(isset($_GET['insert_brand'])){

          include("insert_brand.php");

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
       ?>
     </div>
    </div>

  </div>

	<div class="clearFloat"></div>

	<?php include("footer.html"); ?>
