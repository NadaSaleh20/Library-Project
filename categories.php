<?php include('header-user.php'); ?>
<!-- Categories section starts  -->

<section class="Categories" id="Categories">

    <br><br><br><br><br> <br>

    <div class="box-container">

        <?php
        //display all cat are active
       /* $sql = "SELECT * FROM tbl_category WHERE active='Yes'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                //image and title and id 
                $id = $row['id'];
                $title = $row['title'];
                $image_name = $row['image_name'];*/
        ?>       <div class="box">
                    <a href="#"><img src="./images/4.jpg" alt=""> </a>
                    <div class="content">
                    <a href="#">
                        <h3> Philosophy </h3>
                    </a>
                    </div>
                 </div>


                 <div class="box">
                        <a href="#"><img src="./images/6.jpg" alt=""> </a>
                        <div class="content">
                        <a href="#">
                            <h3> Literature </h3>
                        </a>
                        </div>
                </div>

                <div class="box">
                        <a href="#"><img src="./images/11.png" alt=""> </a>
                        <div class="content">
                        <a href="#">
                            <h3> Adventure </h3>
                        </a>
                        </div>
                </div>

                <div class="box">
                        <a href="#"><img src="./images/12.png" alt=""> </a>
                        <div class="content">
                        <a href="#">
                            <h3> Fantasy </h3>
                        </a>
                        </div>
                </div>

                <div class="box">
                        <a href="#"><img src="./images/13.png" alt=""> </a>
                        <div class="content">
                        <a href="#">
                            <h3> Historical Fiction </h3>
                        </a>
                        </div>
                </div>

                <div class="box">
                        <a href="#"><img src="./images/14.png" alt=""> </a>
                        <div class="content">
                        <a href="#">
                            <h3> Horror </h3>
                        </a>
                        </div>
                </div>
                <div class="box">
                        <a href="#"><img src="./images/15.png" alt=""> </a>
                        <div class="content">
                        <a href="#">
                            <h3> Romance  </h3>
                        </a>
                        </div>
                </div>
                <div class="box">
                        <a href="#"><img src="./images/16.png" alt=""> </a>
                        <div class="content">
                        <a href="#">
                            <h3> Short Stories </h3>
                        </a>
                        </div>
                </div>


                <div class="box">
                    <?php
                    //check image avaliable or not
                   /* if ($image_name == "") {
                        echo "<div class='error'>Image Not Avaliable </div>";
                    } else {*/
                    ?>
                        <!--<a href="<?php //echo 'category-food.php?category_id='.$id ?>"><img src="<?php //echo './images/' . $image_name ?>" alt=""></a>
                    -->
                       <a href="#">
                           <img src="./images/7.jpg" alt="">
                       </a>
                    <?php
                //    }

                    ?>

                    <div class="content">
                    <a href="#">
                            <h3> Novels </h3>
                        </a>
                    </div>
                </div>
        <?php
         /*   }
        } else {
            //not avaliable
            echo "<div class='error'> Category Not Found</div>";
        }*/
        ?>
    </div>
</section>

<!-- Categories section ends -->
<?php include('footer-user.php'); ?>