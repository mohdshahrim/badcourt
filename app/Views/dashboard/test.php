<script defer src="/minAjax.js"></script>

<style>
    html, body {
        margin: 0;
        padding: 0;
        overflow: hidden;
        height: 100%;
    }

    .container {
        position: relative;
        width: 100%;
        height: 100vh;
    }

    .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .active {
        opacity: 1;
    }

    .bg1 { background-color: oklch(98.5% 0.002 247.839);}
</style>
<style>
    /* styling for ongoing matches */
    /* use om for short */
    .om-table {
        background-color: white;
        border: 1px solid #ccc;
        display: table;
        width: 100%;
    }
    .om-courtno {
        width: 10%; /* om-matchscore will occupy 90% */
        padding: 8px;
        text-align:center;
    }
    .om-courtno-1 {
        font-size: 1em;
    }
    .om-courtno-2 {
        font-size: 3em;
    }

    .om-matchscore {
        width: 90%;
        background-color: white;
    }
    .om-playername {
        font-size: 0.7em;
        color: oklch(13% 0.028 261.692);
    }
    .om-score {
        font-size: 2em;
        border-left: 1px solid #ccc;
        text-align: center;
    }
    .om-matchwon {
        font-size: 2em;
        background-color: oklch(98.5% 0.002 247.839);
    }

    /* misc */
    .om-borderbottom {
        border-bottom: 1px solid #ccc;
    }
</style>

