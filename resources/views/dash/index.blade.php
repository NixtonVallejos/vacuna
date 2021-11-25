@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>

<divc class="card" id="formHeader">
    <divc class="row" id="formDetail">
        <div class="form-group  col-md-5">
            <canvas id="myChart2" width="400" height="200"></canvas>
        </div>
        <div class="form-group  col-md-6">
            <canvas id="myChart3" width="400" height="200"></canvas>
        </div>
        <div class="form-group  col-md-5">
            <canvas id="myChart1" width="1000" height="200"></canvas>
        </div>
    </div>
</div>

<script>
const ctx = document.getElementById('myChart1');
const myChart1 = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Matagalpa', 'Rio Blanco', 'Esquipulas ', 'Matiguas', 'Muy Muy'],
        datasets: [{
            label: '# Ciudades',
            data: [20, 15, 27, 8, 2, 10],
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
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const ctx1 = document.getElementById('myChart2');
const myChart2 = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['10...20', '21...39', 'mayores de 40'],
        datasets: [{
            label: '# Edades',
            data: [10, 13, 22, 5],
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
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const ctx2 = document.getElementById('myChart3');
const myChart3 = new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ['Astraseneca', 'Sputnik', 'Moderna', 'Phaser', 'Sputnik-lite'],
        datasets: [{
            label: '# Vacunas',
            data: [20, 9, 2, 8, 11],
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
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop