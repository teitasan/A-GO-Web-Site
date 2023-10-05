$('.slider').slick({
    arrows: false,
    adaptiveHeight: true,
    centerMode: true,
    centerPadding: "10%",
    focusOnSelect: true,
    asNavFor: ".thumbnail",
});
$(".thumbnail").slick({
    slidesToShow: 5, // サムネイルの表示数
    asNavFor: ".slider", // メイン画像と同期
    focusOnSelect: true, // サムネイルクリックを有効化
  });