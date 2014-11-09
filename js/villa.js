/*!
 * Villa Framework v2.0.0 (http://getvilla.org/)
 * Copyright 2013-2015 Noibe Developers
 * Licensed under MIT (/LICENSE)
*/

var colors;
colors = [["cyan","#1abc9c"],["dark-cyan","#16a085"],["green","#2ecc71"],["dark-green","#27ae60"],["blue","#3498db"],["dark-blue","#2980b9"],["purple","#9b59b6"],["dark-purple","#8e44ad"],["dark","#34495e"],["dark-dark","#2c3e50"],["yellow","#f1c40f"],["dark-yellow","#f39c12"],["orange","#e67e22"],["dark-orange","#d35400"],["red","#ea6153"],["dark-red","#c0392b"],["clear","#ecf0f1"],["dark-clear","#bdc3c7"],["gray","#95a5a6"],["dark-gray","#7f8c8d"],["white","#ffffff"],["black","#000000"],["chestnut-rose","#d24d57"],["pomegranate","#f22613"],["pure-red","#ff0000"],["thunderbird","#d91e18"],["old-brick","#96281b"],["flamingo","#ef4836"],["valencia","#d64541"],["tall-poppy","#c0392b"],["monza","#cf000f"],["cinnabar","#e74c3c"],["razzmatazz","#db0a5b"],["derby","#ffecdb"],["sunset-orange","#f64747"],["wax-flower","#f1a9a0"],["cabaret","#d2527f"],["new-york-pink","#e08283"],["radical-red","#f62459"],["sunglo","#e26a6a"],["snuff","#dcc6e0"],["rebeccapurple","#663399"],["honey-flower","#674172"],["wistful","#aea8d3"],["plum","#913d88"],["seance","#9a12b3"],["medium-purple","#bf55ec"],["light-wisteria","#be90d4"],["studio","#8e44ad"],["wisteria","#9b59b6"],["san-marino","#446cb3"],["alice-blue","#e4f1fe"],["royal-blue","#4183d7"],["picton-blue","#59abe3"],["spray","#81cfe0"],["shakespeare","#52b3d9"],["humming-bird","#c5eff7"],["picton-blue","#22a7f0"],["curious-blue","#3498db"],["madison","#2c3e50"],["dodger-blue","#19b5fe"],["ming","#336e7b"],["ebony-clay","#22313f"],["malibu","#6bb9f0"],["curious-blue","#1e8bc3"],["chambray","#3a539b"],["pickled-bluewood","#34495e"],["hoki","#67809f"],["jelly-bean","#2574a9"],["jacksons-purple","#1f3a93"],["jordy-blue","#89c4f4"],["steel-blue","#4b77be"],["fountain-blue","#5c97bf"],["medium-turquoise","#4ecdc4"],["aqua-island","#a2ded0"],["gossip","#87d37c"],["dark-sea-green","#90c695"],["eucalyptus","#26a65b"],["caribbean-green","#03c9a9"],["silver-tree","#68c3a3"],["downy","#65c6bb"],["mountain-meadow","#1bbc9b"],["light-sea-green","#1ba39c"],["medium-aquamarine","#66cc99"],["turquoise","#36d7b7"],["madang","#c8f7c5"],["riptide","#86e2d5"],["shamrock","#2ecc71"],["mountain-meadow","#16a085"],["emerald","#3fc380"],["green-haze","#019875"],["free-speech-aquamarine","#03a678"],["ocean-green","#4daf7c"],["niagara","#2abb9b"],["jade","#00b16a"],["salem","#1e824c"],["observatory","#049372"],["jungle-green","#26c281"],["cream-can","#f5d76e"],["ripe-lemon","#f7ca18"],["saffron","#f4d03f"],["cape-honey","#fde3a7"],["california","#f89406"],["fire-bush","#eb9532"],["tahiti-gold","#e87e04"],["casablanca","#f4b350"],["crusta","#f2784b"],["jaffa","#eb974e"],["lightning-yellow","#f5ab35"],["burnt-orange","#d35400"],["buttercup","#f39c12"],["ecstasy","#f9690e"],["sandstorm","#f9bf3b"],["jaffa","#f27935"],["zest","#e67e22"],["white-smoke","#ececec"],["lynch","#6c7a89"],["pumice","#d2d7d3"],["gallery","#eeeeee"],["silver-sand","#bdc3c7"],["porcelain","#ecf0f1"],["cascade","#95a5a6"],["iron","#dadfe1"],["edward","#abb7b7"],["cararra","#f2f1ef"],["silver","#bfbfbf"],["g111","#111111"],["g222","#222222"],["g333","#333333"],["g444","#444444"],["g555","#555555"],["g666","#666666"],["g777","#777777"],["g888","#888888"],["g999","#999999"],["gaaa","#aaaaaa"],["gbbb","#bbbbbb"],["gccc","#cccccc"],["gddd","#dddddd"],["geee","#eeeeee"]];

function addStylesheetRules (rules) {
    var styleEl = document.createElement('style'),
        styleSheet;

    styleEl.appendChild(document.createTextNode(''));

    document.head.appendChild(styleEl);

    styleSheet = styleEl.sheet;

    for (var i = 0, rl = rules.length; i < rl; i++) {
        var j = 1, rule = rules[i], selector = rules[i][0], propStr = '';

        if (Object.prototype.toString.call(rule[1][0]) === '[object Array]') {
            rule = rule[1];
            j = 0;
        }

        for (var pl = rule.length; j < pl; j++) {
            var prop = rule[j];
            propStr += prop[0] + ':' + prop[1] + (prop[2] ? ' !important' : '') + ';\n';
        }

        styleSheet.insertRule(selector + '{' + propStr + '}', styleSheet.cssRules.length);
    }
}

function colorFactory() {
    var styleSheetString = [];

    for(var i = 0; i < colors.length; i++) {
        styleSheetString.push(
            ['.' + colors[i][0], ['background-color', colors[i][1]]],
            ['.font-' + colors[i][0], ['color', colors[i][1]]],
            ['.border-' + colors[i][0], ['border-color', colors[i][1]]],
            ['.a-' + colors[i][0] + ':active', ['background-color', colors[i][1]]],
            ['.afont-' + colors[i][0] + ':active', ['color', colors[i][1]]],
            ['.aborder-' + colors[i][0] + ':active', ['border-color', colors[i][1]]],
            ['.f-' + colors[i][0] + ':focus', ['background-color', colors[i][1]]],
            ['.ffont-' + colors[i][0] + ':focus', ['color', colors[i][1]]],
            ['.fborder-' + colors[i][0] + ':focus', ['border-color', colors[i][1]]],
            ['.h-' + colors[i][0] + ':hover', ['background-color', colors[i][1]]],
            ['.hfont-' + colors[i][0] + ':hover', ['color', colors[i][1]]],
            ['.hborder-' + colors[i][0] + ':hover', ['border-color', colors[i][1]]]
        );
    }

    addStylesheetRules(styleSheetString);
}

colorFactory();