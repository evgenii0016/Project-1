<h2>Последние 3 зарегистрированных пользователя</h2>
<ul>
<? foreach($arResult as $category): ?>
    <li><a href="/posts/<?=$category['ID']?>/" title="<?=$category['LOGIN']?>"><?=$category['LOGIN']?> </a></li>
<? endforeach; ?>
</ul>
