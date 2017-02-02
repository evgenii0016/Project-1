<h2>Инфоблок</h2>
<ul>
<? foreach($arResult as $category): ?>
    <li><a href="/posts/<?=$category['ART']?>/" title="<?=$category['CHARESTERISTIC']?>"><?=$category['CHARESTERISTIC']?> (<?=

$category['DESCRIOTION']?>)</a></li>
<? endforeach; ?>
</ul>

