// (function() {

// }) ();

//event pada saat link di klik
// bacanya : jquery, tolong carikan saya element. jika ketemu, pada saat diklik, jalankan fungsi berikut ini
$('.page-scroll').on('click', function(e) {
    //untuk menuliskan sesuatu di console js di browser kalian. untuk debugging istilahnya
    // 

    //ambil isi href
    //jquery, cari element yang bersangkutan
    var tujuan = $(this).attr('href');
    //console.log(href); => untuk mengecek apakah yg diambil itu sudah benar

    //tangkap element yang bersangkutan
    var elementTujuan = $(tujuan);
    //knp ambil element? untuk mengetahui jarak sectionnya ke paling atas website kita
    //console.log(elementTujuan.offset().top);

    //console.log($('body').scrollTop());

    //pindahkan scroll top
    //$('body').scrollTop(elementTujuan.offset().top);
    $('body').animate({
        scrollTop: elementTujuan.offset().top - 50
    }, 1000, 'swing');

    e.preventDefault();
});