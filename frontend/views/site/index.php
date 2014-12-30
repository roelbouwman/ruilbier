<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'Thuisbrouwers ruilen bieren';
?>

<div class="site-index">

    <div class="jumbotron">

        <h1>Bier ruilen!</h1>

        <p class="lead">Een platform voor het ruilen van thuis gebrouwen bieren.</p>

        <!-- <p><a class="btn btn-lg btn-success" href=<?php echo Url::to(['site/about']);?>>Naar de bieren!</a></p>  -->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Waarom bier ruilen?</h2>
                
				<hr>
                <p>Als thuisbrouwers zijn wij heel benieuwd naar de resultaten van collega's maar ook heel benieuwd naar 
                het oordeel over onze eigen brouwsels. Met deze site willen we graag beiden combineren! Het idee erachter is
                dat thuisbrouwers hier hun bier "ter ruil" aanbieden en dat de ruilers elkaars bier beoordelen met een
                standaard proefformulier.</p>
				<hr>
				<p><a class="btn btn-default" href=<?php echo Url::to(['site/about']);?>>Meer waarom &raquo;</a></p>
                
            </div>
            <div class="col-lg-4">
                <h2>Spelregels!</h2>
				
				<hr>
                <p>Spelregels zijn belangrijk! De knop hieronder brengt je naar de spelregels.</p>
				<hr>
                <p><a class="btn btn-default" href=<?php echo Url::to(['site/about']);?>>Spelregels &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Recepten...</h2>
				
				<hr>
                <p>Als lid van ruilbier heb je toegang tot alle recepten van de ruilers. Nog geen lid? Meld je 
                <a href=<?php echo Url::to(['site/signup']);?>>hier</a> aan.
                </p>
				<hr>
                <p><a class="btn btn-default" href=<?php echo Url::to(['site/about']);?>>Naar recepten &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
