<?php
/**
 *Template Name: Landing Page
 *
 * Template by : Agus Andri Putra
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty Twenty-One
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<div id="Landingpage" class="homepage">
    <section id="Overview" class="one">
        <div class="container">
            <?php if( have_rows('section_1') ):
                while( have_rows('section_1') ): the_row();
                    $title = get_sub_field('title');
                    $sub_title = get_sub_field('sub_title');
                    $image_banner = get_sub_field('image_banner');
                    ?>
                    <div class="head-title">
                        <h3><?php echo $title ?></h3>
                        <h5><?php echo $sub_title ?></h5>
                    </div>
                    <div class="logo-rgb">
                        <img src="http://localhost/skincare-rgb/wp-content/uploads/2021/02/logo-trans.png" alt="">
                    </div>
                    <div class="head-image">
                        <img src="<?php echo esc_html( $image_banner ); ?>" alt="banner" class="img-banner">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <section id="About" class="two">
        <div class="container">
            <?php if( have_rows('section_2') ):
                while( have_rows('section_2') ): the_row();
                    $title_1 = get_sub_field('title_1');
                    $title_2 = get_sub_field('title_2');
                    $title_3 = get_sub_field('title_3');
                    $description = get_sub_field('description');
                    $image_left = get_sub_field('image_left');
                    $image_right = get_sub_field('image_right');
                    ?>
                    <div class="present">
                        <h3><?php echo $title_1 ?></h3>
                        <h3 class="font-uniq"><?php echo $title_2 ?></h3>
                        <h3><?php echo $title_3 ?></h3>
                    </div>
                    <div class="description">
                        <p><?php echo $description ?></p>
                    </div>
                    <div class="foto-catalouge">
                        <div class="image-cat">
                            <img src="<?php echo esc_html( $image_left ); ?>" alt="image" class="img-responsive">
                        </div>
                        <div class="image-cat">
                            <img src="<?php echo esc_html( $image_right ); ?>" alt="image" class="img-responsive">
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="divider uniq"></div>
        </div>
    </section>
    <section id="About" class="three">
        <div class="container">
            <?php if( have_rows('section_3') ):
                while( have_rows('section_3') ): the_row();
                    $title_1 = get_sub_field('title_1');
                    $title_description = get_sub_field('title_description');
                    $left_top_featured = get_sub_field('left_top_featured');
                    $right_top_featured = get_sub_field('right_top_featured');
                    $image_left = get_sub_field('image_left');
                    $image_right = get_sub_field('image_right');
                    ?>
                    <div class="why">
                        <h3><?php echo $title_1 ?></h3>
                        <p><?php echo $title_description ?></p>
                    </div>
                    <div class="featured">
                        <?php if( have_rows('left_top_featured') ):
                            while( have_rows('left_top_featured') ): the_row(); 
                                $image = get_sub_field('image');
								$title = get_sub_field('title');
								$description = get_sub_field('description');
                            ?>
                            <div class="item">  
                                <div class="description">
                                    <div class="icon">
                                        <img src="<?php echo esc_html( $image ); ?>" alt="BPOM"  class="img-responsive">
                                    </div>
                                    <h4><?php echo $title ?></h4>
                                    <p><?php echo $description ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if( have_rows('right_top_featured') ):
                            while( have_rows('right_top_featured') ): the_row(); 
                                $image = get_sub_field('image');
								$title = get_sub_field('title');
								$description = get_sub_field('description');
                            ?>
                            <div class="item">  
                                <div class="description">
                                    <div class="icon">
                                        <img src="<?php echo esc_html( $image ); ?>" alt="BPOM"  class="img-responsive">
                                    </div>
                                    <h4><?php echo $title ?></h4>
                                    <p><?php echo $description ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="featured">
                        <?php if( have_rows('left_bottom_featured') ):
                            while( have_rows('left_bottom_featured') ): the_row(); 
                                $image = get_sub_field('image');
								$title = get_sub_field('title');
								$description = get_sub_field('description');
                            ?>
                            <div class="item">  
                                <div class="description">
                                    <div class="icon">
                                        <img src="<?php echo esc_html( $image ); ?>" alt="BPOM"  class="img-responsive">
                                    </div>
                                    <h4><?php echo $title ?></h4>
                                    <p><?php echo $description ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if( have_rows('right_bottom_featured') ):
                            while( have_rows('right_bottom_featured') ): the_row(); 
                                $image = get_sub_field('image');
								$title = get_sub_field('title');
								$description = get_sub_field('description');
                            ?>
                            <div class="item">  
                                <div class="description">
                                    <div class="icon">
                                        <img src="<?php echo esc_html( $image ); ?>" alt="BPOM"  class="img-responsive">
                                    </div>
                                    <h4><?php echo $title ?></h4>
                                    <p><?php echo $description ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <section id="About" class="four">
        <div class="container">
            <?php if( have_rows('section_4') ):
                while( have_rows('section_4') ): the_row(); 
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    $description_special = get_sub_field('description_special');
                    $table_price_left = get_sub_field('table_price_left');
                    $table_price_right = get_sub_field('table_price_right');
                ?>
                    <div class="where">
                        <h3><?php echo $title ?></h3>
                        <p><?php echo $description ?></p>
                        <h3 class="index"><?php echo $description_special ?></h3>
                    </div>
                    <div class="divider"></div>
                    <div class="price-table" id="Order">
                        <?php if( have_rows('table_price_left') ):
                            while( have_rows('table_price_left') ): the_row(); 
                                $image = get_sub_field('image');
                                $title = get_sub_field('title');
                                $price = get_sub_field('price');
                                $list_benefit_1 = get_sub_field('list_benefit_1');
                                $list_benefit_2 = get_sub_field('list_benefit_2');
                                $list_benefit_3 = get_sub_field('list_benefit_3');
                                $list_benefit_4 = get_sub_field('list_benefit_4');
                                $list_benefit_5 = get_sub_field('list_benefit_5');
                                $text_order = get_sub_field('text_order');
                            ?>
                                <div class="price-table-item">
                                    <div class="image">
                                        <img src="<?php echo esc_html( $image ); ?>" alt="Product Package" class="img-responsive">
                                    </div>
                                    <div class="desc-package">
                                        <h4><?php echo $title ?></h4>
                                        <span class="price"><?php echo $price ?></span>
                                        <ul>
                                            <li><?php echo $list_benefit_1 ?></li>
                                            <li><?php echo $list_benefit_2 ?></li>
                                            <li><?php echo $list_benefit_3 ?></li>
                                            <li><?php echo $list_benefit_4 ?></li>
                                            <li><?php echo $list_benefit_5 ?></li>
                                        </ul>
                                    </div>
                                    <a href="https://api.whatsapp.com/send?phone=+6285795580512&text=<?php echo $text_order ?>" class="button btn-order">
                                        <img src="http://localhost/skincare-rgb/wp-content/uploads/2021/02/pesan-sekarang.gif" alt="">
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if( have_rows('table_price_right') ):
                            while( have_rows('table_price_right') ): the_row(); 
                                $image = get_sub_field('image');
                                $title = get_sub_field('title');
                                $price = get_sub_field('price');
                                $list_benefit_1 = get_sub_field('list_benefit_1');
                                $list_benefit_2 = get_sub_field('list_benefit_2');
                                $list_benefit_3 = get_sub_field('list_benefit_3');
                                $list_benefit_4 = get_sub_field('list_benefit_4');
                                $list_benefit_5 = get_sub_field('list_benefit_5');
                                $text_order = get_sub_field('text_order');
                            ?>
                                <div class="price-table-item">
                                    <div class="image">
                                        <img src="<?php echo esc_html( $image ); ?>" alt="Product Package" class="img-responsive">
                                    </div>
                                    <div class="desc-package">
                                        <h4><?php echo $title ?></h4>
                                        <span class="price"><?php echo $price ?></span>
                                        <ul>
                                            <li><?php echo $list_benefit_1 ?></li>
                                            <li><?php echo $list_benefit_2 ?></li>
                                            <li><?php echo $list_benefit_3 ?></li>
                                            <li><?php echo $list_benefit_4 ?></li>
                                            <li><?php echo $list_benefit_5 ?></li>
                                        </ul>
                                    </div>
                                    <a href="https://api.whatsapp.com/send?phone=+6285795580512&text=<?php echo $text_order ?>" class="button btn-order">
                                        <img src="http://localhost/skincare-rgb/wp-content/uploads/2021/02/pesan-sekarang.gif" alt="">
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section id="Gallery" class="five">
        <div class="container">
            <?php if( have_rows('gallery_product') ):
                while( have_rows('gallery_product') ): the_row(); 
                $title = get_sub_field('title');
                ?>
                    <h3><?php echo $title ?></h3>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="divider"></div>
            <div class="box-gallery">
                <?php echo do_shortcode( '[foogallery id="26"]' ); ?>
            </div>
            <a href="#Order" class="button btn-order other">
                <img src="http://localhost/skincare-rgb/wp-content/uploads/2021/02/pesan-sekarang.gif" alt="">
            </a>
        </div>
    </section>
    <section id="Affiliate" class="six">
        <div class="container">
            <?php if( have_rows('reseller_section') ):
                while( have_rows('reseller_section') ): the_row(); 
                    $title_1 = get_sub_field('title_1');
                    $description_1 = get_sub_field('description_1');
                    $title_2 = get_sub_field('title_2');
                    $title_3 = get_sub_field('title_3');
                    $image_affiliation = get_sub_field('image_affiliation');
                    $button_order_text = get_sub_field('button_order_text');
                ?>
                    <div class="affiliasi-content">
                        <h3><?php echo $title_1 ?></h3>
                        <p><?php echo $description_1 ?></p>
                        <h3 class="middle"><?php echo $title_2 ?></h3>
                        <h4><?php echo $title_3 ?></h4>
                    </div>
                    <div class="affiliasi-image">
                        <img src="<?php echo esc_html( $image_affiliation ); ?>" alt="Money" class="img-responsive">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <a href="https://api.whatsapp.com/send?phone=+6285795580512&text=<?php echo $button_order_text ?>" class="button btn-order other reseler">Saya Mau jadi Reseller</a>
        </div>
    </section>
    <section id="Testimony" class="seven">
        <div class="container">
            <?php if( have_rows('testimoni_section') ):
                while( have_rows('testimoni_section') ): the_row(); 
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                ?>
                    <div class="title">
                        <h3><?php echo $title ?></h3>
                        <p><?php echo $description ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="divider"></div>
            <div class="box-testimoni">
                <?php echo do_shortcode( '[foogallery id="47"]' ); ?>
            </div>
            <a href="#Order" class="button btn-order other">
                <img src="http://localhost/skincare-rgb/wp-content/uploads/2021/02/pesan-sekarang.gif" alt="">
            </a>
        </div>
    </section>
    <section id="Media" class="eight">
        <div class="container">
            <div class="title">
                <h4>Ikuti kami untuk selalu update</h4>
            </div>
            <div class="social-other">
                <a href="https://www.instagram.com/invites/contact/?i=1ig0nrisduvvl&utm_content=hm0gur2">
                    <img src="http://localhost/skincare-rgb/wp-content/uploads/2021/02/instagram.png" alt="">
                </a>
                <a href="https://vt.tiktok.com/ZSJdrpXU6/">
                    <img src="http://localhost/skincare-rgb/wp-content/uploads/2021/02/toktok.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <section id="Footer" class="footer">
        <div class="container">
            <p>Copyright © 2021 RGB Skincare. develop by.<a href="https://andriputra.com" target="__blank">Andriputra</a></p>
        </div>
    </section>
</div>

<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>

<?php get_footer(); ?>
