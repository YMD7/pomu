$(document).ready(function(){
// -- ここから -------------------------

// ---------------------------
// 出演情報
// ---------------------------
// 初期値でパラグラフを隠す
var eventInfoDescP = $('#info .event-detail p:not(#info .event-detail p.title, #info .event-detail p:nth-child(2))');
eventInfoDescP.css('display', 'none');

// 隠しているパラグラフがあったら、カーソルをポインターにして、ホバーアクションをつける
eventInfoDescP.parent().parent().css('cursor', 'pointer').addClass('hover-action');

// パラグラフのトグルアクション
$('#info > ol > li').click(function() {
  $(this).find('.event-detail p:not(#info .event-detail p.title, #info .event-detail p:nth-child(2))').slideToggle();
  if( $(this).hasClass('hover-action') ) $(this).children('.event-more').toggleClass('up-arrow');
});


// ---------------------------
// ご依頼
// ---------------------------
//
// サムネのボタン位置を下に揃える
//

// サムネのコンテンツを格納する div を取得して繰り返し
var thumbsContainers = $('#order .thumbnail .thumbs-container').each(function(i) {
  var height = $(this).height();
  var val    = 448 - height;
  var btn    = $(this).next().css('top', val);
});;

var thumbsContainers = $('#order .and-more .thumbnail .thumbs-container').each(function(i) {
  var height = $(this).height();
  var val    = 378 - height;
  var btn    = $(this).next().css('top', val);
});;


// ---------------------------
// Slick | http://kenwheeler.github.io/slick/
// ---------------------------

// ファーストビュー
$('#cover .carousel').slick({
  arrows: false,
  autoplay: true,
  autoplaySpeed: 4000,
  infinite: true,
  speed: 1000,
  fade: true,
  cssEase: 'linear'
});

// 作品ギャラリー
$('#works .products .carousel').slick({
  centerMode: false,
  slidesToShow: 4,
  variableWidth: false,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1000,
      settings: {
        centerMode: false,
        slidesToShow: 3,
        variableWidth: false,
        slidesToScroll: 3,
      }
    },
    {
      breakpoint: 786,
      settings: {
        centerMode: false,
        slidesToShow: 2,
        variableWidth: false,
        slidesToScroll: 2,
      }
    },
    {
      breakpoint: 618,
      settings: {
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1,
        adaptiveHeight: true
      }
    }
  ]
});

// イベントの様子
$('.event-offer .gallery .carousel').slick({
  centerMode: true,
  centerPadding: '0px',
  slidesToShow: 4,
  variableWidth: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        centerMode: true,
        centerPadding: '10px',
        slidesToShow: 3,
        variableWidth: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1,
        adaptiveHeight: true
      }
    }
  ]
});

// その他なんでもご相談ください！
$('.ask .carousel').slick({
  centerMode: true,
  centerPadding: '0px',
  slidesToShow: 4,
  variableWidth: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        centerMode: true,
        centerPadding: '10px',
        slidesToShow: 3,
        variableWidth: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1,
        adaptiveHeight: true
      }
    }
  ]
});

// カルーセルの画像を表示する
$('.carousel div').removeClass('hidden')



// fancybox
$(".fancybox").fancybox({
  openEffect  : 'none',
  closeEffect : 'none',
  maxWidth: 450,
  helpers: {
    overlay: {
      locked: false
    },
    title: {
      type: 'outside'
    }
  }
});

$(".various").fancybox({
  maxWidth  : 800,
  maxHeight : 600,
  fitToView : false,
  width   : '70%',
  height    : '70%',
  autoSize  : false,
  closeClick  : false,
  openEffect  : 'none',
  closeEffect : 'none',
  helpers: {
    overlay: {
      locked: false
    },
    title: {
      type: 'outside'
    }
  }
});


// ---------------------------
// メディア掲載
// ---------------------------
// 1. 本文中のキーワードを探して、アイコンを変更する
var childrenInMediaRowDiv = $('#media div.row').children();
jQuery.each(childrenInMediaRowDiv, function() {
  // アイコンの変更
  var bodyP = $('.thumbnail > p:nth-child(2)', this);
  var bodyText = bodyP.text();
  var keywords = {
    tv:        ["テレビ", "てれび", "TV", "tv"],
    radio:     ["ラジオ", "らじお", "Radio", "radio"],
    newspaper: ["新聞", "しんぶん", "ニュース", "News", "NEWS", "news"]
  };
  for ( var key in keywords) {
    var keysInCat = keywords[key];
    for (var i = 0; i < keysInCat.length; i++) {
      var keyword = keysInCat[i];
      var reg = new RegExp(keyword);
      if (reg.test(bodyText)) {
        var headerE = $('.thumbnail > .header', this);
        var bgImage = headerE.css('background-image');
        headerE.css('background-image', bgImage.replace('icon_website', 'icon_' + key));
        break;
      }
    }
  }
});


// お問い合わせの選択肢
/*
0 --- ご用件をお選びください ---
1 サンドアートの制作依頼
2 イベントなどへの出演・出張について
3 その他のご相談
4 ポムへのメッセージ
5 このサイトについて
*/
var list = ["--- ご用件をお選びください ---", "サンドアートの制作依頼", "イベントなどへの出演・出張について", "その他のご相談", "ポムへのメッセージ", "このサイトについて"];
$('.btn.to_contact').click(function() {
  var selectVal = $(this).attr('select');
  $('#type').val(list[selectVal]);
});


// お問い合わせフォームのショートコードで発生する不要<br>を除去
var formWrapper = $('#form_wrapper');
formWrapper.children('br').remove();



// -- ここまで -------------------------
});
