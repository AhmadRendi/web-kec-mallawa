$( function () {

    $('.tampilModalUpdate').on('click', function () {
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/web-ic/public/Pengarsipan/getDocument',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#editNomorSurat').val(data.nomor_surat);
                $('#editTanggal').val(data.tanggal);
                $('#editJenis').val(data.jenis);
                $('#editKategori').val(data.kategori);
                $('#editPengirim').val(data.pengirim);
                $('#editPenerima').val(data.penerima);
                $('#editDokumen').val(data.dokumen);
            }
        });
    });

    $('#editForm').on('submit', function(e) {

        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response);
                $('#editModal').modal('hide');
            },
            error: function(xhr, status, error) {
                console.error('Terjadi kesalahan:', error);
            }
        });
    });

    let idDocumentForDownload;

    $('[data-bs-target="#downloadModal"]').on('click', function() {
        idDocumentForDownload = $(this).data('id');
    });

    $('#confirmDownload').on('click', function() {
        $.ajax({
            url: 'http://localhost/web-ic/public/Pengarsipan/download',
            data: {id : idDocumentForDownload},
            method: 'post',
            // dataType: 'json',
            success: function (data) {
                console.log(data);
            }
        });
        $('#downloadModal').modal('hide');
    });

    let idDocumentForDelete;

    $('[data-bs-target="#deleteModal"]').on('click', function() {
        idDocumentForDelete = $(this).data('id');
    });

    $('#deleteModal').on('click', function() {
        $.ajax({
            url: 'http://localhost/web-ic/public/Pengarsipan/delete',
            data: {id : idDocumentForDelete},
            method: 'post',
            // dataType: 'json',
            success: function (data) {
                console.log(data);
            }
        });
        $('#deleteModal').modal('hide');
    });


    $('#login-form').on('submit', function(event) {
            event.preventDefault();
            var data = $(this).serialize();

            var params = new URLSearchParams(data);

            var username = params.get('username');
            var password = params.get('password');

            var dataToSend = {
                username: username,
                password: password
            };

        $.ajax({
            url: "http://localhost/web-ic/public/Login/session",
            data: {data : dataToSend},
            method: 'post',
            // dataType: "json",
            success: function(response) {
                console.log(response);
                if(response == "Success"){
                    console.log(response);
                    window.location.href = "http://localhost/web-ic/public/Dashboard";
                }else {
                    alert("Username atau password salah");
                }
            },
        });

        // Login User
        $('#form_registration').on('submit', function(e) {
            e.preventDefault();
            let data = $(this).serialize();
            
            $('#errorRegistration').modal('hide');
        
            $.ajax({
                url: 'http://localhost/web-ic/public/Registration/addUser',
                data: data,
                method: 'post',
                dataType: 'json',
                success: function(data, textStatus, jqXHR) {
                    console.log(data);
                    if (data.status === 'success') {
                        $('#successRegistration').modal('show');
                    } else {
                        $('#errorRegistration .modal-body').text(data.message);
                        $('#errorRegistration').modal('show');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#errorRegistration .modal-body').text('Terjadi kesalahan: ' + errorThrown);
                    $('#errorRegistration').modal('show');
                }
            });
        });
    });

});