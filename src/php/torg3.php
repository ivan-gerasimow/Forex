<!DOCTYPE html>
<html>

<head>
  <?php include 'site__head.php'; ?>
</head>

<body>
  <div class="container">
    <?php include 'site__header.php'; include 'site__navigation--left.php'; ?>
    <div class="articleWrapper">
      <div class="article">
        <!--Main text-->
        <p class="article__epigraph">Деньгами надо управлять, а не служить им</p>
        <h1>Торговая система №3</h1>
        <p>Принцип построения системы очень прост — анализируется только часовой график в совокупности со скользящими средними и индикатором ”индекс силы” Элдера.</p>
        <p>Если скользящая средняя с периодом 13 (СС13) на ценовом графике имеет положительный наклон, т.е. указывает на то, что тренд на часовом графике восходящий, а скользящая средняя с периодом 2 от индекса силы (СС2) оказывается в отрицательной зоне (buy zone) — следует открывать длинную позицию, т.е. покупать (см. рис.).</p>
        <p>И наоборот. Если СС13 на ценовом графике имеет отрицательный наклон, т.е. указывает на то, что тренд на часовом графике отрицательный, а СС2 от индекса силы оказывается в положительной зоне (zone sell) — следует открывать короткую позицию, т.е. продавать (см. рис.).
          <br> Разумеется, для подтверждения направления тренда на часовом графике мы можем прибегнуть к помощи других индикаторов, например, Parabolic sar.</p>
        <p>Рассмотрим на примере.</p>
        <div class="img">
          <img src="img/r154.gif" width="520" height="316">
        </div>
        <p>Если тренд на часовом графике восходящий, то падения СС2 от индекса силы в отрицательную зону покажут на лучшие моменты для покупки.
          <br>Если тренд на часовом графике нисходящий, то подъем СС2 от индекса силы в положительную зону покажет лучшие моменты для продажи.</p>
        <p>Направление тренда на часовом графике подтверждается положительным или отрицательным наклоном СС13.</p>
        <p>Если тренд восходящий, открытую позицию удерживаемu до тех пор, пока цены находятся выше СС13, а СС13 выше СС21. Как только цены пересекают скользящие средние сверху вниз, сделку следует закрыть.
          <br> Если тренд нисходящий, открытую позицию удерживаемu до тех пор, пока цены находятся ниже СС13, а СС13 ниже СС21. Как только цены пересекают скользящие средние снизу вверх, сделку следует закрыть.</p>
        <p>Тем более сделку необходимо немедленно закрыть при  пересечении скользящих средних.</p>
        <p>Для определения точки выхода можно также воспользоваться  индикатором Parabolic sar.</p>
        <?php $page_prev='torg2.php' ; $page_next='torg4.php' ; include 'site__article-pagination.php'; ?>
        </p>
      </div>
      <div class="footer">© 2010 Copyright </div>
    </div>
  </div>
</body>

</html>
