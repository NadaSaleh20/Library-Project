<?php include('header-user.php'); ?>

<!-- menu section starts  -->

<div class="menu" id="menu">

    <h1 class="heading" style="margin-top: 5%">

        <span>B</span>
        <span>O</span>
        <span>O</span>
        <span>K</span>
    </h1>
    <div class="menu_box-container1">
    <?php


    //display all cat are active
    /*$sql = "SELECT * FROM tbl_food WHERE active='Yes'";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $id = $row['id'];
            $title = $row['title'];
            $image_name = $row['image_name'];
            $price = $row['price'];
            $description = $row['description'];*/
            ?>
            <div class="box">
                    <img src="./images/book7.png">
                    <div class="menu-content">
                        <h3> Title</h3>
                        <h5>Author:  Neque porro</h5>
                        <p>description: Neque porro quisquam est qui dolorem ipsum </p>
                        <button class="btn">Explore the book</button>
                    </div>
            </div>
            <div class="box">
                    <img src="./images/book-8.png">
                    <div class="menu-content">
                        <h3> Title</h3>
                        <h5>Author:  Neque porro</h5>
                        <p>description: Neque porro quisquam est qui dolorem ipsum </p>
                        <button class="btn">Explore the book</button>
                    </div>
            </div>
            <div class="box">
                    <img src="./images/book-7.png">
                    <div class="menu-content">
                        <h3> Title</h3>
                        <h5>Author:  Neque porro</h5>
                        <p>description: Neque porro quisquam est qui dolorem ipsum </p>
                        <button class="btn">Explore the book</button>
                    </div>
            </div>
            <div class="box">
                    <img src="./images/book-9.png">
                    <div class="menu-content">
                        <h3> Title</h3>
                        <h5>Author:  Neque porro</h5>
                        <p>description: Neque porro quisquam est qui dolorem ipsum </p>
                        <button class="btn">Explore the book</button>
                    </div>
            </div>
            <div class="box">
                    <img src="./images/book-10.png">
                    <div class="menu-content">
                        <h3> Title</h3>
                        <h5>Author:  Neque porro</h5>
                        <p>description: Neque porro quisquam est qui dolorem ipsum </p>
                        <button class="btn">Explore the book</button>
                    </div>
            </div>
            <div class="box">
                    <img src="./images/book-2.png">
                    <div class="menu-content">
                        <h3> Title</h3>
                        <h5>Author:  Neque porro</h5>
                        <p>description: Neque porro quisquam est qui dolorem ipsum </p>
                        <button class="btn">Explore the book</button>
                    </div>
            </div>
            <div class="box">
                    <img src="./images/book3.png">
                    <div class="menu-content">
                        <h3> Title</h3>
                        <h5>Author:  Neque porro</h5>
                        <p>description: Neque porro quisquam est qui dolorem ipsum </p>
                        <button class="btn">Explore the book</button>
                    </div>
            </div>
            <div class="box">
                    <img src="./images/book-3.png">
                    <div class="menu-content">
                        <h3> Title</h3>
                        <h5>Author:  Neque porro</h5>
                        <p>description: Neque porro quisquam est qui dolorem ipsum </p>
                        <button class="btn">Explore the book</button>
                    </div>
            </div>

            <div class="box">
                    <img src="./images/book5.png">
                    <div class="menu-content">
                        <h3> Title</h3>
                        <h5>Author:  Neque porro</h5>
                        <p>description: Neque porro quisquam est qui dolorem ipsum </p>
                        <button class="btn">Explore the book</button>
                    </div>
            </div>
            <div class="box">
                    <img src="./images/book-5.png">
                    <div class="menu-content">
                        <h3> Title</h3>
                        <h5>Author:  Neque porro</h5>
                        <p>description: Neque porro quisquam est qui dolorem ipsum </p>
                        <button class="btn">Explore the book</button>
                    </div>
            </div>
            <div class="box">
                    <img src="./images/book-6.png">
                    <div class="menu-content">
                        <h3> Title</h3>
                        <h5>Author:  Neque porro</h5>
                        <p>description: Neque porro quisquam est qui dolorem ipsum </p>
                        <button class="btn">Explore the book</button>
                    </div>
            </div>
            <div class="box">
                    <?php 

                    //check image avaliable or not
                   /* if ($image_name == "") {
                        echo "<div class='error'>Image Not Avaliable </div>";
                    } else {*/
                    ?>
                      <img src="./images/15.png"> 

                    <?php
                    //}
                    ?>                   
                    <div class="menu-content">
                        <h3> Title</h3>
                        <h5>Author:  Neque porro</h5>
                        <p>description: Neque porro quisquam est qui dolorem ipsum </p>
                        <?php
                       /* if (!isset($_SESSION['user-login'])) {
                            //user not login
                            //redirect login page with masseage
                            $_SESSION['no-login-message'] = "<div class='error'>Please Login To can order</div>";*/
                        ?>
                           <button class="btn">Explore the book</button>
                            
                        <?php

                     //   } else {
                        ?>
                           
                        <?php
                     //   }
                        ?>
                    </div>
                </div>
            <?php
    //    }
   // }
   // else
   // {
      //not avaliable
   //   echo "<div class='error'> Food Not Found</div>";
   // }

    ?>

</div>
</div>

<!-- menu section ends -->
<?php include('footer-user.php'); ?>