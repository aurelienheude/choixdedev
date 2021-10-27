<?php 
    include "../../lib/fonction.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de configuration Choixdedev.com</title>

    <link rel="stylesheet" href="../../css/font.css">
    <link rel="stylesheet" href="../../css/app.css">

    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/vote.css">
    <link rel="stylesheet" href="../../css/proposition.css">

    <link rel="stylesheet" href="../../font_awesome/css/all.css">
</head>

<body>

    <div id="container_content" class="container_content">
        <div class="top_bar">
            <div id="toggle" class="toggle_button">
                <h3>DASHBOARD</h3>
            </div>
            <div id="toggle_settings" class="toggle_button">
                <i class="fas fa-cog fa-1x"></i>
            </div>
        </div>

        <section class="dashboard">
            <div class="cards cards_stat">
                <div class="header_cards_stat">
                    <h2>Visite sur 7 Jours</h2>
                </div>
                <canvas class="chart" id="line-chart"></canvas>
            </div>
            <div class="line_cards_info">
                <div class="cards number_vote">
                    <div class="header_cards_info">
                        <div class="circle_pic">
                            <i class="fas fa-vote-yea fa-1x"></i>
                        </div>
                        <div class="info_cards_info">
                            <p class="muted">Nombre de Vote</p>
                            <h3>649</h3>
                        </div>
                    </div>
                    <div class="footer_cards_info">
                        <div class="bar"></div>
                        <div class="footer_footer">
                            <i class="fas fa-redo fa-1x"></i><a href="dashboard.html">Actualiser</a>
                        </div>
                    </div>
                </div>

                <div class="cards number_choice">
                    <div class="header_cards_info">
                        <div class="circle_pic">
                            <i class="fas fa-images fa-1x"></i>
                        </div>
                        <div class="info_cards_info">
                            <p class="muted">Nombre de choix</p>
                            <h3>13</h3>
                        </div>
                    </div>
                    <div class="footer_cards_info">
                        <div class="bar"></div>
                        <div class="footer_footer">
                            <i class="fas fa-redo fa-1x"></i><a href="dashboard.html">Actualiser</a>
                        </div>
                    </div>
                </div>

                <div class="cards number_visitor">
                    <div class="header_cards_info">
                        <div class="circle_pic">
                            <i class="fas fa-user fa-1x"></i>
                        </div>
                        <div class="info_cards_info">
                            <p class="muted">Nombre de Visiteur Total</p>
                            <h3>6191</h3>
                        </div>
                    </div>
                    <div class="footer_cards_info">
                        <div class="bar"></div>
                        <div class="footer_footer">
                            <i class="fas fa-redo fa-1x"></i><a href="dashboard.html">Actualiser</a>
                        </div>
                    </div>
                </div>

                <div class="cards number_visitor">
                    <div class="header_cards_info">
                        <div class="circle_pic">
                            <i class="fas fa-user fa-1x"></i>
                        </div>
                        <div class="info_cards_info">
                            <p class="muted">Nombre de Visiteur Total</p>
                            <h3>6191</h3>
                        </div>
                    </div>
                    <div class="footer_cards_info">
                        <div class="bar"></div>
                        <div class="footer_footer">
                            <i class="fas fa-redo fa-1x"></i><a href="dashboard.html">Actualiser</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="list_choice">
            <div class="cards list_choice_tab">
                <h3>Liste de Choix</h3>
                <div class="tab">
                    <ul class="tab_head">
                        <li class="tab_id">ID</li>
                        <li class="tab_img">IMAGE 1</li>
                        <li class="tab_choice">CHOIX 1</li>
                        <li class="tab_img">IMAGE 2</li>
                        <li class="tab_choice">CHOIX 2</li>
                        <li class="tab_verification">ACCEPT/REFUSE</li>
                    </ul>
                    <?php tableau_choix(); ?>
                </div>
            </div>
            
        </section>

        <section class="vote">

        </section>


    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../../js/graph.js"></script>
    <script src="../../js/script_app.js"></script>
    <script src="time.js"></script>
</body>

</html>