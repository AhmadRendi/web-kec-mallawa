$(function () {
    // Verify Document
    let idDocumentForVerification;

    $('[data-bs-target="#successVerification"]').on('click', function() {
        idDocumentForVerification = $(this).data('id');
    });

    $('#confirmVerification').on('click', function() {
        console.log(idDocumentForVerification);
        $.ajax({
            url: 'http://localhost/web-ic/public/Verification/verification',
            data: {id : idDocumentForVerification},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
            }
        });
        $('#successVerification').modal('hide');
    });

    // cancel verification
    let idDocumentForCancelVerification;

    $('[data-bs-target="#btlVerification"]').on('click', function() {
        idDocumentForCancelVerification = $(this).data('id');
    });

    $('#cancelVerification').on('click', function() {
        // console.log("masuk ke sini");
        // console.log(idDocumentForCancelVerification);
        $.ajax({
            url: 'http://localhost/web-ic/public/Verification/cancelVariation',
            data: {id : idDocumentForCancelVerification},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
            }
        });
        $('#btlVerification').modal('hide');
    });

    new DataTable('#data_table', {
        paging: true,
        scrollCollapse: true,
        scrollY: '400px'
    });


    // Add User
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
                    $('#form_registration')[0].reset(); 
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
    

    // upload Document
    $('#uploadDocument').on('submit', function(e){
        e.preventDefault();
        let data = new FormData(this);

        for (let [key, value] of data.entries()) {
            console.log(`${key}:`, value);
        }

        $.ajax({
            url: 'http://localhost/web-ic/public/Document/addDocument',
            data: data,
            method: 'post',
            processData: false,
            contentType: false,
            // dataType: 'json',
            success: function(data) {
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

    $('#successUpload').on('hidden.bs.modal', function () {
        location.reload(); // Refresh halaman
    });

});

// Chart Dahsboard Document
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('documentChart').getContext('2d');

    $.ajax({
        url: 'http://localhost/web-ic/public/Dashboard/getDataChart',
        method: 'get',
        dataType: 'json',
        success: function (data) {
            console.log("hello");
            console.log(data);
            const config = {
                type: 'line',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 70,
                            ticks: {
                                stepSize: 10
                            },
                            grid: {
                                color: '#e0e0e0'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                padding: 20
                            }
                        }
                    },
                    elements: {
                        point: {
                            radius: 0
                        },
                        line: {
                            borderWidth: 2
                        }
                    }
                }
            };
            new Chart(ctx, config);
        }
    });
});