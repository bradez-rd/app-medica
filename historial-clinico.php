<?php
$title = "MediCitas - Historial Clínico";
$moduleName = "Historial Clínico de Pacientes";
require_once 'includes/header.php';
require_once 'includes/sidebar.php';

$historiales = [
    [
        'fecha' => '04/11/2026',
        'paciente' => 'María Altagracia González',
        'doctor' => 'Dr. Alejandro Ramos (Cardiología)',
        'diagnostico' => 'Hipertensión arterial estadio 1 controlada.',
        'tratamiento' => 'Losartán 50mg cada 24h, reducción de sodio y control en 3 meses.',
        'estado' => 'Estable'
    ],
    [
        'fecha' => '28/10/2026',
        'paciente' => 'Carlos Manuel Rodríguez',
        'doctor' => 'Dra. Carolina Ruiz (Medicina General)',
        'diagnostico' => 'Faringoamigdalitis aguda.',
        'tratamiento' => 'Amoxicilina 875mg c/12h por 7 días + Ibuprofeno 400mg.',
        'estado' => 'Recuperado'
    ],
    [
        'fecha' => '15/10/2026',
        'paciente' => 'José Ramón Castillo',
        'doctor' => 'Dr. Roberto Morales (Neurología)',
        'diagnostico' => 'Cefalea tensional recurrente.',
        'tratamiento' => 'Miorrelajante y pauta de higiene del sueño.',
        'estado' => 'En Seguimiento'
    ]
];
?>
<div class="main-content">
<?php require_once 'includes/navbar.php'; ?>

<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Registros de Historial Clínico</h4>
            <p class="text-muted small mb-0">Consolidado médico de consultas, diagnósticos y tratamientos prescritos.</p>
        </div>
        <a href="agendar-cita.php" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Nueva Consulta
        </a>
    </div>

    <div class="card table-card bg-white p-4">
        <?php foreach ($historiales as $h): ?>
        <div class="border rounded-3 p-3 mb-3 bg-light-subtle">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div>
                    <span class="badge bg-secondary me-2"><i class="bi bi-calendar3 me-1"></i><?php echo $h['fecha']; ?></span>
                    <strong class="fs-5 text-dark"><?php echo $h['paciente']; ?></strong>
                </div>
                <span class="badge bg-info text-dark"><?php echo $h['estado']; ?></span>
            </div>
            <div class="small text-muted mb-2">
                <i class="bi bi-person-badge me-1"></i><strong>Atendido por:</strong> <?php echo $h['doctor']; ?>
            </div>
            <div class="p-2 bg-white rounded border mb-2">
                <strong>Diagnóstico:</strong> <?php echo $h['diagnostico']; ?>
            </div>
            <div class="small text-secondary">
                <i class="bi bi-capsule me-1 text-primary"></i><strong>Tratamiento:</strong> <?php echo $h['tratamiento']; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require_once 'includes/footer.php'; ?>
