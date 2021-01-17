var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['april', 'mei', 'juni', 'juli','agustus','september','oktober','november','desember','januari',],
        datasets: [{
            label: 'Statistik Kasus Covid di Indonesia',
            data: [1.395,12.071,56.385,104.432,144.945,207.203,328.592,459.241,623.309,846.765],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',

            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});