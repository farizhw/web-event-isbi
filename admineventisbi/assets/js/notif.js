$(document).ready(function () {
    selesai();
});


function selesai() {
    setTimeout(function () {
        jumlah();
        selesai();
        pesan();
    }, 200);
}


function jumlah() {
    $.getJSON("./superadmin/modul_proposal/proses_notif.php", function (datas) {
        $("#notif").html(datas.jumlah);
    });
}



function pesan() {
    $.getJSON("./superadmin/modul_proposal/proses_notif_pesan.php", function (data) {
        $("#pesan").empty();
        var no = 1;
        $.each(data.result, function () {
            $("#pesan").append(`
            <div class="nofity-list">
                <a id="pesan" class="notify-item" href="./superadmin/proposal.php">
                    <div class="notify-thumb"><i class="fa fa-send btn-info"></i></div>
                    <div class="notify-text">
                        <p>Pengajuan proposal dari: <b>` + this['nama'] + ` </b></p>
                        <span>` + this['tgl_up'] + `</span>
                    </div>
                </a>
            </div>
            `);
        });
    });
}