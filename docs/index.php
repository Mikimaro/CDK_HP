<?php
$title = array(
    'スケジュールについて',
    ' Special Presentation Day 2017招待状',
    '運営体制について',
    'プライバシーポリシーについて',
    );

$day = array(
    '2018.1.1',
    '2017.12.23',
    '2016.3.27',
    '2015.6.21',
    );

$comments = array(
    '1年間の予定を公開致します。',
    'SPD2017の招待状を公開致します。',
    '運営体制について公開致します。',
    'プライバシーポリシーについて公開致します。',
    );

$url  = array(
    './pdf/2018_schedule.pdf',
    './pdf/spd2017_invitation.pdf',
    './pdf/operating_structure.pdf',
    './pdf/privacy_policy.pdf',
    );

require_once 'header.php';
?>

    <div class="container-fluid">

        <div class="pageTitle_nonTxt">

            <h1 class="headline">ドキュメント</h1>

            <p class="headline">
                CoderDojo Kashiwaが公開しているドキュメントを公開しています。
            </p>

        </div>

        <div id="docs">

            <section class="row">

                <?php

                for ($i=0; $i < count($title); $i++) { 
                    print("

                    <div class='col-lg-6'>

                        <article>

                            <div class='preview'>

                                <embed src='{$url[$i]}' type='application/pdf' width='425' height='500'>

                            </div>

                            <section class='eventText'>

                                <h4>{$title[$i]}</h4>
                                <h5>{$day[$i]}</h5>
                                <h4>{$comments[$i]}</h4>

                                <h4><a download='{$title[$i]}' href='{$url[$i]}'><i class='fa fa-download fa-fw' aria-hidden='true'></i>ダウンロード</a></h4>

                            </section>

                        </article>

                    </div>
                ");}

                ?>

            </section>

        </div>

    </div>

<?php
require_once 'footer.php';
?>