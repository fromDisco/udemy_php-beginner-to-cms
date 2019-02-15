<?php
    include "includes/header.php";
    include "includes/navigation.php";
?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <?php
                    $query = "SELECT * FROM posts";
                    $posts = mysqli_query($connection, $query);
                    while ($post = mysqli_fetch_assoc($posts)) {
                ?>
                        <h2>
                            <a href="#"><?= $post['post_title'] ?></a>
                        </h2>
                        <p class="lead">
                            by <a href="index.php"><?= $post['post_author'] ?></a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span><?= $post['post_date'] ?></p>
                        <hr>
                        <img class="img-responsive" src="<?= $post['post_img'] ?>" alt="">
                        <hr>
                        <p><?= $post['post_text'] ?></p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <?php
                    }
                ?>
                <hr>


                <!-- Pager -->
                <!-- <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul> -->

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->


<?php
    include "includes/footer.php";
?>