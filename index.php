<?php

include('functions/userfunctions.php');
include('includes/header.php');
include('includes/slider.php');

?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Trending Products</h4>
                <hr>
                <!--<div class="underline mb-2"></div> -->
                    <div class="owl-carousel">
                        <?php
                            $trendingProducts = getAllTrending();
                            if(mysqli_num_rows($trendingProducts) > 0 )
                            {
                                foreach ($trendingProducts as $item) {
                                    ?>
                                        <div class="item">
                                            <a href="product-view.php?product=<?= $item['slug']; ?>">
                                                <div class="card shadow">
                                                    <div class="card-body">
                                                        <img src="uploads/<?= $item['image']; ?>" alt="Products Image" class = "w-100">
                                                        <h6 class="text-center"><?= $item['name']; ?></h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="py-5 bg-f2f2f2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>About Us</h4>
                <hr>
                <!--<div class="underline mb-2"></div> -->
                <p>
                    Welcome to Artistry Hub, the vibrant heart of creativity and art supplies where passion meets purpose. Born from a deep-seated love for the arts.  </p>
                <p>
                    Our journey began with a simple mission: to empower artists and enthusiasts alike with the tools they need to bring their visions to life.
                    
                </p>
                <p>
                    Beyond just a marketplace, we are creators at heart, offering a curated collection of our own handmade artworks alongside a comprehensive range of art supplies. Each piece and product is selected with care, ensuring that creativity knows no bounds.
                </p>
                <p>     
                    At Artistry Hub, we believe in the power of art to inspire, connect, and transform. Join us in our quest to make the world a more beautiful place, one artwork at a time.
                </p>

            </div>
        </div>
    </div>
</div>


<div class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="text-white">Artistry Hub</h4>
                <div class="underline mb-2"></div>
                <a href="index.php" class="text-white"> <i class="fa fa-angle-right"></i> Home </a> <br>
                <a href="#" class="text-white"> <i class="fa fa-angle-right"></i> About Us </a> <br>
                <a href="cart.php" class="text-white"> <i class="fa fa-angle-right"></i> My Cart </a> <br>
                <a href="categories.php" class="text-white"> <i class="fa fa-angle-right"></i> Our Collections </a>
            </div>
            <div class="col-md-3">
                <h4 class="text-white">Address</h4>
                <p class="text-white">
                    Polytechnic,
                    The Maharaja Sayajirao University,
                    Vadodara, India
                </p>
                <a href="tel:+918230584328" class="text-white"> <i class="fa fa-phone"></i> +91 8230584328</a> <br>
                <a href="mailto:poly@gmail.com" class="text-white"> <i class="fa fa-envelope"></i> poly@gmail.com </a>
            </div>
            <div class="col-md-6">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.792919067099!2d73.1755221109754!3d22.323670141962904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8cbb1849e4f%3A0x57fbad12488b0544!2sPolytechnic%2C%20The%20Maharaja%20Sayajirao%20University%20of%20Baroda!5e0!3m2!1sen!2sin!4v1708106362488!5m2!1sen!2sin" class="w-100" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="py-2 bg-danger">
    <div class="text-center">
        <p class="mb-0 text-white">All rights reserved. Copyright @ <a href="http://localhost/shweta_proj/phpecom/index.php" target="_blank" class="text-white"> Artistry Hub </a> - <?= date('Y') ?> </p>
    </div>
</div> 

<?php include('includes/footer.php'); ?>
<script>

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
});
</script>