<?php
$title = "MediCitas - Gestión de Pacientes";
$moduleName = "Módulo de Pacientes";
require_once 'includes/header.php';
require_once 'includes/sidebar.php';

$pacientes = [
    ['id' => 'PAC-001', 'nombre' => 'María Altagracia González', 'cedula' => '402-2819231-1', 'edad' => 38, 'tel' => '809-555-0144', 'sangre' => 'O+', 'estado' => 'Activo'],
    ['id' => 'PAC-002', 'nombre' => 'Carlos Manuel Rodríguez', 'cedula' => '001-1928472-3', 'edad' => 45, 'tel' => '829-555-0182', 'sangre' => 'A+', 'estado' => 'Activo'],
    ['id' => 'PAC-003', 'nombre' => 'Lucía Fernández Peña', 'cedula' => '402-9847261-8', 'edad' => 29, 'tel' => '809-555-0199', 'sangre' => 'B+', 'estado' => 'Activo'],
    ['id' => 'PAC-004', 'nombre' => 'José Ramón Castillo', 'cedula' => '001-8374621-5', 'edad' => 62, 'tel' => '849-555-0120', 'sangre' => 'O-', 'estado' => 'En Tratamiento'],
    ['id' => 'PAC-005', 'nombre' => 'Ana Mercedes Batista', 'cedula' => '402-1726354-9', 'edad' => 24, 'tel' => '809-555-0167', 'sangre' => 'AB+', 'estado' => 'Activo']
];
?>
<div class="main-content">
<?php require_once 'includes/navbar.php'; ?>

<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Directorio de Pacientes</h4>
            <p class="text-muted small mb-0">Listado general de pacientes registrados en el sistema MediCitas.</p>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevoPaciente">
            <i class="bi bi-person-plus-fill me-1"></i> Registrar Paciente
        </button>
    </div>

    <div class="card table-card bg-white p-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Código</th>
                        <th>Nombre Completo</th>
                        <th>Cédula</th>
                        <th>Edad</th>
                        <th>Teléfono</th>
                        <th>Tipo Sangre</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pacientes as $p): ?>
                    <tr>
                        <td><span class="badge bg-light text-dark border"><?php echo $p['id']; ?></span></td>
                        <td><strong><?php echo $p['nombre']; ?></strong></td>
                        <td><?php echo $p['cedula']; ?></td>
                        <td><?php echo $p['edad']; ?> años</td>
                        <td><?php echo $p['tel']; ?></td>
                        <td><span class="badge bg-danger-subtle text-danger fw-bold"><?php echo $p['sangre']; ?></span></td>
                        <td><span class="badge bg-success"><?php echo $p['estado']; ?></span></td>
                        <td>
                            <a href="historial-clinico.php" class="btn btn-sm btn-outline-info me-1" title="Ver Historial"><i class="bi bi-clipboard2-pulse"></i></a>
                            <a href="agendar-cita.php" class="btn btn-sm btn-outline-primary" title="Agendar Cita"><i class="bi bi-calendar-plus"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Registrar Paciente -->
<div class="modal fade" id="modalNuevoPaciente" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title fw-bold"><i class="bi bi-person-plus me-2"></i>Registrar Paciente</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nombre Completo</label>
                        <input type="text" class="form-control" placeholder="Ej. Juan Pérez" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Cédula</label>
                            <input type="text" class="form-control" placeholder="001-0000000-0" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Teléfono</label>
                            <input type="text" class="form-control" placeholder="809-000-0000" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Fecha Nacimiento</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Tipo de Sangre</label>
                            <select class="form-select">
                                <option>O+</option>
                                <option>A+</option>
                                <option>B+</option>
                                <option>AB+</option>
                                <option>O-</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="alert('Paciente registrado exitosamente en el servidor MediCitas.')">Guardar Paciente</button>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
