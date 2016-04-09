<?php
/*
  Template Name: Newsletter
 */
get_header('internal');
?>
<hr class="black-divider"/>

<section id="blog" class="container">
    <header class="sixteen columns clearfix">
        <h2 class="newsletter-icon">
            Rimani sempre aggiornato!
        </h2>
    </header>

    <section id="article-container" class="sixteen columns">
        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
                <article>
                    <header>
                        <h2 class="newsletter-icon title">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                    </header>
                    <div class="data">
                        <h3><?php the_time('d-m-Y'); ?></h3>
                    </div>

                    <?php the_content(); ?>

                    <div class="wrapper rounded6" id="templateContainer">
                        <h1>Iscriviti alla nostra newsletter!</h1>
                        <div id="templateBody" class="bodyContent rounded6">
                            <div id="subscribeFormWelcome">
                                Campo obbligatorio
                            </div>
                            <div class="indicates-required"><span class="asterisk">*</span> indica richiesto</div>
                            <form action="http://mazzucchellis.us6.list-manage2.com/subscribe/post" method="POST">
                                <input type="hidden" name="u" value="430ca9ecc6c4c11d1782424e9">
                                <input type="hidden" name="id" value="f5f806a375">
                                <div id="mergeTable" class="mergeTable">
                                    <div class="mergeRow dojoDndItem mergeRow-email" id="mergeRow-0">
                                        <label for="MERGE0"><strong>Indirizzo email</strong> <span class="asterisk">*</span></label>
                                        <div class="field-group">
                                            <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="mergeRow">
                                    <label>Formato preferito</label>
                                    <div class="field-group groups">
                                        <ul class="interestgroup_field">
                                            <li><input type="radio" name="EMAILTYPE" id="EMAILTYPE_HTML" value="html" checked><label for="EMAILTYPE_HTML">HTML</label></li>
                                            <li><input type="radio" name="EMAILTYPE" id="EMAILTYPE_TEXT" value="text" ><label for="EMAILTYPE_TEXT">Testo</label></li>
                                        </ul>
                                    </div>
                                </div>
                                <br>
                                <div class="submit_container">
                                    <input type="submit" class="button" name="submit" value="Iscrizione alla lista">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="poweredWrapper">
                        <span class="poweredBy"><a href="http://www.mailchimp.com/monkey-rewards/?utm_source=freemium_newsletter&utm_medium=email&utm_campaign=monkey_rewards&aid=430ca9ecc6c4c11d1782424e9&afl=1"><img src="http://cdn-images.mailchimp.com/monkey_rewards/MC_MonkeyReward_18.png" border="0" alt="Email Marketing Powered by MailChimp" title="MailChimp Email Marketing" width="139" height="54"></a></span>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>


        <br class="clear"/>

    </section>
</section>

<hr class="magenta-divider"/>

<?php get_template_part('brand-list'); ?>

<?php get_footer(); ?>


<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
    try {
        var _gaq = _gaq || [];
        _gaq.push(["_setAccount", "UA-329148-88"]);
        _gaq.push(["_setDomainName", ".list-manage.com"]);
        _gaq.push(["_trackPageview"]);
        _gaq.push(["_setAllowLinker", true]);
    } catch (err) {
        console.log(err);
    }
</script>

