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

    // Login User
        $('#login_form').on('submit', function(e) {

            e.preventDefault();
            let data = $(this).serialize();

            var params = new URLSearchParams(data);

            var username = params.get('username');
            var password = params.get('password');

            var dataToSend = {
                username: username,
                password: password
            };
            // console.log(dataToSend);

            $.ajax({
                url: 'http://localhost/web-ic/public/Login/session',
                data: {data: dataToSend},
                method: 'post',
                dataType: 'json',
                success: function(data, textStatus, jqXHR) {
                    console.log(data);
                    if (data.status === 'success') {
                        // $('#successRegistration').modal('show');
                        window.location.href = "http://localhost/web-ic/public/Dashboard";
                    } else {
                        $('#errorLogin .modal-body').text(data.message);
                        $('#errorLogin').modal('show');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#errorLogin .modal-body').text('Terjadi kesalahan: ' + errorThrown);
                    $('#errorLogin').modal('show');
                }
            });
        });


        // update user

            // Add User
    // $('#updateProfile').on('submit', function(e) {
    //     e.preventDefault();
    //     let data = $(this).serialize();
    //     $('#errorRegistration').modal('hide');

    //     $.ajax({
    //         url: 'http://localhost/web-ic/public/User/editProfile',
    //         data: data,
    //         method: 'post',
    //         dataType: 'json',
    //         success: function(data, textStatus, jqXHR) {
    //             console.log(data);
    //             if (data.status === 'success') {
    //                 $('#successRegistration').modal('show');
    //             } else {
    //                 $('#errorRegistration .modal-body').text(data.message);
    //                 $('#errorRegistration').modal('show');
    //             }
    //         },
    //         error: function(jqXHR, textStatus, errorThrown) {
    //             $('#errorRegistration .modal-body').text('Terjadi kesalahan: ' + errorThrown);
    //             $('#errorRegistration').modal('show');
    //         }
    //     });
    // });

    $('#updateProfile').on('submit', function(e) {
        e.preventDefault();
        let data = new FormData(this); // Menggunakan FormData untuk menangani file upload jika ada
        $('#errorUpdateProfile').modal('hide'); // Menyembunyikan modal kesalahan sebelumnya

        // console.log(data);
        for (let [key, value] of data.entries()) {
            console.log(`${key}:`, value);
        }
    
        $.ajax({
            url: 'http://localhost/web-ic/public/User/editProfile',
            data: data,
            method: 'post',
            processData: false, // Penting untuk FormData
            contentType: false, // Penting untuk FormData
            // dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.status === 'success') {
                    // Tindakan jika berhasil
                    $('#successUpdate').modal('show');
                } else {
                    // Tindakan jika ada kesalahan dari server
                    // $('#errorUpdateProfile').text(response.message || 'Terjadi kesalahan saat memperbarui profil.');
                    $('#errorUpdateProfile').modal('show');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Menampilkan pesan error jika terjadi kesalahan
                $('#errorUpdateProfile').text('Terjadi kesalahan: ' + errorThrown);
                $('#errorUpdateProfile').modal('show');
            }
        });
    });
    

});