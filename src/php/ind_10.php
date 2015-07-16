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
        <p class="article__epigraph">Не следует говорить о деньгах с людьми, у которых их гораздо больше, чем у тебя, или гораздо меньше</p>
        <h1>Индекс  относительной силы (RSI)</h1>
        <h2>Построение RSI</h2>
        <p>RSI <em>(</em><em>relative</em><em> strength</em><em> index</em><em>)</em> разработал и ввел в практику Дж. Уэллс Уайлдер-мл.
          <br /> RSI измеряет силу рынка и подает сигналы либо с опережением цен, либо синхронно с ценами. </p>
        <p>
          <strong>RSI =  100 – 100 / (1+ RS)</strong>, где
          <br />
          <strong>RS</strong> = (среднее значение повышений Цз в данном окне) / (среднее значение понижений Цз в данном окне)</p>
        <p>Алгоритм расчета 7-дневного RSI:</p>
        <p>
          1. Зафиксируйте Цз последних 7 дней.
          <br /> 2. Отметьте дни, когда рынок закрылся выше, чем накануне, и определите сумму всех повышений цен. Затем разделите ее на 7 для выведения среднего значения <strong>повышений</strong> Цз.
          <br /> 3. Отметьте дни, когда рынок закрылся ниже, чем накануне, и определите сумму всех понижений цен. Затем разделите ее на 7 для выведения среднего значения <strong>понижений</strong> Цз.
          <br /> 4. Определите относительную силу (RS), для чего разделите среднее значение повышений Цз на среднее значение понижений Цз.
          <br /> 5. Для получения RSI подставьте величину RS в приведенную выше формулу.
          <br /> 6. Повторяйте эту операцию для каждого дня.</p>
        <p>
          RSI колеблется от 0 до 100.</p>
        <p>
          Так называемые зоны перекупленности / перепроданности (погранлинии) RSI обычно отмечают на уровнях 30% и 70%.</p>
        <p>
          RSI размещается под временным ценовым графиком в готовом виде, т.е. его не нужно рассчитывать, его нужно анализировать.</p>
        <p>RSI подает сигналы 3 типов (по мере убывания значимости):
          <br /> 1. расхождения с ценами (дивергенция)
          <br /> 2. графические модели
          <br /> 3. уровни RSI.
          <h2>1. Расхождения пиков и  впадин </h2>
          <p>Расхождения между RSI и ценами подают самые сильные сигналы к покупке и продаже. </p>
          <p>
            1.1. Расхождения впадин (донышек) подают сигналы к покупке. Они возникают, когда цены опускаются на новую глубину, а впадина RSI выше предыдущей. Следует покупать, как только RSI повернет вверх от второй впадины, а S/L (защитную приостановку) размещать ниже последней впадины цен. Сигналы к покупке особенно сильны, когда первая впадина RSI находится под нижней погранлинией, а вторая &mdash; над ней.</p>
          <p>
            1.2. Расхождение пиков (вершин, гребней) подают сигналы к продаже. Они возникают, когда цены достигают новой высоты, а пик RSI уступает предыдущему. Следует продавать, как только RSI повернет вниз от второго пика, а S/L (защитную приостановку) размещать над последним пиком цен. Сигналы к продаже особенно сильны, когда первый пик RSI находится над верхней погранлинией, а второй &mdash; под ней.</p>
          <div class="img">
            <img src="img/r96.gif" width="489" height="313" />
          </div>
          <h2>2. Графические модели</h2>
          <p>Традиционные методы анализа графиков цен подходят для RSI больше, чем для прочих индикаторов. Линии тренда ЛТ, уровни поддержки S и сопротивления R, модели &quot;голова и плечи&quot; и другие дают важные сигналы. Нередко эти сигналы RSI на несколько дней опережают сигналы графиков цен, позволяя предугадать возможные изменения тенденции. Так, прорыв линии тренда ЛТ RSI часто происходит раньше прорыва ЛТ цен.</p>
          <p>
            2.1. Когда RSI прорывает свою нисходящую линию тренда ЛТ, размещайте приказ о покупке над ЛТ цен, чтобы уловить момент прорыва вверх.</p>
          <p>
            2.2. Когда RSI прорывает свою восходящую линию тренда ЛТ, размещайте приказ о короткой продаже под ЛТ цен, чтобы уловить прорыв вниз.</p>
          <div class="img">
            <img src="img/r97.gif" width="523" height="294" />
          </div>
          <p>На рис видно, что RSI пробивает свою линию тренда ЛТ раньше, чем ценовой график свою ЛТ и подает, тем самым, опережающий сигнал о возможной смене тренда.</p>
          <h2>3. Уровни RSI  </h2>
          <p>Подъем RSI над его верхней погранлинией (70, синий пунктир) показывает, что рынок вступает в состояние перекупленности. Открывать длинные позиции (покупать) в этом случае стоит только тогда, когда недельная тенденция идет вверх. </p>
          <p>Падение RSI за его нижнюю погранлинию (30, синий пунктир) показывает, что рынок вступает в состояние перепроданности. Открывать короткие позиции (продавать) в этом случае стоит только тогда, когда недельная тенденция идет вниз. </p>
          <p>3.1. Можно покупать (при наличии подтверждающих сигналов от других индикаторов), если RSI, опустившись за нижнюю погранлинию, затем поднимается над ней. </p>
          <p>3.2. Можно продавать (при наличии подтверждающих сигналов от других индикаторов), если RSI, поднявшись над верхней погранлинией, затем опускается ниже нее (см. рис.).</p>
          <p>RSI хорош для игровых диапазонов, но, к сожалению, подает ложные или преждевременные сигналы при сильном тренде.</p>
          <div class="img">
            <img src="img/r98.gif" width="522" height="295" />
          </div>
          <?php $page_prev='prb.php' ; $page_next='sto_11.php' ; include 'site__article-pagination.php'; ?>
      </div>
      <!--End Main text-->
    </div>
    <!--End conteyner2-->
    <div class="footer">© 2010 Copyright </div>
  </div>
</body>

</html>