<div class="container">
    <div class="slide bg1 active" style="padding:2em;">
        <h2 style="font-weight: bolder;">ONGOING MATCHES</h2>

        <!-- court 1 -->
        <table class="om-table">
            <tr>
                <td class="om-courtno" style="border-right: 2px solid red;">
                    <div class="om-courtno-1">court</div>
                    <div class="om-courtno-2">1</div>
                </td>
                <td class="om-matchscore">
                    <table style="width: 100%;">
                        <colgroup>
                            <col style="width:5%;">
                            <col style="width:25%;">
                            <col style="width:auto;">

                            <col style="width:8%;">
                            <col style="width:8%;">
                            <col style="width:8%;">

                            <col style="width:8%;">
                        </colgroup>
                        <tr>
                            <td class="om-borderbottom w3-center">
                                <img width="30" id="c1-logo1" src=""/>
                            </td>
                            <td class="om-borderbottom" id="c1-team1"></td>
                            <td class="om-borderbottom">
                                <!-- player name -->
                                <table style="width:100%;">
                                    <tr>
                                        <td class="om-playername" id="c1-player1team1"></td>
                                    </tr>
                                    <tr>
                                        <td class="om-playername" id="c1-player2team1"></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="om-borderbottom om-score" id="c1-game1score1">0</td>
                            <td class="om-borderbottom om-score" id="c1-game2score1">0</td>
                            <td class="om-borderbottom om-score" id="c1-game3score1">0</td>
                            <td class="om-borderbottom om-score om-matchwon" id="c1-matchwon1">0</td>
                        </tr>
                        <tr>
                            <td class="w3-center">
                                <img width="30" id="c1-logo2" src=""/>
                            </td>
                            <td id="c1-team2"></td>
                            <td>
                                <!-- player name -->
                                <table>
                                    <tr>
                                        <td class="om-playername" id="c1-player1team2"></td>
                                    </tr>
                                    <tr>
                                        <td class="om-playername" id="c1-player2team2"></td>
                                    </tr>
                                </table>
                            </td>
                            <td id="c1-game1score2" class="om-score">0</td>
                            <td id="c1-game2score2" class="om-score">0</td>
                            <td id="c1-game3score2" class="om-score">0</td>
                            <td id="c1-matchwon2" class="om-score om-matchwon">0</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <br>

        <!-- court 2 -->
        <table class="om-table">
            <tr>
                <td class="om-courtno" style="border-right: 2px solid red;">
                    <div class="om-courtno-1">court</div>
                    <div class="om-courtno-2">2</div>
                </td>
                <td class="om-matchscore">
                    <table style="width: 100%;">
                        <colgroup>
                            <col style="width:5%;">
                            <col style="width:25%;">
                            <col style="width:auto;">

                            <col style="width:8%;">
                            <col style="width:8%;">
                            <col style="width:8%;">

                            <col style="width:8%;">
                        </colgroup>
                        <tr>
                            <td class="om-borderbottom w3-center">
                                <img width="30" id="c2-logo1" src=""/>
                            </td>
                            <td class="om-borderbottom" id="c2-team1"></td>
                            <td class="om-borderbottom">
                                <!-- player name -->
                                <table style="width:100%;">
                                    <tr>
                                        <td class="om-playername" id="c2-player1team1"></td>
                                    </tr>
                                    <tr>
                                        <td class="om-playername" id="c2-player2team1"></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="om-borderbottom om-score" id="c2-game1score1">&nbsp;</td>
                            <td class="om-borderbottom om-score" id="c2-game2score1">&nbsp</td>
                            <td class="om-borderbottom om-score" id="c2-game3score1">&nbsp;</td>
                            <td class="om-borderbottom om-score om-matchwon" id="c2-matchwon1">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="w3-center">
                                <img width="30" id="c2-logo2" src=""/>
                            </td>
                            <td id="c2-team2"></td>
                            <td>
                                <!-- player name -->
                                <table>
                                    <tr>
                                        <td class="om-playername" id="c2-player1team2"></td>
                                    </tr>
                                    <tr>
                                        <td class="om-playername" id="c2-player2team2"></td>
                                    </tr>
                                </table>
                            </td>
                            <td id="c2-game1score2" class="om-score">&nbsp;</td>
                            <td id="c2-game2score2" class="om-score">&nbsp;</td>
                            <td id="c2-game3score2" class="om-score">&nbsp;</td>
                            <td id="c2-matchwon2" class="om-score om-matchwon">&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <br>

        <!-- court 3 -->
        <table class="om-table">
            <tr>
                <td class="om-courtno" style="border-right: 2px solid red;">
                    <div class="om-courtno-1">court</div>
                    <div class="om-courtno-2">3</div>
                </td>
                <td class="om-matchscore">
                    <table style="width: 100%;">
                        <colgroup>
                            <col style="width:5%;">
                            <col style="width:25%;">
                            <col style="width:auto;">

                            <col style="width:8%;">
                            <col style="width:8%;">
                            <col style="width:8%;">

                            <col style="width:8%;">
                        </colgroup>
                        <tr>
                            <td class="om-borderbottom w3-center">
                                <img width="30" id="c3-logo1" src=""/>
                            </td>
                            <td class="om-borderbottom" id="c3-team1"></td>
                            <td class="om-borderbottom">
                                <!-- player name -->
                                <table style="width:100%;">
                                    <tr>
                                        <td class="om-playername" id="c3-player1team1"></td>
                                    </tr>
                                    <tr>
                                        <td class="om-playername" id="c3-player2team1"></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="om-borderbottom om-score" id="c3-game1score1">&nbsp;</td>
                            <td class="om-borderbottom om-score" id="c3-game2score1">&nbsp</td>
                            <td class="om-borderbottom om-score" id="c3-game3score1">&nbsp;</td>
                            <td class="om-borderbottom om-score om-matchwon" id="c3-matchwon1">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="w3-center">
                                <img width="30" id="c3-logo2" src=""/>
                            </td>
                            <td id="c3-team2"></td>
                            <td>
                                <!-- player name -->
                                <table>
                                    <tr>
                                        <td class="om-playername" id="c3-player1team2"></td>
                                    </tr>
                                    <tr>
                                        <td class="om-playername" id="c3-player2team2"></td>
                                    </tr>
                                </table>
                            </td>
                            <td id="c3-game1score2" class="om-score">&nbsp;</td>
                            <td id="c3-game2score2" class="om-score">&nbsp;</td>
                            <td id="c3-game3score2" class="om-score">&nbsp;</td>
                            <td id="c3-matchwon2" class="om-score om-matchwon">&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <br>

        <!-- court 4 -->
        <table class="om-table">
            <tr>
                <td class="om-courtno" style="border-right: 2px solid red;">
                    <div class="om-courtno-1">court</div>
                    <div class="om-courtno-2">4</div>
                </td>
                <td class="om-matchscore">
                    <table style="width: 100%;">
                        <colgroup>
                            <col style="width:5%;">
                            <col style="width:25%;">
                            <col style="width:auto;">

                            <col style="width:8%;">
                            <col style="width:8%;">
                            <col style="width:8%;">

                            <col style="width:8%;">
                        </colgroup>
                        <tr>
                            <td class="om-borderbottom w3-center">
                                <img width="30" id="c4-logo1" src=""/>
                            </td>
                            <td class="om-borderbottom" id="c4-team1"></td>
                            <td class="om-borderbottom">
                                <!-- player name -->
                                <table style="width:100%;">
                                    <tr>
                                        <td class="om-playername" id="c4-player1team1"></td>
                                    </tr>
                                    <tr>
                                        <td class="om-playername" id="c4-player2team1"></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="om-borderbottom om-score" id="c4-game1score1">&nbsp;</td>
                            <td class="om-borderbottom om-score" id="c4-game2score1">&nbsp</td>
                            <td class="om-borderbottom om-score" id="c4-game3score1">&nbsp;</td>
                            <td class="om-borderbottom om-score om-matchwon" id="c4-matchwon1">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="w3-center">
                                <img width="30" id="c4-logo2" src=""/>
                            </td>
                            <td id="c4-team2"></td>
                            <td>
                                <!-- player name -->
                                <table>
                                    <tr>
                                        <td class="om-playername" id="c4-player1team2"></td>
                                    </tr>
                                    <tr>
                                        <td class="om-playername" id="c4-player2team2"></td>
                                    </tr>
                                </table>
                            </td>
                            <td id="c4-game1score2" class="om-score">&nbsp;</td>
                            <td id="c4-game2score2" class="om-score">&nbsp;</td>
                            <td id="c4-game3score2" class="om-score">&nbsp;</td>
                            <td id="c4-matchwon2" class="om-score om-matchwon">&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

    </div>
