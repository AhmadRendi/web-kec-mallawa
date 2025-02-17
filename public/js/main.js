$( function () {

    $('.tampilModalUpdate').on('click', function () {
        const id = $(this).data('id');
        console.log(id);
        $.ajax({
            url: 'http://localhost/web-ic/public/Pengarsipan/getDocument',
            data: {id : id},
            method: 'post',
            // dataType: 'json',
            success: function (data) {
                console.log(data.jenis);

                $('#editNomorSurat').val(data.nmr_surat);
                $('#editTanggal').val(data.date);
                $('#editJenis').val(data.jenis);
                $('#editKategori').val(data.kategory);
                $('#editPengirim').val(data.pengirim);
                $('#editPenerima').val(data.penerima);
                $('#editDokumen').val(data.document);

                // $('#editModal').modal('show');
            }
        });
    });

    // $('#editForm').on('submit', function(e) {

    //     e.preventDefault();

    //     $.ajax({
    //         type: 'POST',
    //         url: $(this).attr('action'),
    //         data: new FormData(this),
    //         contentType: false,
    //         processData: false,
    //         success: function(response) {
    //             console.log(response);
    //             $('#editModal').modal('hide');
    //         },
    //         error: function(xhr, status, error) {
    //             console.error('Terjadi kesalahan:', error);
    //         }
    //     });
    // });

    // edit Document
    $('#editForms').on('submit', function(e){
            e.preventDefault();
            let data = new FormData(this);
    
            for (let [key, value] of data.entries()) {
                console.log(`${key}:`, value);
            }
    
            $.ajax({
                url: 'http://localhost/web-ic/public/Pengarsipan/updateData',
                data: data,
                method: 'post',
                processData: false, // Penting untuk FormData
                contentType: false,
                // dataType: 'json',
                success: function(data) {
                    // Pastikan data yang diterima adalah objek JSON
                    console.log(data);
                    if (data.status === 'success') {
                        $('#successUpload').modal('show');
                    } else {
                        $('#failedUpload .modal-body').text(data.message);
                        $('#failedUpload').modal('show');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#failedUpload .modal-body').text('Terjadi kesalahan: ' + errorThrown);
                    $('#failedUpload').modal('show');
                }
            });
    });

    // Download Document
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

    // delete document
    let idDocumentForDelete;

    $('[data-bs-target="#deleteModal"]').on('click', function() {
        idDocumentForDelete = $(this).data('id');
    });

    $('#deleteModal').on('click', function() {
        $.ajax({
            url: 'http://localhost/web-ic/public/Pengarsipan/delete',
            data: {id : idDocumentForDelete},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
            }
        });
        $('#deleteModal').modal('hide');
        location.reload();
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
    $('#updateProfile').on('submit', function(e) {
        e.preventDefault();
        let data = new FormData(this); 
        $('#errorUpdateProfile').modal('hide');
    
        $.ajax({
            url: 'http://localhost/web-ic/public/User/editProfile',
            data: data,
            method: 'post',
            processData: false, // Penting untuk FormData
            contentType: false, // Penting untuk FormData
            // dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    var myModal = new bootstrap.Modal(document.getElementById('successUpdate'));
                    myModal.show();
                } else {
                    $('#error-message').text(response.message || 'Terjadi kesalahan saat memperbarui profil.');
                    var myModal = new bootstrap.Modal(document.getElementById('errorUpdateProfile'));
                    myModal.show();
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $('#error-message').text('Terjadi kesalahan: ' + errorThrown);
                var myModal = new bootstrap.Modal(document.getElementById('errorUpdateProfile'));
                myModal.show();
            }
        });
    });
    // Event listener untuk reload halaman setelah modal ditutup
    var successModal = document.getElementById('successUpdate');
    successModal.addEventListener('hidden.bs.modal', function () {
        location.reload(); // Reload halaman
    });

    var errorModal = document.getElementById('errorUpdateProfile');
    errorModal.addEventListener('hidden.bs.modal', function () {
        location.reload(); // Reload halaman
    });
});