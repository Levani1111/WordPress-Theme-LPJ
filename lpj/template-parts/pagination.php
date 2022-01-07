<?php

    // Previous/next page navigation.
    $pag = get_the_posts_pagination();
    $pag = str_replace('div', 'ul', $pag);
    $pag = str_replace('nav-links', 'pagination', $pag);
    $pag = str_replace('page-numbers', 'page-link', $pag);
    $pag = str_replace('<a', '<li class="page-item"><a', $pag);
    $pag = str_replace('</a>', '</li></a>', $pag);
    $pag = str_replace('<span', '<li class="page-item active"><span', $pag);
    $pag = str_replace('</span>', '</span></li>', $pag);
?>

<!-- Previous/next page navigation. -->
<div style="display: flex">
        <span style="margin:auto">
           <?= $pag;?>
        </span>
</div>
<br>