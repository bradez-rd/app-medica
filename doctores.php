<?php
$title = "MediCitas - Cuerpo Médico";
$moduleName = "Módulo de Doctores";
require_once 'includes/header.php';
require_once 'includes/sidebar.php';

$doctores = [
    ['nombre' => 'Dr. Alejandro Ramos', 'esp' => 'Cardiología', 'turno' => 'Matutino (8:00 AM - 1:00 PM)', 'consultorio' => 'Consultorio 204', 'estado' => 'En Consulta'],
    ['nombre' => 'Dra. Elena Santos', 'esp' => 'Pediatría', 'turno' => 'Vespertino (2:00 PM - 7:00 PM)', 'consultorio' => 'Consultorio 105', 'estado' => 'Disponible'],
    ['nombre' => 'Dr. Roberto Morales', 'esp' => 'Neurología', 'turno' => 'Matutino (9:00 AM - 2:00 PM)', 'consultorio' => 'Consultorio 301', 'estado' => 'Disponible'],
    ['nombre' => 'Dra. Carolina Ruiz', 'esp' => 'Medicina General', 'turno' => 'Jornada Completa', 'consultorio' => 'Consultorio 101', 'estado' => 'En Guardia'],
    ['nombre' => 'Dr. Fernando Medina', 'esp' => 'Ortopedia y Traumatología', 'turno' => 'Vespertino (1:00 PM - 6:00 PM)', 'consultorio' => 'Consultorio 210', 'estado' => 'Disponible']
];
?>
<div class="main-content">
<?php require_once 'includes/navbar.php'; ?>

<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Cuerpo Médico Especialista</h4>
            <p class="text-muted small mb-0">Especialistas disponibles para asignación de consultas en MediCitas.</p>
        </div>
        <a href="agendar-cita.php" class="btn btn-outline-primary">
            <i class="bi bi-calendar-check me-1"></i> Ver Agenda Médica
        </a>
    </div>

    <div class="row g-4">
        <?php foreach ($doctores as $d): ?>
        <div class="col-md-6 col-xl-4">
            <div class="card table-card bg-white p-4 h-100">
                <div class="d-flex align-items-center mb-3">
                    <div class="stat-icon bg-info-subtle text-info me-3">
                        <i class="bi bi-person-fill-check"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-0"><?php echo $d['nombre']; ?></h5>
                        <span class="badge bg-primary-subtle text-primary fw-semibold"><?php echo $d['esp']; ?></span>
                    </div>
                </div>
                <hr class="my-2">
                <p class="small text-muted mb-1"><i class="bi bi-clock me-2"></i><strong>Turno:</strong> <?php echo $d['turno']; ?></p>
                <p class="small text-muted mb-3"><i class="bi bi-geo-alt me-2"></i><strong>Ubicación:</strong> <?php echo $d['consultorio']; ?></p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                    <span class="badge bg-success"><?php echo $d['estado']; ?></span>
                    <a href="agendar-cita.php" class="btn btn-sm btn-primary">Asignar Cita</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require_once 'includes/footer.php'; ?>
