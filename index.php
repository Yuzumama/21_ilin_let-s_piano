<?php

// Read from text file
if (file_exists("data/my_songs.txt")) {
    $json_str = file_get_contents("data/my_songs.txt");
    $records = json_decode($json_str, true);
}
else {
    $json_str = "";
    $records = [];
}

// Read from text file
if (file_exists("data/classic_songs.txt")) {
    $json_str = file_get_contents("data/classic_songs.txt");
    $classic_records = json_decode($json_str, true);
} else {
    $json_str = "";
    $classic_records = [];
}

if (file_exists("data/kid_songs.txt")) {
    $json_str = file_get_contents("data/kid_songs.txt");
    $kid_records = json_decode($json_str, true);
} else {
    $json_str = "";
    $kid_records = [];
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Questionair </title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <div class="main_back">
        <div class="first_back_style"></div>
        <div class="second_back_style"></div>
        <div class="svg_back">
            <div class="svg_frame_style">
                <div class="svg">
                  <svg>
                    <defs>
                      <line id="line" x1="0" y1="0" x2="100%" y2="0"></line>
                      <g id="staff">
                        <use xlink:href="#line" y="0"></use>
                        <use xlink:href="#line" y="20"></use>
                        <use xlink:href="#line" y="40"></use>
                        <use xlink:href="#line" y="60"></use>
                        <use xlink:href="#line" y="80"></use>
                      </g>
                      <g class="note" id="note">
                        <circle r="10" transform="skewY(-10), scale(1,0.8)"></circle>
                        <line x1="10" y1="0" x2="10" y2="-50"></line>
                      </g>
                      <g class="note" id="note-sharp">
                        <circle r="10" transform="skewY(-10), scale(1,0.8)"></circle>
                        <line x1="10" y1="0" x2="10" y2="-50"></line>
                        <text x="-35" y="12">♯</text>
                      </g>
                      <g class="note" id="note-flat">
                        <circle r="10" transform="skewY(-10), scale(1,0.8)"></circle>
                        <line x1="10" y1="0" x2="10" y2="-50"></line>
                        <text x="-35" y="8">♭</text>
                      </g>
                      <path class="clef" id="g-clef" d="M 28.6,-10.5 C 26.5,-9.9 24.5,-8.5 22.8,-6.5 C 21,-4.4 20.1,-2.2 20.1,0.3 C 20.1,1.8 20.6,3.6 21.6,5.4 C 22.6,7.3 24.2,8.7 26.2,9.6 C 26.8,9.7 27.2,10 27.2,10.5 C 27.2,10.7 26.9,10.9 26.3,11 C 23.1,10.2 20.5,8.5 18.5,6 C 16.5,3.4 15.4,0.4 15.3,-2.9 C 15.4,-6.5 16.5,-9.9 18.6,-13 C 20.7,-16.1 23.4,-18.3 26.7,-19.6 L 24.3,-32 C 18.9,-27.5 14.5,-22.9 11.1,-18 C 7.7,-13.1 6,-7.8 5.8,-2.1 C 5.9,0.4 6.4,2.9 7.4,5.3 C 8.4,7.7 9.8,9.9 11.8,11.9 C 15.8,15.8 20.9,17.9 27.2,18.1 C 29.3,18 31.6,17.6 34,16.9 L 28.6,-10.5 z M 31.1,-10.8 L 36.6,16.1 C 42,13.9 44.7,9.2 44.7,2 C 44.3,-0.4 43.6,-2.6 42.5,-4.5 C 41.3,-6.5 39.8,-8 37.8,-9.1 C 35.8,-10.3 33.6,-10.8 31.1,-10.8 z M 23.9,-47.2 C 25.1,-47.9 26.4,-49.1 27.9,-50.9 C 29.3,-52.5 30.7,-54.5 32,-56.8 C 33.4,-59 34.5,-61.4 35.3,-63.7 C 36.1,-66 36.5,-68.2 36.5,-70.2 C 36.5,-71.1 36.4,-72 36.2,-72.8 C 36.1,-74 35.7,-75 35,-75.7 C 34.4,-76.3 33.5,-76.6 32.5,-76.6 C 30.4,-76.6 28.5,-75.4 26.8,-72.8 C 25.5,-70.5 24.4,-67.9 23.7,-64.9 C 22.9,-61.8 22.4,-58.8 22.3,-55.8 C 22.5,-52.3 23.1,-49.5 23.9,-47.2 z M 21.7,-45.2 C 20.2,-50.9 19.3,-56.6 19.1,-62.5 C 19.1,-66.3 19.5,-69.8 20.3,-73.1 C 21,-76.4 22,-79.2 23.3,-81.7 C 24.6,-84.1 26.1,-86 27.8,-87.3 C 29.3,-88.4 30.4,-89 31,-89 C 31.4,-89 31.8,-88.8 32.2,-88.5 C 32.5,-88.2 33,-87.6 33.5,-86.9 C 37.7,-81 39.8,-73.9 39.8,-65.6 C 39.8,-61.6 39.3,-57.7 38.2,-53.9 C 37.2,-50.1 35.7,-46.4 33.7,-43 C 31.7,-39.6 29.3,-36.6 26.5,-34.1 L 29.4,-20.3 C 30.9,-20.5 32,-20.6 32.6,-20.6 C 35.2,-20.6 37.6,-20.1 39.8,-18.9 C 42,-17.8 43.9,-16.3 45.4,-14.4 C 47,-12.5 48.2,-10.3 49,-7.9 C 49.8,-5.4 50.3,-2.9 50.3,-0.2 C 50.3,3.9 49.2,7.7 47,11.1 C 44.8,14.5 41.6,17 37.2,18.6 C 37.5,20.3 38,22.8 38.7,26 C 39.4,29.2 39.9,31.7 40.3,33.6 C 40.6,35.5 40.8,37.3 40.8,39.1 C 40.8,41.9 40.1,44.3 38.8,46.5 C 37.4,48.7 35.6,50.4 33.3,51.6 C 31,52.7 28.5,53.3 25.8,53.3 C 21.9,53.3 18.5,52.3 15.7,50.1 C 12.8,48 11.3,45 11.1,41.3 C 11.2,39.7 11.6,38.2 12.3,36.7 C 13,35.2 14,34 15.2,33.1 C 16.4,32.2 17.8,31.7 19.5,31.6 C 20.8,31.6 22.1,32 23.3,32.7 C 24.5,33.5 25.5,34.5 26.3,35.8 C 27,37.1 27.3,38.5 27.3,40 C 27.3,42.1 26.6,43.9 25.2,45.3 C 23.8,46.7 22,47.5 19.9,47.5 L 19.1,47.5 C 20.5,49.6 22.7,50.6 25.8,50.6 C 27.4,50.6 29,50.3 30.6,49.7 C 32.3,49 33.6,48.1 34.8,47 C 35.9,45.9 36.7,44.7 37,43.4 C 37.6,42 37.9,40 37.9,37.5 C 37.9,35.8 37.7,34.2 37.4,32.5 C 37.1,30.8 36.6,28.6 35.9,25.9 C 35.3,23.2 34.8,21.1 34.5,19.7 C 32.4,20.2 30.2,20.5 28,20.5 C 24.2,20.5 20.5,19.7 17.2,18.1 C 13.8,16.6 10.8,14.4 8.2,11.6 C 5.6,8.8 3.6,5.6 2.2,2.1 C 0.8,-1.5 0.1,-5.2 0,-9 C 0.2,-12.6 0.8,-16 2.1,-19.2 C 3.4,-22.5 5,-25.6 7,-28.5 C 9,-31.3 11,-34 13.2,-36.3 C 15.3,-38.6 18.2,-41.6 21.7,-45.2 z "></path>
                      <g class="clef" id="f-clef">
                        <circle r="5" cx="45" cy="10"></circle>
                        <circle r="5" cx="45" cy="-10"></circle>
                        <path d="M 35.94,2.6 C 36.07,11.08 32.29,19.31 26.29,25.21 C 18.83,32.68 9.05,37.43 -0.91,40.6 C -2.23,41.32 -4.23,40.37 -2.14,39.39 C 1.87,37.57 6.04,36 9.74,33.54 C 17.9,28.49 24.8,20.54 26.47,10.86 C 27.44,4.96 27.17,-1.18 25.69,-6.96 C 24.61,-11.22 21.66,-15.61 16.99,-16.24 C 12.75,-16.89 8.25,-15.42 5.22,-12.36 C 4.43,-11.55 2.88,-9.32 3.13,-6.76 C 4.94,-8.18 4.82,-8.02 6.3,-8.68 C 9.71,-10.2 14.23,-8.04 15.08,-4.28 C 15.99,-0.83 15.29,3.56 11.88,5.4 C 8.33,7.33 3.08,6.53 1.09,2.73 C -2.19,-3.14 -0.39,-11.15 4.93,-15.22 C 10.34,-19.71 18.23,-19.89 24.6,-17.58 C 31.15,-15.15 35.06,-8.36 35.69,-1.63 C 35.86,-0.23 35.94,1.19 35.94,2.6 z"></path>
                      </g>
                      <path id="rest" d="m 12.602121,-75.590999 c -5.933008,7.07242 -8.899508,12.356325 -8.899482,15.851931 -2.6e-5,3.3736 2.824238,8.433957 8.472792,15.181244 l -1.767704,2.499698 c -2.84461,-1.666465 -5.282817,-2.499698 -7.314646,-2.499698 -2.641413,0 -3.9621157,1.585128 -3.9620983,4.755557 -1.74e-5,3.251681 1.4425913,6.482984 4.3278353,9.693995 l -1.584845,2.377779 c -8.0054779,-5.934258 -12.008217,-11.21825 -12.008208,-15.851888 -9e-6,-2.357401 0.812729,-4.227124 2.4382151,-5.609081 1.5035531,-1.300707 3.4541254,-1.951061 5.8517169,-1.951061 1.5441854,0 3.250937,0.406515 5.120253,1.21937 L -8.976081,-66.20176 c 5.8110671,-5.121403 8.7166053,-9.755033 8.7166139,-13.900932 -8.6e-6,-3.292297 -1.9709019,-7.43817 -5.9126704,-12.437645 l 4.8764311,0 13.8978274,16.949338"></path>
                      <g id="double-rest">
                        <use xlink:href="#rest" x="0" y="0"></use>
                        <use xlink:href="#rest" x="0" y="120"></use>
                      </g>
                    </defs>
                    <g transform="translate(0,60)" id="grand-staff">
                      <use xlink:href="#staff" y="0"></use>
                      <use xlink:href="#g-clef" x="20" y="60"></use>
                      <g id="notes" transform="translate(120,100)">
                        <!-- use(xlink:href='#note', x=0, y=0)-->
                        <!-- use(xlink:href='#note', x=50, y=-10)-->
                        <!-- use(xlink:href='#note', x=100, y=-20)-->
                        <!-- use(xlink:href='#note', x=150, y=-30)-->
                        <!-- use(xlink:href='#note', x=200, y=-40)-->
                      </g>
                    </g>
                  </svg>
                </div>
            </div>
        </div>
        <div class="keyboard_back">
            <div id="app">
              <div class="audioplayer" v-for="s in sounddata">
                <audio v-bind:data-num="s.number">
                  <source v-bind:src="s.url"/>
                </audio>
              </div>
              <div class="center_box">
                <div class="keyboard">
                  <div class="pianokey" v-for="s in display_keys">
                    <div class="white" v-if="s.type==&quot;white&quot;" v-on:click="addnote(s.num)" v-bind:class="[(get_current_highlight(s.num))?&quot;playing&quot;:&quot;&quot;]">
                    </div>
                    <div class="black" v-if="s.type==&quot;black&quot;" v-on:click="addnote(s.num)" v-bind:class="[(get_current_highlight(s.num))?&quot;playing&quot;:&quot;&quot;]">
                    </div>
                  </div>
                </div>
                <div class="controls">
                    <div class="keyboard_back_style">
                        <button class="keyboard_button_style" v-on:click="addRest">Rest</button>
                        <button class="keyboard_button_style" v-if="playing_time&lt;=1" v-on:click="startplay">Start Play<i class="fa fa-play"></i></button>
                        <button class="keyboard_button_style" v-if="playing_time&gt;1" v-on:click="stopplay">Stop Play<i class="fa fa-pause"></i></button>
                        <button class="keyboard_button_style" v-on:click="clearOneNote">Clear One</button>
                        <button class="keyboard_button_style" v-on:click="clearNotes">Clear All</button>
                    </div>
                  <!--<h4>{{now_note_id}}</h4>-->
                </div>
              </div>
            </div>
        </div>
        <div id="buttons_back" class="buttons_back_style">
            <div id="buttons_list" class="buttons_list_style">
                <button id="my_songs" class="my_songs_btn_style"> My Songs </button>
                <button id="classic_songs" class="classic_songs_btn_style"> Classic Songs </button>
                <button id="kid_songs" class="kid_songs_btn_style"> Kid Songs </button>
            </div>
        </div>

        <!-- オレンジのパート -->
        <div id="my_song_list_back" class="empty">
            <div class="song_list_back_style">
                <div class="song_prev_style">
                    <button class="song_btn_prev_style" onclick="movePrev('my_song');">◀</button>
                </div>
                <div id="my_song_list" class="song_list_style">
                    <div class="song_btn_back_style">
                        <button id="my_song_back_btn" class="song_btn_style" style="--left: 50px" onclick="backToCategories();"> Back </button>
                    </div>
                    <!--  -->
                    <?php
                    $left = 270;
                    for($i = 0 ; $i < count($records); ++$i){
                        $record = $records[$i];
                        echo "<div class='song_btn_back_style'>" .
                                "<button id='my_song_" . ($i) . "' class='song_btn_style' style='--left: " . $left . "px' " .
                                    "onClick='vm.loadFromRecord(\"my_song\", \"" . ($i) . "\")'>" . $record["name"] . "</button>" .
                                "</div>\n";
                        $left += 220;
                    }
                    ?>
                </div>
                <div class="song_next_style">
                    <button class="song_btn_next_style" onclick="moveNext('my_song');">▶</button>
                </div>
            </div>
        </div>

        <div id="classic_song_list_back" class="empty">
            <div class="song_list_back_style">
                <div class="song_prev_style">
                    <button class="song_btn_prev_style" onclick="movePrev('classic_song');">◀</button>
                </div>
                <div id="classic_song_list" class="song_list_style">
                    <div class="song_btn_back_style">
                        <button id="classic_song_back_btn" class="song_btn_style" style="--left: 50px" onclick="backToCategories();"> Back </button>
                    </div>
                    <?php
                    $left = 270;
                    for ($i = 0; $i < count($classic_records); ++$i) {
                        $record = $classic_records[$i];
                        echo "<div class='song_btn_back_style'>" .
                            "<button id='classic_song_" . ($i) . "' class='song_btn_style' style='--left: " . $left . "px' " .
                            "onClick='vm.loadFromRecord(\"classic_song\", \"" . ($i) . "\")'>" . $record["name"] . "</button>" .
                            "</div>\n";
                        $left += 220;
                    }
                    ?>
                </div>
                <div class="song_next_style">
                    <button class="song_btn_next_style" onclick="moveNext('classic_song');">▶</button>
                </div>
            </div>
        </div>
        <div id="kid_song_list_back" class="empty">
            <div class="song_list_back_style">
                <div class="song_prev_style">
                    <button class="song_btn_prev_style" onclick="movePrev('kid_song');">◀</button>
                </div>
                <div id="kid_song_list" class="song_list_style">
                    <div class="song_btn_back_style">
                        <button id="kid_song_back_btn" class="song_btn_style" style="--left: 50px" onclick="backToCategories();"> Back </button>
                    </div>
                    <?php
                    $left = 270;
                    for ($i = 0; $i < count($kid_records); ++$i) {
                        $record = $kid_records[$i];
                        echo "<div class='song_btn_back_style'>" .
                            "<button id='kid_song_" . ($i) . "' class='song_btn_style' style='--left: " . $left . "px' " .
                            "onClick='vm.loadFromRecord(\"kid_song\", \"" . ($i) . "\")'>" . $record["name"] . "</button>" .
                            "</div>\n";
                        $left += 220;
                    }
                    ?>
                </div>
                <div class="song_next_style">
                    <button class="song_btn_next_style" onclick="moveNext('kid_song');">▶</button>
                </div>
            </div>
        </div>

        <!-- 白いパート -->
        <div class="form_back">
            <div class="input_form_style">
                <form id="song_info_form" action="write.php" method="post" onkeydown="return event.key != 'Enter';">
                    <div class="input_item_back_style">
                        <span class="input_item_name_style"> Name of Songs </span>
                        <textarea name="name" id="name" class="input_item_value_style" cols="40" rows="1"></textarea>
                    </div>
                    <div class="input_item_back_style">
                        <span class="input_item_name_style"> Author </span>
                        <textarea name="author" id="author" class="input_item_value_style" cols="40" rows="1"></textarea>
                    </div>
                    <div class="input_item_back_style">
                        <span class="input_item_name_style"> Comment </span>
                        <textarea name="memo" id="memo" class="input_item_value_style_high" cols="40" rows="5"></textarea>
                    </div>
                    <input id="input_record" type="text" name="input_record" hidden>
                    <input id="delete_record" type="text" name="delete_record" hidden>
                    <input id="category" type="text" name="category" value="my_songs" hidden>
                    <input type="checkbox" name="save_to_sample" checked /> Save to sample
                    <div class="input_item_back_style">
                        <button id="delete_record_btn" class="input_item_send_btn_style"> Delete </button>
                        <button id="save_record_btn" class="input_item_send_btn_style"> Save </button>
                    </div>
                </form>
            </div>
            <div class="prev_input_form_style">
                <div class="memory_title">MEMORY</div>
                <div id="prev_input_memo_back_style">
                    <textarea id="prev_input_memo" class="prev_input_item_value_style_high"></textarea>
                </div>
            </div>
        </div>
    </div>

</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.8/vue.js'></script>

<script>

    function updateSongButtons(song_prefix) {
        $("#" + song_prefix + "_back_btn").css({
            left: (50 - currSongIndex * 220) + "px",
        });
        for (let i = 0; ; ++i) {
            let song_id = song_prefix + "_" + i;
            if ($("#" + song_id).length) {
                let song_btn = $("#" + song_id);
                song_btn.css({
                    left: (50 + (i - currSongIndex + 1) * 220) + "px",
                });
            }
            else {
                break;
            }
        }
    }

    let currSongIndex = 0;
    function movePrev(song_prefix) {
        if (currSongIndex > 0) {
            currSongIndex--;
            updateSongButtons(song_prefix);
        }
    }

    let songListLength = [];
    <?="songListLength['my_song'] = " . count($records) . ";"?>
    <?="songListLength['classic_song'] = " . count($classic_records) . ";"?>
    <?="songListLength['kid_song'] = " . count($kid_records) . ";" ?>
    function moveNext(song_prefix) {
        if (currSongIndex < songListLength[song_prefix] - 2) {
            currSongIndex++;
            updateSongButtons(song_prefix);
        }
    }

    function backToCategories() {
        $("#my_song_list_back").attr("class", "empty");
        $("#classic_song_list_back").attr("class", "empty");
        $("#kid_song_list_back").attr("class", "empty");

        $("#buttons_back").attr("class", "buttons_back_style")
    }

    $("#my_songs").on("click", function () {
        currSongIndex = 0;

        $("#category").val("my_songs");
        $("#buttons_back").attr("class", "empty");
        $("#my_song_list_back").attr("class", "buttons_back_style")
    });

    $("#classic_songs").on("click", function () {
        currSongIndex = 0;

        $("#category").val("classic_songs");
        $("#buttons_back").attr("class", "empty");
        $("#classic_song_list_back").attr("class", "buttons_back_style")
    });

    $("#kid_songs").on("click", function () {
        currSongIndex = 0;

        $("#category").val("kid_songs");
        $("#buttons_back").attr("class", "empty");
        $("#kid_song_list_back").attr("class", "buttons_back_style")
    });

const svgNS = 'http://www.w3.org/2000/svg'
const xlinkNS = 'http://www.w3.org/1999/xlink'

//soundpack: wav file for all keys
var soundpack=[];
//key index
var soundpack_index=[1,1.5,2,2.5,3,3.5,4,4.5,5,5.5,6,6.5,7,8,8.5,9,9.5,10,11,11.5,12,12.5,13,13.5,14,15];
//wav files
for(var i=0;i<soundpack_index.length;i++){
  soundpack.push({
    number: soundpack_index[i],
    url: "https://awiclass.monoame.com/pianosound/set/"+soundpack_index[i]+".wav"
  });
}
//Little star
//1;1;5;5;6;6;5;;4;4;3;3;2;2;1;;5;5;4;4;3;3;2;;5;5;4;4;3;3;2;;1;1;5;5;6;6;5;;4;4;3;3;2;2;1
//Vue object
var vm = new Vue({
  el: "#app",
  data: {
    sounddata: soundpack,
    //這邊是音符，包括num: 播放的音跟time:在什麼時間點播放
    notes:[{num:5,time:100},{num:3,time:180},{num:3,time:260},{num:4,time:400},{num:2,time:480},{num:2,time:560},{num:1,time:700},{num:2,time:780},{num:3,time:860},{num:4,time:940},{num:5,time:1020},{num:5,time:1100},{num:5,time:1180},{num:5,time:1320},{num:3,time:1400},{num:3,time:1480},{num:4,time:1620},{num:2,time:1700},{num:2,time:1780},{num:1,time:1920},{num:3,time:2000},{num:5,time:2080},{num:5,time:2160},{num:1,time:2240}],
    sampleNotes: [],
    //settimeout回傳的計時物件
    recorder: null,
    //現在播放時間
    playing_time: 0,
    //現在錄音時間
    record_time: 0,
    //下一個要播放的音符index
    next_note_id: 0,
    //現在正在播放的音符index
    now_note_id: -1,
    //播放用的settimeout計時物件
    player: null,
    //All keys: num: wav file index/ key: ASCII/ type black or white
    display_keys: [
      {num: 1,key: 90  ,type:'white'},
      {num: 1.5,key: 83  ,type:'black'},
      {num: 2,key: 88  ,type:'white'},
      {num: 2.5,key: 68  ,type:'black'},
      {num: 3,key: 67  ,type:'white'},
      {num: 4,key: 86  ,type:'white'},
      {num: 4.5,key: 71  ,type:'black'},
      {num: 5,key: 66  ,type:'white'},
      {num: 5.5,key: 72  ,type:'black'},
      {num: 6,key: 78  ,type:'white'},
      {num: 6.5,key: 74  ,type:'black'},
      {num: 7,key: 77  ,type:'white'},
      {num: 8,key: 81  ,type:'white'},
      {num: 8.5,key: 50  ,type:'black'},
      {num: 9,key: 87  ,type:'white'},
      {num: 9.5,key: 51,type:'black'},
      {num: 10,key: 69  ,type:'white'},
      {num: 11,key: 82  ,type:'white'},
      {num: 11.5,key: 53  ,type:'black'},
      {num: 12,key: 84  ,type:'white'},
      {num: 12.5,key: 54  ,type:'black'},
      {num: 13,key: 89  ,type:'white'},
      {num: 13.5,key: 55  ,type:'black'},
      {num: 14,key: 85  ,type:'white'},
      {num: 15,key: 73  ,type:'white'}
    ],
      records: {
          my_song: [
            <?php
                foreach ($records as $record) {
                    echo $record["record"] . ",\n";
                }
            ?>
          ],
          classic_song: [
              <?php
                  foreach ($classic_records as $record) {
                      echo $record["record"] . ",\n";
                  }
              ?>
          ],
          kid_song: [
              <?php
                  foreach ($kid_records as $record) {
                      echo $record["record"] . ",\n";
                  }
              ?>
          ]
      },
      names: {
          my_song: [
            <?php
            foreach ($records as $record) {
                echo "\"" . $record["name"] . "\",\n";

            }
            ?>
          ],
          classic_song: [
              <?php
              foreach ($classic_records as $record) {
                  echo "\"" . $record["name"] . "\",\n";
              }
              ?>
          ],
          kid_song: [
              <?php
              foreach ($kid_records as $record) {
                  echo "\"" . $record["name"] . "\",\n";
              }
              ?>
          ]
      },
    authors: {
          my_song: [
            <?php
            foreach ($records as $record) {
                echo "\"" . $record["author"] . "\",\n";
            }
            ?>
          ],
          classic_song: [
              <?php
              foreach ($classic_records as $record) {
                  echo "\"" . $record["author"] . "\",\n";
              }
              ?>
          ],
          kid_song: [
              <?php
              foreach ($kid_records as $record) {
                  echo "\"" . $record["author"] . "\",\n";
              }
              ?>
          ]
      },
      memos: {
          my_song: [
            <?php
            foreach ($records as $record) {
                echo "\"" . $record["memo"] . "\",\n";
            }
            ?>
          ],
          classic_song: [
              <?php
              foreach ($classic_records as $record) {
                  echo "\"" . $record["memo"] . "\",\n";
              }
              ?>
          ],
          kid_song: [
              <?php
              foreach ($kid_records as $record) {
                  echo "\"" . $record["memo"] . "\",\n";
              }
              ?>
          ]
      },
    sheet: new Array(),
    sampleSheet: new Array(),
    }, methods: {
        //播放音符，附上 id音符號碼/volume(0-1)音量
        playnote: function (id, volume) {

            if (this.now_note_id > 0) {
                for (let n of this.sheet[this.now_note_id - 1]) {
                    n.elm.classList.remove('playing');
                }
            }

            if (this.now_note_id < this.sheet.length) {
                for (let n of this.sheet[this.now_note_id]) {
                    n.elm.classList.add('playing');
                }
            }


            if (id > 0) {
                //抓到audio中data-num=id的那個聲音DOM物件
                var audio_obj = $("audio[data-num='" + id + "']")[0];
                //調整音量/倒帶到頭/播放聲音
                audio_obj.volume = volume;
                audio_obj.currentTime = 0;
                audio_obj.play();

                if (this.now_note_id == 0) {
                    audio_obj.play();
                }
            }
        },
        playnext: function (volume) {

            //把現在正在播放的音符位置移動到下一個
            this.now_note_id += 1;

            //如果現在位置移動完超出了樂譜的長度
            if (this.now_note_id >= this.notes.length) {

                //Stop interval
                clearInterval(this.player);

                //停止播放
                setTimeout(this.stopplay(), 400);
            }
            else {

                //從notes(樂譜)裡面抓出第now_note_id筆資料
                var play_note = this.notes[this.now_note_id].num;

                //播放音符，引數有音符號碼、音量
                this.playnote(play_note, volume);
            }

            this.updateNotePosition();

        },
        //開始錄音
        start_record: function () {
            //把錄音時間重置
            this.record_time = 0;
            //定義一個新的計時器，控制錄製時間+1
            this.recorder = setInterval(function () {
                vm.record_time++;
            });
        },
        //停止錄音
        stop_record: function () {
            //關掉計時器
            clearInterval(this.recorder);
            //把錄製時間重置
            this.record_time = 0;
        },
        //開始播放
        startplay: function () {
            //現在指向的音符位置=0
            this.now_note_id = 0;
            //現在播放時間歸零
            this.playing_time = 0;
            //下一個音符=0
            this.next_note_id = 0;

            //為了要在setInterval裡面能夠存取this，用一個vobj當變數裝他
            var vobj = this;
            //播放的計時器
            this.player = setInterval(function () {
                // console.log(vobj.playing_time);
                //如果現在播放時間>下一個音符的時間的話
                //if (vobj.playing_time>=vobj.notes[vobj.next_note_id].time)
                {
                    //播放下一個音符，下一個音符的index+=1
                    vobj.playnext(1);

                    //          vobj.next_note_id++;
                }
                //播放時間+1
                vobj.playing_time += 1;
            }, 400);
        },
        //結束播放
        stopplay: function () {
            //Stop interval
            clearInterval(this.player);

            for (let c of this.sheet) {
                for (let n of c) {
                    n.elm.classList.remove('playing');
                }
            }

            //現在指向的音符位置=0
            this.now_note_id = -1;
            //現在播放時間歸零
            this.playing_time = 0;
            //下一個音符=0
            this.next_note_id = 0;

            this.updateNotePosition()

        },
        //傳入音符id，看現在是否正在播放他，有的回傳true，沒有回傳false
        get_current_highlight: function (id) {
            //如果譜沒有長度就直接跳出去
            if (this.notes.length == 0)
                return false
            //cur_id 上一個播放的音符id
            var cur_id = this.now_note_id;
            //如果cur_id<0會發生錯誤，歸零
            if (cur_id < 0 || cur_id >= this.notes.length) return false;
            //取得現在的播放音符
            var cur_text = this.notes[cur_id].num;
            // 如果播放的跟傳進來的音符一樣，回傳true，不然就會執行到最後回傳false
            if (cur_text == id) return true;
            return false
        },
        //加入音符到樂譜(如果現在正在錄製中)，然後播放
        addnote: function (id) {
            //如果正在錄製中(錄製時間>0)，就推一個音符資料(音符號碼/播放時間)進去樂譜
            //      if (this.record_time>0)
            this.notes.push({ num: id, time: this.record_time });

            this.now_note_id = this.notes.length - 1;

            //播放這個音
            this.playnote(id, 1);

            this.showRecord();
            this.updateSvg();
        },
        addRest: function () {
            //如果正在錄製中(錄製時間>0)，就推一個音符資料(音符號碼/播放時間)進去樂譜
            //      if (this.record_time>0)
            this.notes.push({ num: -1, time: this.record_time });

            this.now_note_id = this.notes.length - 1;

            this.showRecord();
            this.updateSvg();
        },
        clearNotes: function () {
            this.notes = [];

            this.showRecord();
            this.updateSvg();
        },
        clearOneNote: function () {
            this.notes.pop();
            this.showRecord();
            this.updateSvg();
        },
        showRecord: function () {
            // Transfer notes to json style
            let rec_str = JSON.stringify(this.notes);
            $("#input_record").val(rec_str);
        },
        load_sample: function () {
            var vobj = this;
            $.ajax({
                url: "http://awiclass.monoame.com/api/command.php?type=get&name=music_dodoro",
                success: function (res) {
                    vobj.notes = JSON.parse(res);
                }
            });
        },
        createNote: function (n, i, isSample) {
            const note = document.createElementNS(svgNS, 'use')
            let anchor;
            if (n[0] == -1) {
                anchor = '#rest'
            }
            else {
                anchor = '#note'
                if (n[2] > 0) anchor += '-sharp'
                else if (n[2] < 0) anchor += '-flat'
            }
            note.setAttributeNS(xlinkNS, 'href', anchor)
            note.setAttribute('x', i * 50)
            if (n[0] >= 0) {
                note.setAttribute('y', n[0] * -10 - (n[1] - 4) * 10 * 7 - 270)
            }
            let notesElem = document.getElementById("notes");
            notesElem.appendChild(note)
            n.elm = note;

            if(isSample) {
                note.setAttribute("class", "use-sample");
            }

            return note
        },
        updateOneSvg: function(targetSheet, targetNotes, isSample) {
            for (let c of targetSheet) {
                for (let n of c) {
                    n.elm.remove()
                }
            }
            let newSheet = this.parseNotes(targetNotes)
            let i = 0
            for (const c of newSheet) {
                for (const n of c) {
                    this.createNote(n, i, isSample)

                    if (!isSample) {
                        if (i == this.now_note_id) {
                            n.elm.classList.add('playing');
                        }
                    }
                }
                i++
            }
            return newSheet;
        },
        updateSvg: function () {
            this.sheet = this.updateOneSvg(this.sheet, this.notes, false);
            this.sampleSheet = this.updateOneSvg(this.sampleSheet, this.sampleNotes, true);
            this.updateNotePosition();
        },
        parseNotes: function (targetNotes) {
            let newNotes = [];
            for (let i = 0; i < targetNotes.length; i += 1) {
                const note = targetNotes[i];

                if (note.num >= 0) {
                    let n = Math.floor(note.num) % 7;
                    let octave = Math.floor(note.num / 7)

                    if (Math.floor(note.num) != note.num) {
                        if (n == 5) {
                            n = 6;
                            newNotes.push([[n, octave, -1]]);
                        }
                        else {
                            newNotes.push([[n, octave, 1]]);
                        }
                    }
                    else {
                        newNotes.push([[n, octave, 0]]);
                    }
                }
                else {
                    newNotes.push([[-1, 0, 0]]);
                }
            }

            let svg_width = 1000;
            let notes_width = newNotes.length * 50 + 120;
            if (notes_width > svg_width) {
                svg_width = notes_width;
            }

            document.querySelector('.svg>svg').style.width = svg_width + `px`;

            return newNotes;
        },
        updateNotePosition: function () {
            let currNotePos = this.now_note_id * 50;
            let xShift = Math.max(0, currNotePos - 700);

            let i = 0;
            for (let c of this.sheet) {
                for (let n of c) {
                    n.elm.setAttribute('x', i * 50 - xShift);
                }
                ++i;
            }
        }, 
        loadFromRecord: function (song_prefix, index) {

            this.clearNotes();
            let curr_records = this.records[song_prefix];
            let curr_names = this.names[song_prefix];
            let curr_authors = this.authors[song_prefix];
            let curr_memos = this.memos[song_prefix];

            this.notes = [];
            this.sampleNotes = [];

            if(song_prefix == "my_song") {
                this.notes = curr_records[index];
            }
            else {
                this.sampleNotes = curr_records[index];
            }

            this.showRecord();
            this.updateSvg();

            $("#name").val(curr_names[index]);
            $("#author").val(curr_authors[index]);
            $("#memo").val(curr_memos[index]);
        }
    }
})

<?php
if (count($records) > 0) {
    echo "vm.loadFromRecord('my_song', " . (count($records) - 1) . ");";
}
?>

vm.showRecord();
vm.updateSvg();

    $("#save_record_btn").on("click", function () {
        $("#delete_record").val("0");
        $("#song_info_form").submit();
    });

    $("#delete_record_btn").on("click", function () {
        $("#delete_record").val("1");
        $("#song_info_form").submit();
    });

</script>

</html>