window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const tabel_kelahiran = document.getElementById('tabel_kelahiran');
    if (tabel_kelahiran) {
        new simpleDatatables.DataTable(tabel_kelahiran);
    }
});
