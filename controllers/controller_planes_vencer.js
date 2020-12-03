VENCER = async () => {

  
    let datos = await fetch('http://localhost/webHosting/models/model_planes_vencer.php');
    datos = await datos.json();
    keys=Object.keys(datos);
    values=Object.values(datos);
    VENCER_DASHBOARD(keys,values);
  
  };

  VENCER_DASHBOARD=async(labels,values)=>{

    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: '# of Votes',
                data: values,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}
