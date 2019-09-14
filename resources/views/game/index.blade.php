<!DOCTYPE html>
<html>
<head>
    <title>MemoryGame</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">

        $(function () {
            var freeze = false,
                    firstShuffle = true,
                    curPlayer = 0,
                    maxPlayers = 1,
                    shuffle,
                    cardClick,
                    changeGameType,
                    showScore,
                    setupPlayers,
                    players,
                    tCards,
                    determineWinner;
            showScore = function () {
                var i;
                for (i = 0; i < players.length; i += 1) {
                    players[i].el.innerHTML = '<b>Player ' + (i + 1) + '</b>: matches: ' + players[i].matches + '; turns: ' + players[i].turns;
                    if (curPlayer === i) {
                        $(players[i].el).addClass('active');
                    } else {
                        $(players[i].el).removeClass('active');
                    }
                }
            };
            determineWinner = function () {
                var winner = 0, isDraw, i;
                if (players.length === 1) {
                    alert('You Win!');
                } else {
                    isDraw = true;
                    for (i = 1; i < players.length; i += 1) {
                        if (players[i].matches !== players[winner].matches) { isDraw = false; }
                        if (players[i].matches > players[winner].matches) {
                            winner = i;
                        }
                    }
                    if (isDraw) {
                        alert('Alas, a draw!');
                    } else {
                        alert('Player ' + (winner + 1) + ' wins!');
                    }
                }
            };
            cardClick = function () {
                var t;
                if (!freeze) {
                    if (!$(this).hasClass('matched') && $(this).hasClass('down')) {
                        $(this).removeClass('down');
                        t = $('.card:not(.down, .matched)');
                        if (t.length >= 2) {
                            players[curPlayer].turns += 1;
                            if (t[0].getAttribute('data-face') === t[1].getAttribute('data-face')) {
                                $(t).addClass('matched');
                                players[curPlayer].matches += 1;
                                if ($('.matched').length === $('.card').length) {
                                    showScore();
                                    determineWinner();
                                }
                            } else {
                                freeze = true;
                                setTimeout(function () {
                                    $(t).addClass('down');
                                    freeze = false;
                                    curPlayer += 1;
                                    if (curPlayer >= players.length) { curPlayer = 0; }
                                    showScore();
                                }, 1000);
                            }
                            showScore();
                        }
                    }
                }
            };
            shuffle = function () {
                var allCards, i;
                allCards = $('.card');
                $(allCards).addClass('down').removeClass('matched');
                tCards = [];
                while (allCards.length > 0) {
                    i = parseInt(Math.random()*allCards.length);
                    tCards.push(allCards[i]);
                    allCards.splice(i,1);
                }
                if (firstShuffle) {
                    $('#Playfield').empty();
                    $('#Playfield').append(tCards);
                    $('.card').click(cardClick);
                    firstShuffle = false;
                } else {
                    freeze = true;
                    setTimeout(function () {
                        $('#Playfield').empty();
                        $('#Playfield').append(tCards);
                        $('.card').click(cardClick);
                        freeze = false;
                    }, 700);
                }
            };
            setupPlayers = function () {
                var i;
                players = [];
                $('#PlayScore').empty();
                for (i = 0; i < maxPlayers; i += 1) {
                    players.push({turns: 0, matches: 0, el: document.createElement('li')});
                    $('#PlayScore').append(players[i].el);
                }
            };
            changeGameType = function () {
                $(this).text('Play ' + maxPlayers + '-player game');
                maxPlayers = maxPlayers === 1 ? 2 : 1;
                setupPlayers();
                showScore();
                shuffle();
            };
            $('#shuffleButton').click(shuffle);
            $('#playerButton').click(changeGameType);
            setupPlayers();
            showScore();
            shuffle();
        });
    </script>
    <style type="text/css">
        #Playfield {
            width: 500px;
            height: 300px;
            margin: 0 auto;
        }
        #PlayControls, #PlayScore {
            width: 500px;
            margin: 0 auto;
        }
        .card {
            background-color: #ffffff;
            border: 1px solid black;
            border-radius: 0px;
            float: left;
            width: 50px;
            height: 50px;
            padding: 5px;
            margin: 5px;
        }

        .card.one {
            border-radius: 0px;

        }
        .card.two {
            border-radius: 10px;
        }
        .card.three {
            border-radius: 30px;
        }
        .card.four {
            border-top-left-radius: 60px;
        }
        .card.five {
            border-top-right-radius: 60px;
        }
        .card.six {
            border-bottom-right-radius: 60px;
        }
        .card.seven {
            border-bottom-left-radius: 60px;
        }
        .card.eight {
            border-top-left-radius: 60px;
            border-bottom-right-radius: 60px;
        }
        .card.nine {
            border-top-right-radius: 60px;
            border-bottom-left-radius: 60px;
        }
        .card.ten {
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }
        .card.eleven {
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
        }
        .card.twelve {
            border-top-right-radius: 30px;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
        }
        .card.down {
            background-color: #054915;
            border-radius: 0px;
        }
        .card.matched {
            background-color: #130899;
        }
        li.active {
            background-color: #b93aff;
        }
    </style>
</head>
<body>
@include('app')
@include('game.cards')
<div id="PlayControls">
    <button id="shuffleButton">Shuffle/reset</button>
    <button id="playerButton">Play 2-player game</button>
</div>
<div id="PlayScore"></div>
</body>
</html>