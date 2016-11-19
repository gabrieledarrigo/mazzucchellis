<?php
/*
  Template Name: Pagina concorso
 */
wp_deregister_script( 'jquery');
wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.1.1.min.js',array(),'2.1.1',false);

wp_enqueue_style( 'materialicons', 'http://fonts.googleapis.com/icon?family=Material+Icons',false );
//wp_enqueue_style( 'materializecss', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css',false,'0.97.7' );
wp_enqueue_style(  'materializecss', 'http://mazzucchellis.com/wordpress/wp-content/themes/mazzucchellis/css/materialize.css',false,'0.97.7-custom' );
wp_enqueue_script( 'materializecss', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js',false,'0.97.7' );

//wp_enqueue_style( 'rating', 'http://mazzucchellis.com/wordpress/wp-content/themes/mazzucchellis/css/rating.css',false );
//wp_enqueue_script('rating', 'http://mazzucchellis.com/wordpress/wp-content/themes/mazzucchellis/js/rating.js'  ,false);
wp_enqueue_script('starrating', 'http://mazzucchellis.com/wordpress/wp-content/themes/mazzucchellis/js/jquery.star.rating.min.js'  ,false);

get_header('concorso');

wp_enqueue_style( 'page-concorso', 'http://mazzucchellis.com/wordpress/wp-content/themes/mazzucchellis/css/concorso.css',false );
/**
 * @return int 1 concorso attivo, 0 concorso scaduto, 1 concorso non ancora attivo
 */
function is_concorso_attivo()
{
    $d1=strtotime('2016-10-16 00:00:00');
    $d2=strtotime('2017-05-30 23:59:59');
    $now=time();

    if($now<$d1)return -1;
    if($now>$d2)return 0;
    return 1;
}
$stato_concorso=is_concorso_attivo();

$answers=array('Per halloween','Per capodanno','Per carnevale','Per feste di compleanno','Per feste a tema','Per matrimoni','Per addio al nubilato/celibato','Altro');
?>
<script>
    function checkSubmit(){
        if($('#ratingfield').val()=='')
        {
            $('#ratingfield').focus();
            alert('Devi darci un voto per poter partecipare!');
            return false;
        }

        return true;
    }
</script>
<hr class="black-divider"/>

<section id="blog" class="container">

    <?if(isset($_POST['action']) && $_POST['action']=='submit')
    {
        //echo '<pre>',json_encode($_POST['concorso'],JSON_PRETTY_PRINT),'</pre>';
        /*
         {
            "name": "Francesco",
            "phone": "+393407746269",
            "email": "plokko1@gmail.com",
            "birthyear": "1920",
            "referrer": "Google",
            "already_buyed": "on",
            "buyed_for": [
                "Per halloween",
                "Per capodanno",
                "Per carnevale",
                "Per feste di compleanno",
                "Per feste a tema",
                "Per matrimoni",
                "Per addio al nubilato\/celibato",
                "Altro"
            ],
            "already_rent": "on",
            "rent_for": [
                "Per halloween",
                "Per capodanno",
                "Per carnevale",
                "Per feste a tema",
                "Per matrimoni",
                "Altro"
            ],
        rating: 1-6
            "newsletter": "1"
            }

                */
        $ip=$_SERVER['REMOTE_ADDR'];

        $buyed=json_encode(isset($_POST['concorso']['already_buyed'])?
            (
                isset($_POST['concorso']['buyed_for'])?$_POST['concorso']['buyed_for']:[]
            ):false);
        $rent=json_encode(
            isset($_POST['concorso']['already_rent'])?
            (
                isset($_POST['concorso']['rent_for'])? $_POST['concorso']['rent_for']:[]
            ):false);
        $newsletter= isset($_POST['newsletter']);

        global $wpdb;
        $dt=Array(
            ////'id',//'submit_date',
            'submit_ip' => $ip,
            'name' => $_POST['concorso']['name'],
            'surname' => $_POST['concorso']['surname'],

            'phone' => $_POST['concorso']['phone'],
            'email' => $_POST['concorso']['email'],
            'birthyear' => $_POST['concorso']['birthyear'],

            'referrer' => $_POST['concorso']['referrer'],
            'already_buyed' => $buyed,
            'already_rent' => $rent,

            'newsletter' => $newsletter ? 1 : 0,
            'rating' => $_POST['concorso']['rating'],
        );
        //$wpdb->show_errors();echo '<pre>';var_dump($_POST,$dt);echo '</pre>';
        $r=false;
        try {
            $r = $wpdb->insert(
                '_concorso',
                $dt,
                array(
                    //'%d',//'%s',
                    '%s',
                    '%s',
                    '%s',

                    '%s',
                    '%s',
                    '%s',

                    '%s',
                    '%s',
                    '%s',

                    '%d',
                    '%d',
                )
            );
        }catch(Exception $e){}
        if($r)
        {
            /// SUCCESS ///
            ?><header class="sixteen columns clearfix">
                <h2 class="">Richiesta inviata correttamente</h2>
            </header>
                <section id="article-container" class="sixteen columns">
                    <article>
                        <p>La tua richiesta è stata correttamente registrata e sarà processata dai nostri sistemi alla scadenza del concorso.</p>
                        <p>Se sarai trai fortunati vincitori verrai ricontattato dal nostro staff ai recapiti da te inseriti!</p>
                        <hr/>


                    </article>
                </section>

            </section><?
            exit();
            ///////////////
        }else{
            ?><div><h2>ERRORE salvataggio richiesta:</h2>
                <p>A causa di un errore non è stato possibile inviare la tua richiesta, controlla la correttazza dei dati e riprova.</p>
            </div><?
        }

    }?>
<!--
    <header class="sixteen columns clearfix">
        <h2 class=""><?the_title();?></h2>
    </header>-->
<br>
    <section id="article-container" class="sixteen columns">

        <article>
            
            <header class="header-concorso">
                
                <h2><em>VINCI</em> UN FANTASTICO <em>WEEKEND*</em> <br>CON MAZZUCCHELLI'S</h2>
                <h3>Partecipa al concorso compilando i campi qui sotto</h3>
                <div class="descr">
                    A fine concorso verrà estratto il vincitore di un <br><em>COFANETTO SERIE PASSION TOP WEEKEND DELLA BOSCOLO GIFT:</em><br/>
                    soggiorno di 1 notte con colazione per 2 persone<br>
                    esperienza a tema da scegliere su oltre 60 proposte visionabili al sito:<br>
                    <a href="http://www.boscologift.com/cofanetto/vv999it25-top-weekend" target="_blank">www.boscologift.com/cofanetto/vv999it25-top-weekend</a>
                    <!--<seciton class="content">
                        <?the_content();?>
                    </seciton>-->
                </div>
                
            </header>
            


            <?

            if($stato_concorso==1){?>
            <!---form/--->
            <div class="row">
                <form class="col s12" method="post" onsubmit="return checkSubmit();">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="name" name="concorso[name]" type="text" class="validate" required minlength="2"/>
                            <label for="name">Nome</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="surname" name="concorso[surname]" type="text" class="validate" required minlength="2">
                            <label for="surname">Cognome</label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <input id="phone" name="concorso[phone]" type="tel" class="validate" required minlength="2"/>
                        <label for="phone">Numero di telefono</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="concorso[email]" type="email" class="validate">
                        <label for="email">E-mail</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">perm_contact_calendar</i>
                        <input id="birthyear" name="concorso[birthyear]" type="number" class="validate" min="1900" max="2016">
                        <label for="birthyear">Anno di nascita</label>
                    </div>


                        <label class="title">Come ci hai conosciuto?</label>

                        <div class="radioblock" >
                            <?foreach(array('Google','Facebook','Volantino','Cartellone pubblicitario','Manifestazioni','Conoscenti') AS $i=>$v){?>
                            <p>
                                <input class="with-gap" name="concorso[referrer]" type="radio" id="referrer<?=$i?>"  value="<?=$v?>"/>
                                <label for="referrer<?=$i?>"><?=$v?></label>
                            </p>
                            <?}?>

                        </div>
<br/>
                        <div class="switch s10">
                            <label class="s4 title">Hai già acquistato da noi?</label>
                            <label>
                                No
                                <input type="checkbox" name="concorso[already_buyed]" onchange="$('#block-buy').toggleClass('hidden');"/>
                                <span class="lever"></span>
                                Si
                            </label>
                        </div>
                    <div id="block-buy" class="hidden">

                        <label class="title2">per che occasioni?</label>
                    <div class="radioblock" >
                        <?foreach($answers AS $i=>$v){?>
                            <p>
                                <input class="with-gap" name="concorso[buyed_for][]" type="checkbox" id="buyed_for<?=$i?>"  value="<?=$v?>"/>
                                <label for="buyed_for<?=$i?>"><?=$v?></label>
                            </p>
                        <?}?>
                    </div>
                    </div>

                    <br/>


                        <div class="switch s10">
                            <label class="s4 title">Hai già noleggiato da noi?</label>
                            <label>
                                No
                                <input type="checkbox" name="concorso[already_rent]" onchange="$('#block-rent').toggleClass('hidden');"/>
                                <span class="lever"></span>
                                Si
                            </label>
                        </div>

                    <div id="block-rent" class="hidden">

                    <label class="title2">per che occasioni?</label>
                    <div class="radioblock">
                    <?foreach($answers AS $i=>$v){?>
                        <p>
                            <input class="with-gap" name="concorso[rent_for][]" type="checkbox" id="rent_for<?=$i?>"  value="<?=$v?>"/>
                            <label for="rent_for<?=$i?>"><?=$v?></label>
                        </p>
                    <?}?>
                    </div>
                    </div>

                    <label class="title important">Valuta il nostro negozio:</label>
                    <div id="star-rating"></div>
                    <script>
                        $('#star-rating').addRating({
                            fieldName : 'concorso[rating]',
                            fieldId : 'ratingfield'
                        });
                        $('#star-rating .material-icons').addClass('medium');
                        //$('#ratingfield')


                    </script>

                    <hr/>


                    <p>
                        <input class="with-gap" name="concorso[newsletter]" type="checkbox" id="newsletter"  value="1" />
                        <label for="newsletter">Confermo di voler essere contattato per promozioni e di aver <a href="http://mazzucchellis.com/privacy-newsletter-concorso" target="_blank">letto ed accettato le condizioni</a></label>
                    </p>
                    <p>Cliccando su <em style="font-weight: bold;">"Partecipa al concorso"</em> dichiari la veridicità delle informazioni inserite e di aver letto ed accettato le <a href="http://mazzucchellis.com/wordpress/regolamento_concorso.pdf" target="_blank">condizioni del regolamento</a></p>

                    <button class="btn waves-effect waves-light" type="submit" name="action" value="submit"><i class="material-icons right">send</i> Partecipa al concorso</button>


                </form>
            </div>
            <!---/form--->
            <?}elseif($stato_concorso==-1){
                ?><div><h3>Il concorso sarà attivo dal <b>16-10-2016</b> al <b>30-05-2017</b></h3></div><?
            }else{
                ?><div>Ci dispiace ma il concorso è ultimato il <b>30-05-2017</b>!</div><?
            }?>
        </article>

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
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
