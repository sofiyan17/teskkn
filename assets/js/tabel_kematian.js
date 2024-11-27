window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const tabel_kematian = document.getElementById('tabel_kematian');
    if (tabel_kematian) {
        new simpleDatatables.DataTable(tabel_kematian);
    }
});