</div>

<script>
    // c1-logo1
    // c1-team1
    // c1-player1team1
    // c1-player2team1
    // c1-game1score1
    // c1-game2score1
    // c1-game3score1
    // c1-matchwon

    function updateLivescore() {
        minAjax({
            url: "/livescore/get",
            type: "GET",
            success: function(response) {
                var data = JSON.parse(response);

                // check if court_1 exist
                if (typeof data['court_1'] !== 'undefined') {
                    // court 1 team 1
                    document.getElementById('c1-team1').innerText = data['court_1']['t1'];
                    document.getElementById('c1-logo1').src = data['court_1']['logo1'];
                    document.getElementById('c1-player1team1').innerText = data['court_1']['player1team1'];
                    document.getElementById('c1-player2team1').innerText = data['court_1']['player2team1'];
                    document.getElementById('c1-game1score1').innerText = data['court_1']['game1_score1'];
                    document.getElementById('c1-game2score1').innerText = data['court_1']['game2_score1'];
                    document.getElementById('c1-game3score1').innerText = data['court_1']['game3_score1'];
                    document.getElementById('c1-matchwon1').innerText = "0";
                    // court 1 team 2
                    document.getElementById('c1-team2').innerText = data['court_1']['t2'];
                    document.getElementById('c1-logo2').src = data['court_1']['logo2'];
                    document.getElementById('c1-player1team2').innerText = data['court_1']['player1team2'];
                    document.getElementById('c1-player2team2').innerText = data['court_1']['player2team2'];
                    document.getElementById('c1-game1score2').innerText = data['court_1']['game1_score2'];
                    document.getElementById('c1-game2score2').innerText = data['court_1']['game2_score2'];
                    document.getElementById('c1-game3score2').innerText = data['court_1']['game3_score2'];
                    document.getElementById('c1-matchwon2').innerText = "0";
                }

                // check if court_2 exist
                if (typeof data['court_2']['t1'] !== 'undefined') {
                    // court 1 team 1
                    document.getElementById('c2-team1').innerText = data['court_2']['t1'];
                    document.getElementById('c2-logo1').src = data['court_2']['logo1'];
                    document.getElementById('c2-player1team1').innerText = data['court_2']['player1team1'];
                    document.getElementById('c2-player2team1').innerText = data['court_2']['player2team1'];
                    document.getElementById('c2-game1score1').innerText = data['court_2']['game1_score1'];
                    document.getElementById('c2-game2score1').innerText = data['court_2']['game2_score1'];
                    document.getElementById('c2-game3score1').innerText = data['court_2']['game3_score1'];
                    document.getElementById('c2-matchwon1').innerText = "0";
                    // court 1 team 2
                    document.getElementById('c2-team2').innerText = data['court_2']['t2'];
                    document.getElementById('c2-logo2').src = data['court_2']['logo2'];
                    document.getElementById('c2-player1team2').innerText = data['court_2']['player1team2'];
                    document.getElementById('c2-player2team2').innerText = data['court_2']['player2team2'];
                    document.getElementById('c2-game1score2').innerText = data['court_2']['game1_score2'];
                    document.getElementById('c2-game2score2').innerText = data['court_2']['game2_score2'];
                    document.getElementById('c2-game3score2').innerText = data['court_2']['game3_score2'];
                    document.getElementById('c2-matchwon2').innerText = "0";
                }

                // check if court_3 exist
                if (typeof data['court_3']['t1'] !== 'undefined') {
                    // court 1 team 1
                    document.getElementById('c3-team1').innerText = data['court_3']['t1'];
                    document.getElementById('c3-logo1').src = data['court_3']['logo1'];
                    document.getElementById('c3-player1team1').innerText = data['court_3']['player1team1'];
                    document.getElementById('c3-player2team1').innerText = data['court_3']['player2team1'];
                    document.getElementById('c3-game1score1').innerText = data['court_3']['game1_score1'];
                    document.getElementById('c3-game2score1').innerText = data['court_3']['game2_score1'];
                    document.getElementById('c3-game3score1').innerText = data['court_3']['game3_score1'];
                    document.getElementById('c3-matchwon1').innerText = "0";
                    // court 1 team 2
                    document.getElementById('c3-team2').innerText = data['court_3']['t2'];
                    document.getElementById('c3-logo2').src = data['court_3']['logo2'];
                    document.getElementById('c3-player1team2').innerText = data['court_3']['player1team2'];
                    document.getElementById('c3-player2team2').innerText = data['court_3']['player2team2'];
                    document.getElementById('c3-game1score2').innerText = data['court_3']['game1_score2'];
                    document.getElementById('c3-game2score2').innerText = data['court_3']['game2_score2'];
                    document.getElementById('c3-game3score2').innerText = data['court_3']['game3_score2'];
                    document.getElementById('c3-matchwon2').innerText = "0";
                }

                // check if court_4 exist
                if (typeof data['court_4']['t1'] !== 'undefined') {
                    // court 1 team 1
                    document.getElementById('c4-team1').innerText = data['court_4']['t1'];
                    document.getElementById('c4-logo1').src = data['court_4']['logo1'];
                    document.getElementById('c4-player1team1').innerText = data['court_4']['player1team1'];
                    document.getElementById('c4-player2team1').innerText = data['court_4']['player2team1'];
                    document.getElementById('c4-game1score1').innerText = data['court_4']['game1_score1'];
                    document.getElementById('c4-game2score1').innerText = data['court_4']['game2_score1'];
                    document.getElementById('c4-game3score1').innerText = data['court_4']['game3_score1'];
                    document.getElementById('c4-matchwon1').innerText = "0";
                    // court 1 team 2
                    document.getElementById('c4-team2').innerText = data['court_4']['t2'];
                    document.getElementById('c4-logo2').src = data['court_4']['logo2'];
                    document.getElementById('c4-player1team2').innerText = data['court_4']['player1team2'];
                    document.getElementById('c4-player2team2').innerText = data['court_4']['player2team2'];
                    document.getElementById('c4-game1score2').innerText = data['court_4']['game1_score2'];
                    document.getElementById('c4-game2score2').innerText = data['court_4']['game2_score2'];
                    document.getElementById('c4-game3score2').innerText = data['court_4']['game3_score2'];
                    document.getElementById('c4-matchwon2').innerText = "0";
                }
            }
        });
    }
    setInterval(updateLivescore, 900);
</script>
