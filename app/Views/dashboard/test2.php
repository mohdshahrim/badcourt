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

    .bg1 { background-color: oklch(98.5% 0.002 247.839);/*#393E46*/}
    .bg2 { background-color: none;}
    .bg3 { background-color: #8ac926; }
</style>
<style>
    /* styling for ongoing matches */
    /* use om for short */
    /* #222831, #393E46, #00ADB5; #EEEEEE*/
</style>

<div class="container">
    <div class="slide bg1 active" style="padding:2em;">
        <h2 style="font-weight:bolder;">ONGOING MATCHES</h2>
        <table class="w3-table w3-border w3-bor w3-white">
            <colgroup>
                <col style="width:5%;"></col>
                <col></col>
            </colgroup>
            <tr>
                <td style="vertical-align:middle;">
                    <p class="w3-tiny" style="margin-bottom:0; padding-bottom:0;">court</p>
                    <p class="w3-xxlarge" style="font-weight:bolder; margin-top:0; padding-top:0;">1</p>
                </td>
                <td>
                    <table class="w3-table">
                        <colgroup>
                            <col style="width:5%;">
                            <col style="width:15%;">
                            <col>

                            <col style="width:8%;">
                            <col style="width:8%;">
                            <col style="width:8%;">
                            <col style="width:8%;">
                        </colgroup>
                        <tr>
                            <td class="w3-border-bottom" style="vertical-align:middle;"><img id="c1-logo1" width="40" src=""/></td>
                            <td id="c1-team1" class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td class="w3-border-bottom">
                                <table>
                                    <colgroup>
                                        <col>
                                    </colgroup>
                                    <tr>
                                        <td id="c1-player1team1" class="w3-small w3-text-gray"></td>
                                    </tr>
                                    <tr>
                                        <td id="c1-player2team1" class="w3-small w3-text-gray"></td>
                                    </tr>
                                </table>
                            </td>
                            <td id="c1-game1score1" class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td id="c1-game2score1" class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td id="c1-game3score1" class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td id="c1-matchwon1" class="w3-border-bottom" style="vertical-align:middle;">0</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;"><img id="c1-logo2" width="40" src=""/></td>
                            <td id="c1-team2" style="vertical-align:middle;"></td>
                            <td>
                                <table>
                                    <colgroup>
                                        <col class="w3-small">
                                    </colgroup>
                                    <tr>
                                        <td id="c1-player1team2" class="w3-small w3-text-gray"></td>
                                    </tr>
                                    <tr>
                                        <td id="c1-player2team2" class="w3-small w3-text-gray"></td>
                                    </tr>
                                </table>
                            </td>
                            <td id="c1-game1score2" style="vertical-align:middle;"></td>
                            <td id="c1-game2score2" style="vertical-align:middle;"></td>
                            <td id="c1-game3score2" style="vertical-align:middle;"></td>
                            <td id="c1-matchwon2" style="vertical-align:middle;">0</td>
                        </tr>
                    </table>
                <td>
            </tr>
        </table>

        <br>
        <br>
        <br>

        <table class="w3-table w3-border w3-bor">
            <colgroup>
                <col style="width:5%;"></col>
                <col></col>
            </colgroup>
            <tr>
                <td style="vertical-align:middle;">
                    <p class="w3-tiny" style="margin-bottom:0; padding-bottom:0;">court</p>
                    <p class="w3-xxlarge" style="font-weight:bolder; margin-top:0; padding-top:0;">2</p>
                </td>
                <td>
                    <table class="w3-table">
                        <colgroup>
                            <col style="width:5%;">
                            <col style="width:15%;">
                            <col>

                            <col style="width:8%;">
                            <col style="width:8%;">
                            <col style="width:8%;">
                            <col style="width:8%;">
                        </colgroup>
                        <tr>
                            <td class="w3-border-bottom" style="vertical-align:middle;"><img id="c2-logo1" width="40" src=""/></td>
                            <td id="c2-team1" class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td class="w3-border-bottom">
                                <table>
                                    <colgroup>
                                        <col>
                                    </colgroup>
                                    <tr>
                                        <td id="c2-player1team1" class="w3-small w3-text-gray"></td>
                                    </tr>
                                    <tr>
                                        <td id="c2-player2team1" class="w3-small w3-text-gray"></td>
                                    </tr>
                                </table>
                            </td>
                            <td id="c2-game1score1" class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td id="c2-game2score1" class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td id="c2-game3score1" class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td id="c2-matchwon1" class="w3-border-bottom" style="vertical-align:middle;">0</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;"><img id="c2-logo2" width="40" src=""/></td>
                            <td id="c2-team2" style="vertical-align:middle;"></td>
                            <td>
                                <table>
                                    <colgroup>
                                        <col class="w3-small">
                                    </colgroup>
                                    <tr>
                                        <td id="c2-player1team2" class="w3-small w3-text-gray"></td>
                                    </tr>
                                    <tr>
                                        <td id="c2-player2team2" class="w3-small w3-text-gray"></td>
                                    </tr>
                                </table>
                            </td>
                            <td id="c2-game1score2" style="vertical-align:middle;"></td>
                            <td id="c2-game2score2" style="vertical-align:middle;"></td>
                            <td id="c2-game3score2" style="vertical-align:middle;"></td>
                            <td id="c2-matchwon2" style="vertical-align:middle;">0</td>
                        </tr>
                    </table>
                <td>
            </tr>
        </table>
    </div>
    <div class="slide bg2" style="padding:4em;">
        <h2 style="font-weight:bolder;">ONGOING MATCHES</h2>
        <table class="w3-table w3-border w3-bor">
            <colgroup>
                <col style="width:5%;"></col>
                <col></col>
            </colgroup>
            <tr>
                <td style="vertical-align:middle;">
                    <p class="w3-tiny" style="margin-bottom:0; padding-bottom:0;">court</p>
                    <p class="w3-xxlarge" style="font-weight:bolder; margin-top:0; padding-top:0;">3</p>
                </td>
                <td>
                    <table class="w3-table">
                        <colgroup>
                            <col style="width:5%;">
                            <col style="width:15%;">
                            <col>

                            <col style="width:8%;">
                            <col style="width:8%;">
                            <col style="width:8%;">
                            <col style="width:8%;">
                        </colgroup>
                        <tr>
                            <td class="w3-border-bottom" style="vertical-align:middle;"><img width="40" src=""/></td>
                            <td class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td class="w3-border-bottom">
                                <table>
                                    <colgroup>
                                        <col>
                                    </colgroup>
                                    <tr>
                                        <td class="w3-small w3-text-gray"></td>
                                    </tr>
                                    <tr>
                                        <td class="w3-small w3-text-gray"></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td class="w3-border-bottom" style="vertical-align:middle;">0</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;"><img width="40" src=""/></td>
                            <td style="vertical-align:middle;"></td>
                            <td>
                                <table>
                                    <colgroup>
                                        <col class="w3-small">
                                    </colgroup>
                                    <tr>
                                        <td class="w3-small w3-text-gray"></td>
                                    </tr>
                                    <tr>
                                        <td class="w3-small w3-text-gray"></td>
                                    </tr>
                                </table>
                            </td>
                            <td style="vertical-align:middle;"></td>
                            <td style="vertical-align:middle;"></td>
                            <td style="vertical-align:middle;"></td>
                            <td style="vertical-align:middle;">0</td>
                        </tr>
                    </table>
                <td>
            </tr>
        </table>

        <br>
        <br>
        <br>

        <table class="w3-table w3-border w3-bor">
            <colgroup>
                <col style="width:5%;"></col>
                <col></col>
            </colgroup>
            <tr>
                <td style="vertical-align:middle;">
                    <p class="w3-tiny" style="margin-bottom:0; padding-bottom:0;">court</p>
                    <p class="w3-xxlarge" style="font-weight:bolder; margin-top:0; padding-top:0;">4</p>
                </td>
                <td>
                    <table class="w3-table">
                        <colgroup>
                            <col style="width:5%;">
                            <col style="width:15%;">
                            <col>

                            <col style="width:8%;">
                            <col style="width:8%;">
                            <col style="width:8%;">
                            <col style="width:8%;">
                        </colgroup>
                        <tr>
                            <td class="w3-border-bottom" style="vertical-align:middle;"><img width="40" src=""/></td>
                            <td class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td class="w3-border-bottom">
                                <table>
                                    <colgroup>
                                        <col>
                                    </colgroup>
                                    <tr>
                                        <td class="w3-small w3-text-gray"></td>
                                    </tr>
                                    <tr>
                                        <td class="w3-small w3-text-gray"></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td class="w3-border-bottom" style="vertical-align:middle;"></td>
                            <td class="w3-border-bottom" style="vertical-align:middle;">0</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;"><img width="40" src=""/></td>
                            <td style="vertical-align:middle;"></td>
                            <td>
                                <table>
                                    <colgroup>
                                        <col class="w3-small">
                                    </colgroup>
                                    <tr>
                                        <td class="w3-small w3-text-gray"></td>
                                    </tr>
                                    <tr>
                                        <td class="w3-small w3-text-gray"></td>
                                    </tr>
                                </table>
                            </td>
                            <td style="vertical-align:middle;"></td>
                            <td style="vertical-align:middle;"></td>
                            <td style="vertical-align:middle;"></td>
                            <td style="vertical-align:middle;">0</td>
                        </tr>
                    </table>
                <td>
            </tr>
        </table>
    </div>
    <div class="slide bg3">
        slide3
    </div>
</div>

<script>
    const slides = document.querySelectorAll('.slide');
    let current = 0;

    function showNextSlide() {
        slides[current].classList.remove('active');
        current = (current + 1) % slides.length;
        slides[current].classList.add('active');

        // If it's the 4th slide (index 3), wait 3s, else 2s
        const delay = (current === 3) ? 3000 : 2000;
        setTimeout(showNextSlide, delay);
    }

    // Start rotation
    //setTimeout(showNextSlide, 5000);
</script>

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

                // check if court_1 exist
                if (typeof data['court_2'] !== 'undefined') {
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

            }
        });
    }
    setInterval(updateLivescore, 1000);
</script>
