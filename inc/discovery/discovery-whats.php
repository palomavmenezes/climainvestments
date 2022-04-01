<?php
$title_discovery_whats = get_field('title_discovery_whats', $post->ID);
$description_discovery_whats = get_field('description_discovery_whats', $post->ID);
?>
<section id="discovery-whats" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-12 txt-discovery-whats">
                <h2><?php echo $title_discovery_whats ?></h2>
                <p><?php echo $description_discovery_whats ?></p>
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