<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pegawai - {{ $employee['employee_name'] }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5; /* Warna latar belakang yang lebih lembut */
        }
        .profile-card {
            border-radius: 15px;
            border: none;
            transition: all 0.3s ease-in-out;
        }
        .profile-header {
            background: linear-gradient(45deg, #0d6efd, #0dcaf0);
            color: white;
            padding: 2.5rem 1.5rem;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            text-align: center;
        }
        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid white;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: -60px auto 10px auto; /* Tarik avatar ke atas */
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .profile-avatar i {
            font-size: 50px;
            color: #495057;
        }
        .card-body {
            padding: 2rem;
        }
        .section-title {
            font-weight: 600;
            color: #0d6efd;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 8px;
            margin-bottom: 1rem;
        }
        .list-group-item {
            border: none;
            padding: 0.75rem 0;
            display: flex;
            align-items: center;
        }
        .list-group-item i {
            color: #0d6efd;
            margin-right: 15px;
            font-size: 1.2rem;
            width: 25px; /* Lebar ikon konsisten */
            text-align: center;
        }
        .skill-badge {
            font-size: 0.9em;
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card profile-card shadow-lg">
                <div class="profile-header">
                </div>

                <div class="card-body text-center pt-0">
                    <div class="profile-avatar">
                        <i class="bi bi-person-fill"></i> </div>
                    <h2 class="card-title mb-0">{{ $employee['employee_name'] }}</h2>
                    <p class="text-muted">{{ $employee['position'] }}</p>
                </div>

                <hr class="my-0">

                <div class="card-body">

                    <h5 class="section-title"><i class="bi bi-person-lines-fill"></i> Detail Pribadi</h5>
                    <div class="list-group list-group-flush mb-4">
                        <div class="list-group-item">
                            <i class="bi bi-cake2"></i>
                            <strong>Usia:</strong><span class="ms-auto">{{ $employee['age'] }} tahun</span>
                        </div>
                        <div class="list-group-item">
                            <i class="bi bi-calendar-check"></i>
                            <strong>Mulai Bekerja:</strong><span class="ms-auto">{{ $employee['join_date'] }}</span>
                        </div>
                        <div class="list-group-item">
                            <i class="bi bi-hourglass-split"></i>
                            {{-- Membulatkan angka agar lebih rapi --}}
                            <strong>Lama Bekerja:</strong><span class="ms-auto">{{ round($employee['working_duration']) }} hari</span>
                        </div>
                    </div>

                    <h5 class="section-title"><i class="bi bi-tools"></i> Keahlian</h5>
                    <div class="mb-4">
                        @foreach($employee['skills'] as $skill)
                            <span class="badge rounded-pill text-bg-primary me-1 mb-1 p-2 skill-badge">{{ $skill }}</span>
                        @endforeach
                    </div>

                    <h5 class="section-title"><i class="bi bi-briefcase-fill"></i> Karir & Finansial</h5>
                    <div class="list-group list-group-flush">
                         <div class="list-group-item">
                            <i class="bi bi-cash-coin"></i>
                            <strong>Gaji Bulanan:</strong><span class="ms-auto">Rp {{ number_format($employee['salary'], 0, ',', '.') }}</span>
                        </div>
                        <div class="list-group-item">
                            <i class="bi bi-bar-chart-line"></i>
                            <strong>Status:</strong><span class="ms-auto text-success fw-bold">{{ $employee['status'] }}</span>
                        </div>
                         <div class="list-group-item">
                            <i class="bi bi-rocket-takeoff"></i>
                            <strong>Cita-cita Karir:</strong><span class="ms-auto text-end">{{ $employee['career_goal'] }}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
