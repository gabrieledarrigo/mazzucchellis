<?php
/*
  Template Name: Contatti
 */
get_header();
?>
<hr class="black-divider"/>

<section id="blog" class="container">
    <header class="sixteen columns clearfix">
        <h2 class="informazioni-icon">
            Informazioni
        </h2>
    </header>

    <section id="article-container" class="sixteen columns">
        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
                <article>
                    <header>
                        <h2 class="contatti-icon title">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                    </header>
                    <div class="data">
                        <h3><?php the_time('d-m-Y'); ?></h3>
                    </div>

                    <?php the_content(); ?>

                    <div class="social-button-large">
                        <ul>
                            <li>
                                <a class="icon-facebook" rel="nofollow" href="http://www.facebook.com/"
                                   onclick="popUp = window.open(
                                       'http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>',
                                       'Share on Facebook',
                                       'scrollbars=yes,width=800,height=600');
                                       popUp.focus();
                                       return false">
                                    <img src="<?php bloginfo('template_url'); ?>/img/facebook-share.png"
                                         title="Share on Facebook" alt="Share on Facebook"/>
                                </a>
                            </li>
                            <li>
                                <a class="icon-twitter" rel="nofollow" href="http://twitter.com/"
                                   onclick="popUp = window.open(
                                       'http://twitter.com/intent/tweet?text=\'<?php the_title(); ?>\' via @Mazzucchellis - <?php the_permalink(); ?>',
                                       'Share on Twitter',
                                       'scrollbars=yes,width=800,height=600');
                                       popUp.focus();
                                       return false">
                                    <img src="<?php bloginfo('template_url'); ?>/img/twitter-share.png"
                                         title="Share on Twitter" alt="Share on Twitter"/>
                                </a>
                            </li>
                            <li>
                                <a class="icon-google-plus" rel="nofollow" href="http://www.plus.google.com/"
                                   onclick="popUp = window.open(
                                       'https://plus.google.com/share?url=<?php the_permalink(); ?>',
                                       'Share on GooglePlus',
                                       'scrollbars=yes,width=800,height=600');
                                       popUp.focus();
                                       return false">

                                    <img src="<?php bloginfo('template_url'); ?>/img/google-plus-share.png"
                                         title="Share on Google Plus" alt="Share on Google Plus"/>
                                </a>
                            </li>
                            <li class="comment">
                                <a class="comment-link" href="<?php echo get_comments_link(); ?>" title="Commenta">
                                    Commenta
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>

        <article id="sezione-contatti">
            <header>
                <h2 class="contatti-icon">Contatti</h2>
            </header>
            <div id="map" class="sx">
                <h4>Dove trovarci</h4>
                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                        src="https://maps.google.it/maps?ie=UTF8&amp;q=mazzucchelli+samarate&amp;fb=1&amp;gl=it&amp;hq=mazzucchelli&amp;hnear=0x47868a1317f05891:0x9c08d0f21f66f86d,Samarate+VA&amp;cid=0,0,4439298443707447293&amp;ll=45.629,8.78697&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed">

                </iframe>
                <div>
                    <small>
                        <a href="https://maps.google.it/maps?ie=UTF8&amp;q=mazzucchelli+samarate&amp;fb=1&amp;gl=it&amp;hq=mazzucchelli&amp;hnear=0x47868a1317f05891:0x9c08d0f21f66f86d,Samarate+VA&amp;cid=0,0,4439298443707447293&amp;ll=45.629,8.78697&amp;spn=0.006295,0.006295&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:left">Visualizzazione ingrandita della mappa</a>
                    </small>
                </div>

                <h4>
                    <strong>Mazzucchelli’s di M. Gian Paolo & C S.a.s.</strong>
                </h4>

                <p>
                    <strong>Via Marconi 12, Samarate (VA)</strong>
                </p>
                <p>
                    <strong>Email 
                        <a href="mailto:info@mazzucchellis.com" title="Contattaci">info@mazzucchellis.com</a>
                    </strong>
                </p>
                <p>
                    <strong>Tel. <a href="tel: 0331 220344">0331 220344</a></strong>
                </p>
                <p>
                    <strong>Pt. IVA 01561320126</strong>
                </p>

            </div>
            <div id="form" class="sx">
                <form id="frmContatti" name="frmContatti" method="post">
                    <h4>Non esitare a inviarci un'email</h4>

                    <label for="inptNome">Nome</label>
                    <input type="text" name="inptNome" id="inptNome" placeholder="Inserisci il tuo nome" required="required"/><br/>

                    <label for="inptMail">Email</label>
                    <input type="email" name="inptMail" id="inptMail" placeholder="Inserisci il tuo indirizzo email" required="required"/><br/>

                    <label for="inptSoggetto">Soggetto</label>
                    <input type="text" name="inptSoggetto" id="inptSoggetto" placeholder="Inserisci il soggetto dell'email" required="required"/><br/>

                    <label for="txtMsg">Testo</label>
                    <textarea id="txtMsg" name="txtMsg" required="required"  placeholder="Inserisci il testo del messaggio"></textarea>

                    <input type="submit" id="sbmt1" name="sbmt1" value="Invia"/>
                </form>
            </div>

        </article>

        <?php comments_template(); ?>

        <br class="clear"/>

    </section>
</section>

<hr class="magenta-divider"/>

<?php get_template_part('brand-list'); ?>

<?php get_footer(); ?>
