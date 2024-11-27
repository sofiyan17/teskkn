window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const tabel_pindah = document.getElementById('tabel_pindah');
    if (tabel_pindah) {
        new simpleDatatables.DataTable(tabel_pindah);
    }
});
