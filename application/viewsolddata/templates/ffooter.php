<style>
    /*@media (max-width: 468px) {
        .responsive-serving-location {
            top: 30%
        }
    }*/
</style>



 <footer id="footer" class="footer-v3 align-left">
            <div class="container container-ver2">
                <div class="footer-inner">
                    <div class="row footer-row">
                        <div class="col-md-4 col-sm-6">
                            <h3 class="title-footer">Store Information</h3>
                            <ul class="list-footer list-store-info">
                                <li><a ><i
                                            class="fa fa-map-marker"></i>Mogullur,Gudlur[M],Prakasam[Dt],</a></li>
                                <li><a href="#">Andhra
                                        Pradesh,India - 523115</a></li>
                                <!--<li><a ><i class="fa fa-phone"></i> +91 9848421988</a></li>-->
                                <li><a ><i class="fa fa-whatsapp"></i> +91 9113946041</a></li>
                                <li><a ><i class="fa fa-envelope"></i>
                                        mail2yellowmango@gmail.com</a>
                                </li>
                            </ul>
                            <ul class="social-icons-list">
                                <li class="face-1"><a href="https://www.facebook.com/yellowmango.in" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <!-- <li class="twit-1"><a href=""><i class="fa fa-twitter"></i></a></li> -->
                                <li class="you-1"><a href="https://www.youtube.com/watch?v=-lbIIQUOHH4&t=9s" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                <li class="inst-1"><a href="https://www.instagram.com/yellowmango.in/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <h3 class="title-footer info-content">Infomation</h3>
                            <ul class="list-footer">
                                <li><a >My Account</a></li>
                                <li><a >Terms & Conditions of use</a></li>
                                <li><a >Terms & Conditions of use</a></li>
                                <li><a href="<?=base_url()?>home/about">About Us</a></li>
                                 <li><a href="<?=base_url()?>home/privicypolicy">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <h3 class="title-footer">Location</h3>
                            <div class="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15410.273338976895!2d79.8951289785003!3d15.071973801681962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4b6e1454871c29%3A0xcc0b313fefebed78!2sGudluru%2C%20Andhra%20Pradesh%20523281!5e0!3m2!1sen!2sin!4v1618489048163!5m2!1sen!2sin"
                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom box">
                <div class="container container-ver2">
                    <div class="box bottom">
                        <p class="text-center">Copyright &copy;2021 Yello Mango - All Rights Reserved. <br>
                            Developed By <a href="https://macsof.com/" target="_blank" style="color: #ed7f34; font-weight: bold;">Macsof Technologies</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="responsive-serving-location" data-toggle="modal" data-target="#myModal">
        <i class="fa fa-map-marker"></i>
    </div>
    <!-- End wrappage -->
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">We are serving Here</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered custom-table">
                        <thead>
                            <tr>
                                <th>Area</th>
                                <th>Pincode</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($areas->num_rows() > 0) {
                                foreach ($areas->result() as $key => $ar) { ?>
                            <tr>
                                <td><?php echo $ar->area;?> </td>
                                <td><?php echo $ar->pincode;?></td>
                            </tr>
                        <?php }

                    } ?>
                            <!-- <tr>
                                <td>Ameerpet </td>
                                <td>500018</td>
                            </tr>
                            <tr>
                                <td>Ameerpet </td>
                                <td>500018</td>
                            </tr>
                            <tr>
                                <td>Ameerpet </td>
                                <td>500018</td>
                            </tr>
                            <tr>
                                <td>Ameerpet </td>
                                <td>500018</td>
                            </tr>
                            <tr>
                                <td>Ameerpet </td>
                                <td>500018</td>
                            </tr>
                            <tr>
                                <td>Ameerpet </td>
                                <td>500018</td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript" src="<?=base_url();?>assets2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets2/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets2/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets2/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets2/js/engo-plugins.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets2/js/slick.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets2/js/store.js"></script>
    <script>
        $(document).ready(function () {
            $('.minus').click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });

            // Carousel
            $(".owl-one").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 10,
                responsiveClass: true,
                dots: true,
                nav: true,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],

                responsive: {
                    0: {
                        touchDrag: true,
                        mouseDrag: false,
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false,
                        loop: true
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: true
                    },
                    1200: {
                        items: 4,
                        nav: true,
                        loop: true
                    }
                }
            });
            $(".owl-two").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 10,
                responsiveClass: true,
                dots: true,
                nav: true,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],

                responsive: {
                    0: {
                        touchDrag: true,
                        mouseDrag: false,
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 2,
                        nav: true,
                        loop: true
                    }
                }
            });

            $(".owl-three").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 10,
                responsiveClass: true,
                dots: true,
                nav: true,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],

                responsive: {
                    0: {
                        touchDrag: true,
                        mouseDrag: false,
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 2,
                        nav: true,
                        loop: true
                    }
                }
            });

        });
        let mobileIcon = document.querySelector(".mobile-icon");
        let megaMenuActive = document.querySelector(".mega-menu");
        let closeMenu = document.querySelector(".close")
        mobileIcon.addEventListener("click", function () {
            mobileIcon.classList.toggle("activeMobileMenu")
            megaMenuActive.classList.toggle("mega-menu-active")
        })
        closeMenu.addEventListener("click", function() {
            closeMenu.classList.toggle("activeMobileMenu")
            megaMenuActive.classList.toggle("mega-menu-active")
            console.log("test");
        })
    </script>

</body>

</html>