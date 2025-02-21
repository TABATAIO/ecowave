$(document).ready(function () {
    $(".slick").slick({
      autoplay: true, // 自動再生を実行
      autoplaySpeed: 5000, //スライドが切り替わるまでの時間（ミリ秒）
      fade: true, //「スライド」ではなく「フェード」で切り替え
      speed: 1500, //フェードにかかる時間（ミリ秒）
      arrows: false, // 左右の「矢印」を非表示
      swipe: false, // swipeを無効
      pauseOnHover: false, // マウスオーバー時に停止を「無効」Ï
    });
  });