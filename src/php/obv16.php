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
        <p class="article__epigraph">Чтобы с умом потратить деньги, нужно всего лишь две вещи.
          <br>Сами догадайтесь, какие...</p>
        <h1>On Balance Volume</h1>
        <p><strong>Индикатор Балансового Объема (On Balance Volume, OBV),</strong> разработанный Джозефом Гранвиллем, связывает объем с изменением цены.</p>
        <p>Если цена закрытия текущего бара (свечи) выше цены закрытия предыдущего бара, то итоговому значению объема бара присваивается положительный знак, в противном случае — отрицательный знак.
          <br>Если текущая цена закрытия выше предыдущей, то:
          <br>OBV (i) = OBV (i - 1) + VOLUME (i)
          <br>Если текущая цена закрытия ниже предыдущей, то:
          <br>OBV (i) = OBV (i - 1) - VOLUME (i)
          <br>Если текущая цена закрытия равна предыдущей, то:
          <br>OBV (i) = OBV (i - 1)
          <br>Где:
          <br>OBV (i) — текущее значение индикатора On Balance Volume;
          <br>OBV (i - 1) — значение индикатора On Balance Volume в предыдущем периоде;
          <br>VOLUME (i) — объем текущего бара.</p>
        <p>Самый сильный сигнал индикатор OBV подает при расхождении с ценами:</p>
        <p>1. Бычье расхождение говорит о возможном развороте восходящего тренда
          <br>2. Медвежье расхождение говорит о возможном развороте нисходящего тренда</p>
        <p>Бычье расхождение:</p>
        <div class="img">
          <img src="img/r146.gif" width="524" height="319"> </div>
        <p>Индикатор OBV подает опережающие сигналы по сравнению с графиком цен, поэтому пробой линии тренда, построенной на индикаторе, говорит о возможном скором пробое линии тренда на ценовом графике.</p>
        <div class="img">
          <img src="img/r147.gif" width="523" height="314"> </div>
        <p>Пробой линии тренда индикатора OBV является предвестником важного сигнала — пробоя линии тренда на графике цен, который происходит значительно позже и сигнализирует о возможном развороте восходящего тренда (см. рис.).</p>
        <?php $page_prev='Force.php' ; $page_next='pivotnye_tochki.php' ; include 'site__article-pagination.php'; ?>
      </div>
    </div>
    <div class="footer">© 2010 Copyright </div>
  </div>
</body>

</html>
