<?php
/*
  Template Name: Backend concorso
 */


wp_enqueue_style(  'datatables', 'https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css',false );
wp_enqueue_script( 'datatables', '//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js',false);

if(!current_user_can('edit_page'))
{

    exit('NON SEI ADMIN!');
}

get_header();

function getResultsConcorso()
{

    global $wpdb;
    $results = $wpdb->get_results( "SELECT * FROM _concorso", ARRAY_A );
    return $results;
}
$list=getResultsConcorso();
//echo json_encode($list,JSON_PRETTY_PRINT);

$header=[
    "id"=> "ID",
    "submit_date"=> 'Data invio',
    "submit_ip"=> "IP",
    "name"=> "Nome",
    "surname"=> "Cognome",
    "phone"=> "Telefono",
    "email"=> "Email",
    "birthyear"=> "Anno di nascita",
    "referrer"=> "Referente",
    "already_buyed"=> "Acquistati",
    "already_rent"=> "Noleggiati",
    "newsletter"=> "Newsletter",
    "rating"=> "Voto",
];

?><div class="container-fluid">
    <h1>Controllo concorso:</h1>
    <h2><?=count($list);?> risultati presenti</h2>
    <table class="table table-hover table-striped" id="tb">
        <thead>
        <tr>
            <?foreach($header AS $k=>$v){
                ?><th><?=$v?></th><?
            }?>
        </tr>
        </thead>
        <tbody>
        <?
        foreach($list AS $e)
        {
            ?><tr>
            <?
            foreach($header AS $k=>$vv)
            {
                $v=$e[$k];
                switch($k)
                {
                    case 'rating':$v=$v.'/5';break;
                    case 'already_buyed':
                    case 'already_rent':
                        $v=@json_decode($v);
                        if(!$v)
                            $v='mai';
                        else
                            $v=implode(', ',$v);
                    default:
                        $v=htmlspecialchars($v);
                }
                ?><td><?=$v?></td><?
            }?>
            </tr>
        <?}?>
        </tbody>
    </table>
    <script>
        $('#tb').DataTable();
    </script>
    </div><?
get_footer();