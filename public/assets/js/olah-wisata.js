$(function () {

    $('#editwisata').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var modal = $(this)
        var id = button.data('wisataid')
        var url = "../wisata/" + id
        $.get(url, function (data) {
            modal.find('#wisataid').val(data['id'])
            modal.find('#editwisatalabel').text('Edit Data Wisata ' + data['name'])
            modal.find('#name').val(data['name'])
            modal.find('#address').val(data['address'])
            modal.find('#contact').val(data['contact'])
            modal.find('#desc').val(data['desc'])
            modal.find('#biaya').val(data['biaya'])
            modal.find('#jarak').val(data['jarak'])
        })
    })

    $('#deletewisata').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var modal = $(this)
        var id = button.data('wisataid')
        var name = button.data('wisataname');
        modal.find('#wisataid').val(id)
        modal.find('#deletewisatalabel').text('Konfirmasi Hapus Objek Wisata ' + name)
    })

})