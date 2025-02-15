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
            // dataType: 'json',
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
        console.log(idDocumentForCancelVerification);
        $.ajax({
            url: 'http://localhost/web-ic/public/Verification/cancelVariation',
            data: {id : idDocumentForVerification},
            method: 'post',
            // dataType: 'json',
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

});

// File: public/js/chart-script.js

document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('documentChart').getContext('2d');

    $.ajax({
        url: 'http://localhost/web-ic/public/Dashboard/getDataChart',
        method: 'get',
        dataType: 'json',
        success: function (data) {
            // console.log(data);
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
    // const data = {
    //     labels: ['2021', '2022', '2023', '2024'],
    //     datasets: [
    //         {
    //             label: 'Surat Masuk',
    //             data: [65, 62, 48, 45],
    //             borderColor: '#ffd700',
    //             tension: 0.4,
    //             fill: false
    //         },
    //         {
    //             label: 'Surat Keluar',
    //             data: [55, 53, 40, 38],
    //             borderColor: '#ffa500',
    //             tension: 0.4,
    //             fill: false
    //         },
    //         {
    //             label: 'Undangan',
    //             data: [45, 43, 35, 32],
    //             borderColor: '#ff7f50',
    //             tension: 0.4,
    //             fill: false
    //         },
    //         {
    //             label: 'Penting',
    //             data: [35, 33, 25, 22],
    //             borderColor: '#ff6b35',
    //             tension: 0.4,
    //             fill: false
    //         },
    //         {
    //             label: 'Biasa',
    //             data: [25, 23, 15, 12],
    //             borderColor: '#4a90e2',
    //             tension: 0.4,
    //             fill: false
    //         }
    //     ]
    // };

    // const config = {
    //     type: 'line',
    //     data: dataTemp,
    //     options: {
    //         responsive: true,
    //         maintainAspectRatio: false,
    //         scales: {
    //             y: {
    //                 beginAtZero: true,
    //                 max: 70,
    //                 ticks: {
    //                     stepSize: 10
    //                 },
    //                 grid: {
    //                     color: '#e0e0e0'
    //                 }
    //             },
    //             x: {
    //                 grid: {
    //                     display: false
    //                 }
    //             }
    //         },
    //         plugins: {
    //             legend: {
    //                 position: 'bottom',
    //                 labels: {
    //                     usePointStyle: true,
    //                     padding: 20
    //                 }
    //             }
    //         },
    //         elements: {
    //             point: {
    //                 radius: 0
    //             },
    //             line: {
    //                 borderWidth: 2
    //             }
    //         }
    //     }
    // };
    // new Chart(ctx, config);
});