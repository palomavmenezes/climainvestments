<?php
$title_more_impact = get_field('title_more_impact', $post->ID);
$description_more_impact = get_field('description_more_impact', $post->ID);
?>
<section id="more-impact" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-12 txt-more-impact">
                <h2><?php echo $title_more_impact ?></h2>
                <p><?php echo $description_more_impact ?></p>
                <a class="btn-white" href="" id="whatsapp-share-btt" rel="nofollow" target="_blank">Whatsapp</a>
            </div>
        </div>
    </div>
</section>

<script>
    //Constrói a URL depois que o DOM estiver pronto
    document.addEventListener("DOMContentLoaded", function() {
        //conteúdo que será compartilhado: Título da página + URL
        var conteudo = encodeURIComponent(document.title + " " + window.location.href);
        //altera a URL do botão
        document.getElementById("whatsapp-share-btt").href = "https://api.whatsapp.com/send?text=" + conteudo;
    }, false);
</script>