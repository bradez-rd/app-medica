<?php
$title = "MediCitas - Panel Administrativo";
$moduleName = "Dashboard General";
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>
<div class="main-content">
<?php require_once 'includes/navbar.php'; ?>

<div class="container-fluid p-4">
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card stat-card p-3 bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small text-uppercase fw-bold">Pacientes</span>
                        <h3 class="fw-bold my-1">1,248</h3>
                        <span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> +12% este mes</span>
                    </div>
                    <div class="stat-icon bg-primary-subtle text-primary">
                        <i class="bi bi-people-fill"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card stat-card p-3 bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small text-uppercase fw-bold">Citas de Hoy</span>
                        <h3 class="fw-bold my-1">34</h3>
                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-clock-history"></i> 8 pendientes</span>
                    </div>
                    <div class="stat-icon bg-warning-subtle text-warning">
                        <i class="bi bi-calendar-check-fill"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card stat-card p-3 bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small text-uppercase fw-bold">Doctores Activos</span>
                        <h3 class="fw-bold my-1">18</h3>
                        <span class="badge bg-info-subtle text-info"><i class="bi bi-check2"></i> 6 en turno</span>
                    </div>
                    <div class="stat-icon bg-info-subtle text-info">
                        <i class="bi bi-person-badge-fill"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card stat-card p-3 bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small text-uppercase fw-bold">Historiales</span>
                        <h3 class="fw-bold my-1">3,490</h3>
                        <span class="badge bg-primary-subtle text-primary"><i class="bi bi-folder-check"></i> Al día</span>
                    </div>
                    <div class="stat-icon bg-success-subtle text-success">
                        <i class="bi bi-clipboard2-pulse-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-lg-8">
            <div class="card table-card p-4 bg-white">
                <h5 class="fw-bold mb-3"><i class="bi bi-bar-chart-line-fill text-primary me-2"></i>Citas Médicas Mensuales (2026)</h5>
                <canvas id="citasChart" height="130"></canvas>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card table-card p-4 bg-white h-100">
                <h5 class="fw-bold mb-3"><i class="bi bi-lightning-charge-fill text-warning me-2"></i>Acciones Rápidas</h5>
                <div class="d-grid gap-2">
                    <a href="agendar-cita.php" class="btn btn-outline-primary text-start p-3">
                        <i class="bi bi-calendar-plus me-2"></i><strong>Agendar Nueva Cita</strong>
                        <div class="small text-muted">Programar paciente con especialista</div>
                    </a>
                    <a href="pacientes.php" class="btn btn-outline-info text-start p-3">
                        <i class="bi bi-person-plus me-2"></i><strong>Registrar Paciente</strong>
                        <div class="small text-muted">Añadir ficha al sistema</div>
                    </a>
                    <a href="historial-clinico.php" class="btn btn-outline-secondary text-start p-3">
                        <i class="bi bi-file-earmark-medical me-2"></i><strong>Consultar Historial</strong>
                        <div class="small text-muted">Ver antecedentes y diagnósticos</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card table-card bg-white p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="fw-bold mb-0"><i class="bi bi-clock-history text-primary me-2"></i>Próximas Citas Médicas</h5>
            <a href="agendar-cita.php" class="btn btn-sm btn-outline-primary">Ver todas</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Hora</th>
                        <th>Paciente</th>
                        <th>Doctor</th>
                        <th>Especialidad</th>
                        <th>Estado</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>09:00 AM</strong></td>
                        <td>María Altagracia González</td>
                        <td>Dr. Alejandro Ramos</td>
                        <td>Cardiología</td>
                        <td><span class="badge bg-success">Confirmada</span></td>
                        <td><a href="historial-clinico.php" class="btn btn-sm btn-light border"><i class="bi bi-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td><strong>10:15 AM</strong></td>
                        <td>Carlos Manuel Rodríguez</td>
                        <td>Dra. Elena Santos</td>
                        <td>Pediatría</td>
                        <td><span class="badge bg-warning text-dark">Pendiente</span></td>
                        <td><a href="historial-clinico.php" class="btn btn-sm btn-light border"><i class="bi bi-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td><strong>11:30 AM</strong></td>
                        <td>Lucía Fernández Peña</td>
                        <td>Dr. Roberto Morales</td>
                        <td>Neurología</td>
                        <td><span class="badge bg-info">En Espera</span></td>
                        <td><a href="historial-clinico.php" class="btn btn-sm btn-light border"><i class="bi bi-eye"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const ctx = document.getElementById('citasChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov'],
            datasets: [{
                label: 'Citas Atendidas',
                data: [140, 190, 220, 260, 310, 340, 390, 420, 470, 510, 560],
                backgroundColor: 'rgba(2, 132, 199, 0.1)',
                borderColor: '#0284c7',
                borderWidth: 2,
                fill: true,
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } }
        }
    });
});
</script>
<?php require_once 'includes/footer.php'; ?>
