@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <!-- Dashboard Header with Key Metrics -->
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Total Donations</h5>
                        <p class="card-text">KES {{ number_format($totalDonations, 2) }}</p> <!-- Display total donations -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-info mb-3 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Total Donors</h5>
                        <p class="card-text">{{ $totalDonors }} Donors</p> <!-- Display total donors -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Successful Donations</h5>
                        <p class="card-text">{{ $successfulDonations }} Transactions</p> <!-- Display successful donations -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Pending Donations</h5>
                        <p class="card-text">{{ $pendingDonations }} Transactions</p> <!-- Display pending donations -->
                    </div>
                </div>
            </div>
        </div>
         <!-- Donations  piechart -->
         <!-- Pie Chart Section -->
        <div class="row mt-5">
            <div class="col-md-6">
                <h4>Donations Breakdown</h4>
                <canvas id="donationPieChart"></canvas> <!-- Chart container -->
            </div>
        </div>
        </div>
        <!-- Donations Table -->
        <h4>Donations List</h4>
        <div class="table-responsive">
            <table class="table table-striped table-hover shadow-sm bg-white rounded">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Donor Name</th>
                        <th scope="col">Amount Donated</th>
                        <th scope="col">Status</th>
                        <th scope="col">Donor Email</th>
                        <th scope="col">Donor Phone Number</th>
                        <th scope="col">Donor Donation Schedule</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($donations as $donation)
                    <tr>
                        <th scope="row">{{$donation->id}}</th>
                        <td>{{$donation->donors_name}}</td>
                        <td>KES {{$donation->amount}}</td>
                        <td>
                            <span class="badge @if($donation->status == 'paid') bg-success @else bg-warning @endif">
                                {{$donation->status}}
                            </span>
                        </td>
                        <td>{{$donation->donors_email}}</td>
                        <td>{{$donation->donor_phone_number}}</td>
                        <td>{{$donation->period_of_payment}}</td>
                        <td>{{$donation->created_at->diffForHumans()}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- Include Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var ctx = document.getElementById('donationPieChart').getContext('2d');
        var donationPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Total Donations (KES)', 'Total Donors', 'Successful Donations', 'Pending Donations'],
                datasets: [{
                    data: [1500000, 120, 100, 20], // Hardcoded data for each metric
                    backgroundColor: [
                        '#007bff',  // Blue (Total Donations)
                        '#17a2b8',  // Info color (Total Donors)
                        '#28a745',  // Green (Successful Donations)
                        '#ffc107'   // Yellow (Pending Donations)
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom', // Position of the chart legend
                    }
                }
            }
        });
    </script>
@endsection