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
        <p class="article__epigraph">Ну, сделай что-нибудь, хотя бы деньги!</p>
        <h1>Торговая система №5</h1>
        <p>Данная торговая система использует скользящие средние с периодом 13 (СС13) и с периодом 21 (СС21), а также MACD, Parabolic sar и RSI.
          <br> Алгоритм торговой системы таков:
          <br>— Определение тренда на дневном графике
          <br>— Определение завершения отката на часовом графике
          <br>— Определение точки входа
          <br>— Определение точки выхода</p>
        <h3>1. Определение тренда на дневном графике</h3>
        <p>Мы уже знаем, как определять тренд на ценовом графике из предыдущих глав, поэтому не будем задерживаться на первом этапе. Напомним лишь, что для этого можно воспользоваться линией тренда, скользящими средними, различными индикаторами, как по отдельности, так и в совокупности. Определив направление тренда на дневном графике, переходим ко 2-му этапу.</p>
        <h3>2. Определение завершения отката на часовом графике</h3>
        <p>Чтобы определить завершение отката, необходимо для начала выявить на часовом графике тренд, противоречащий тренду на дневном графике, а затем определить момент его завершения. Для этого используем хорошо известные и проверенные временем способы, а именно:
          <br>— Пробой ценами линии тренда.
          <br>— Дивергенция (расхождения цен с индикаторами).
          <br>— Изменение положения Parabolic sar относительно цен и проч.</p>
        <h3>3. Определение точки входа</h3>
        <p>Точка входа в рынок на часовом графике определяется следующим образом:</p>
        <p>Цены пробивают СС13 и СС21 снизу вверх или сверху вниз
          <br> RSI пробивает линию 50
          <br> Цены возвращаются к СС13 и СС21
          <br> RSI возвращается к линии 50</p>
        <p>Это и есть точка входа, т.е. момент открытия сделки на покупку или на продажу. Расстановку ”стопов” лучше рассмотреть на нижеследующем примере.</p>
        <h3>4. Определение точки выхода</h3>
        <p>Открытые позиции можно закрывать, как только Parabolic sar на часовом или дневном графике изменит свое положение относительно цен. Выбор масштаба графика &mdash; решение трейдера.
          <br> Есть и другой способ: открытые позиции можно удерживать до тех пор, пока цены находятся выше (ниже) СС13 и СС21. Как только они пересекают указанные скользящие средние, сделку следует закрыть. </p>
        <h3>Пример.</h3>
        <p><strong>1. Определение тренда на дневном графике:</strong></p>
        <p>
          <img src="img/r159.gif" alt="Определение тренда на дневном графике" width="523" height="312">
        </p>
        <p>На дневном графике нисходящий тренд. На это указывают и линия тренда, и MACD, и Parabolic sar.</p>
        <p><strong>2. Определение завершения отката на часовом графике </strong></p>
        <div class="img">
          <img src="img/r160.gif" alt="Определение завершения отката на часовом графике" width="523" height="315">
        </div>
        <p>На завершение отката указывают и дивергенция между ценами и RSI, и изменение положения Parabolic sar относительно цен.</p>
        <p><strong>3. Определение точки входа.</strong></p>
        <p>На часовом графике хорошо видно, что:
          <br>— Цены пробивают СС13 и СС21 сверху вниз;
          <br>— RSI пробивает линию 50;
          <br>— Цены возвращаются к СС13 и СС21 (вертикальный красный пунктир);
          <br>— RSI возвращается к линии 50 (вертикальный красный пунктир);</p>
        <p>Точку входа Pr устанавливаем ниже последнего донышка, которое образовалось после пробоя ценами скользящих средних.
          <br> S/L устанавливаем выше последней вершины, которая образовалась после возврата цен к скользящим средним, но не ближе 50 пунктов к Pr.
          <br> T/P можно установить на расстоянии 100 пунктов от Pr.</p>
        <p>Важно понимать, что по мере того, как цены будут снижаться, «стопы» (S/L и T/P) следует продвигать вслед за ценами. В тот момент, когда S/L достигнет уровня Pr, сделка станет безубыточной даже в том случае, если цены повернут вспять.</p>
        <p><strong>4. Определение точки выхода.</strong></p>
        <p>Открытую позицию удерживаем до тех пор, пока Parabolic sar не изменит свое положение относительно цен (см. рис.) на часовом или дневном графике. Выбор масштаба графика за трейдером.
          <br> Есть и другой способ определения точки выхода. Открытую позицию удерживаем до тех пор, пока цены находятся ниже СС13, а СС13 ниже СС21. Как только цены пересекают скользящие средние снизу вверх, сделку следует закрыть.
          <br>
        </p>
        <p>Тем более сделку необходимо немедленно закрыть, как только СС13 пересекает СС21 снизу вверх.</p>
        <?php $page_prev='torg4.php' ; $page_next='zolotaya_strategiya.php' ; include 'site__article-pagination.php'; ?>
      </div>
      <div class="footer">© 2010 Copyright </div>
    </div>
  </div>
  <table </body>

</html>
