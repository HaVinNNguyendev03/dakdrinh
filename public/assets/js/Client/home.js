
        // Dữ liệu minh họa
        var labels = ["Sản Lượng ngày 21/12", "Mực nước hồ ngày 21/12", "Tổng lưu lượng, xả hạ du", "Sản Lượng tháng 12", "Sản Lượng quý IV", "Sản Lượng năm 2023"];
        var data = [5000, 20000, 10000, 3000, 8000, 15000];

        // Biểu đồ đường
        var lineChart = new Chart(document.getElementById('lineChart').getContext('2d'), {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Dữ liệu',
                    data: data,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Biểu đồ cột
        var barChart = new Chart(document.getElementById('barChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Dữ liệu',
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
