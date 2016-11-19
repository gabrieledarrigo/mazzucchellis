<aside id="sidebar" class="six columns offset-by-one">
    <section id="sidebar-content">
        <article>
            <h3>
                Iscriviti alla newsletter
            </h3>
            <div class="textwidget">
                <!-- Begin MailChimp Signup Form -->
                <div id="mc_embed_signup">
                    <form action="http://mazzucchellis.us6.list-manage.com/subscribe/post?u=430ca9ecc6c4c11d1782424e9&amp;id=f5f806a375" 
                          method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div class="mc-field-group">
                            <label for="mce-EMAIL">Indirizzo email 
                                <span class="asterisk">*</span>
                            </label>
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="mail-chimp-button">
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>	
                    </form>
                </div>
                <!--End mc_embed_signup-->
            </div>
        </article>
        <?php
        if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-articoli')) :

        endif;
        ?>
    </section>
</aside>