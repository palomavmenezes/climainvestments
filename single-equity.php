 <?php 
    global $post;

    $equity = new Equity( $post );

    // var_dump($equity);
?>


<?php get_header(); ?>

<main id="page-company" class="wow">

    <section id="infos-companies">
        <div class="container">
            <div class="row title-companies wow fadeInUp">
                <div class="col-md-1">
                    <img src="<?= $equity->logo() ?>" alt="<?= $equity->post->post_title ?>" height="60px">
                </div>

                <div class="col-md-11 align-center">
                    <h4><?= $equity->post->post_title ?></h4>
                </div>
            </div>

            <div class="row wow fadeInUp">
                <div class="col-12 share-performance">
                    <h4>SHARE PERFORMANCE:</h4>
                </div>

                <div class="col-12">
                    <div id="equity-chart"></div>
                </div>
            </div>

            <div class="row descriptions-companies wow fadeInUp">
                <div class="col-12">
                    <p>Ticker: <span><?= $equity->get( 'ticker' ) ?></span></p>
                    <p>Isin: <span><?= $equity->get( 'isin' ) ?></span></p>
                    <p>Exchange: <span><?= $equity->get( 'exchange' ) ?></span></p>

                    <hr style="border-top: 1px solid #7030a0; margin-top: 1.5rem; margin-bottom: 1.5rem">

                    <p>Currency: <span><?= $equity->get( 'currency' ) ?></span></p>
                    <p>Country of Incorporation: <span><?= $equity->get( 'country_of_incorporation' ) ?></span></p>
                    <p>IPO Date: <span><?= date( 'd M, Y', strtotime( $equity->get( 'ipo_date' ) ) ) ?></span></p>
                    <p>Address: <span><?= $equity->get( 'address' ) ?></span></p>

                    <?php if ( $equity->get( 'website' ) ): ?>
                        <p>Website: <span><a href="<?= $equity->get( 'website' ) ?>" target="_blank"><?= $equity->get( 'website' ) ?></a></span></p>
                    <?php endif ?>
                    

                    <hr style="border-top: 1px solid #0070c0; margin-top: 1.5rem; margin-bottom: 1.5rem">

                    <h4>Company Description</h4>

                    <hr style="border-top: 1px solid #0070c0; margin-top: 1.5rem; margin-bottom: 1.5rem">

                    <p style="text-transform: none; font-family: 'Averta';"><?= $equity->get( 'company_description' ) ?></p>

                    <hr style="border-top: 1px solid #06cf15; margin-top: 1.5rem; margin-bottom: 1.5rem">

                    <h4>Clima's Vetting & Assessment:</h4>

                    <hr style="border-top: 1px solid #06cf15; margin-top: 1.5rem; margin-bottom: 1.5rem">

                    <p style="text-transform: none; font-family: 'Averta';" ><?= $equity->get( 'clima_assessment' ) ?></p>
                    <p>Clima's Segment: <span><?= $equity->get( 'clima_segment' ) ?></span></p>
                    <div class="row">
                        <div class="col-md-6"><p>Clima's Scorecard: <span><?= $equity->get( 'clima_scorecard' ) ? $equity->get( 'clima_scorecard' ) . ' out of 10' : 'Coming Soon' ?> </span></p></div>

                        <div class="col-md-6"><p>Clima's CO2 Avoidance Range: <span><?= $equity->get( 'clima_co2_avoidance' ) ? $equity->get( 'clima_co2_avoidance' ) : 'Coming Soon' ?></span></p></div>
                    </div>

                    <hr style="border-top: 1px solid #ce6b01; margin-top: 1.5rem; margin-bottom: 1.5rem;">

                    <div class="row">
                        <div class="col-md-6">
                            <p>Market Cap: <span><?= $equity->get( 'market_cap', 'money' ) ?></span></p>
                            <p>EBITDA: <span><?= $equity->get( 'ebitda', 'money' ) ?></span></p>
                            <p>Net Income: <span><?= $equity->get( 'net_income', 'money' ) ?></span></p>
                            <p>Earnings Per Share: <span><?= $equity->get( 'earnings_per_share', 'decimal' ) ?></span></p>
                            <p>Shares Outstanding: <span><?= $equity->get( 'shares_outstanding', 'money' ) ?></span></p>
                            <p>Shares Float: <span><?= $equity->get( 'shares_float', 'money' ) ?></span></p>
                            <p>Payout Ratio: <span><?= $equity->get( 'payout_ratio', 'decimal' ) ?></span></p>
                            <p>Forward Annual Dividend Yield: <span><?= $equity->get( 'foward_annual_dividend_yield', 'percentage' ) ?></span></p>
                        </div>

                        <div class="col-md-6">
                            <p>Price/Sales: <span><?= $equity->get( 'price_sales', 'decimal' ) ?></span></p>
                            <p>EV/Revenue: <span><?= $equity->get( 'ev_revenue', 'decimal' ) ?></span></p>
                            <p>EV/EBITDA: <span><?= $equity->get( 'ev_ebitda', 'decimal' ) ?></span></p>
                            <p>Trailing PE: <span><?= $equity->get( 'trailing_pe', 'decimal' ) ?></span></p>
                            <p>Beta: <span><?= $equity->get( 'beta', 'decimal' ) ?></span></p>
                            <p>52 Week High & Low: <span>$<?= $equity->get( 'low_52_week' ) ?> to $<?= $equity->get( 'high_52_week' ) ?></span></p>
                            <p>ROA: <span><?= $equity->get( 'roa', 'percentage' ) ?></span></p>
                            <p>ROE: <span><?= $equity->get( 'roe', 'percentage' ) ?></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</main>
<?php get_footer(); ?>

<script>
    var width = jQuery('#infos-companies > .container').width();

    var chart = LightweightCharts.createChart(document.getElementById('equity-chart'), {
        width: width,
        height: 400,
        rightPriceScale: {
            scaleMargins: {
                top: 0.3,
                bottom: 0.25,
            },
            borderVisible: false,
        },
        layout: {
            backgroundColor: '#ffffff',
            textColor: '#999',
        },
        grid: {
            vertLines: {
                color: 'rgba(42, 46, 57, 0)',
            },
            horzLines: {
                color: 'rgba(42, 46, 57, 0.6)',
            },
        },
    });

    var areaSeries = chart.addAreaSeries({
        topColor: 'rgba(15, 138, 152, .52)',
        bottomColor: 'rgba(15, 138, 152, .40)',
        lineColor: 'rgba(38,198,218, 1)',
        lineWidth: 2,
    });

    var volumeSeries = chart.addHistogramSeries({
        color: '#26a69a',
        priceFormat: {
            type: 'volume',
        },
        priceScaleId: '',
        scaleMargins: {
            top: 0.8,
            bottom: 0,
        },
    });


    var price_data = <?= json_encode($equity->last_5_years_prices) ?>;
    var volume_data = <?= json_encode($equity->last_5_years_volumes) ?>;

 
    areaSeries.setData(price_data);

    volumeSeries.setData(volume_data);
</script>