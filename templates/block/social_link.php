<?php
declare(strict_types=1);
/**
 * @var \Somatik\SocialLink $link
 */
?>
<a class="social-link" target="_blank"
   href="<?= h($link->value) ?>">
    <svg width="32" height="32">
        <use xmlns:xlink="http://www.w3.org/1999/xlink"
             xlink:href="/icon/bundle.min.svg#<?= $link->name ?>"></use>
    </svg>
</a>
