<?php
$title = "MediCitas - Agendar Cita";
$moduleName = "Agendar Cita Médica";
require_once 'includes/header.php';
require_once 'includes/sidebar.php';

$mensaje = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mensaje = true;
}
?>
<div class="main-content">
<?php require_once 'includes/navbar.php'; ?>

<div class="container-fluid p-4">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card table-card bg-white p-4 p-md-5">
                <div class="text-center mb-4">
                    <i class="bi bi-calendar2-plus-fill fs-1 text-primary"></i>
                    <h3 class="fw-bold mt-2">Programación de Citas Médicas</h3>
                    <p class="text-muted">Complete los datos requeridos para registrar una cita en MediCitas.</p>
                </div>

                <?php if ($mensaje): ?>
                    <div class="alert alert-success d-flex align-items-center mb-4" role="alert">
                        <i class="bi bi-check-circle-fill me-2 fs-4"></i>
                        <div>
                            <strong>¡Cita agendada con éxito!</strong> El sistema generó la reservación en el servidor remoto de MediCitas.
                        </div>
                    </div>
                <?php endif; ?>

                <form method="POST" action="agendar-cita.php">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Seleccionar Paciente</label>
                            <select name="paciente" class="form-select" required>
                                <option value="">-- Seleccione un paciente --</option>
                                <option>María Altagracia González (402-2819231-1)</option>
                                <option>Carlos Manuel Rodríguez (001-1928472-3)</option>
                                <option>Lucía Fernández Peña (402-9847261-8)</option>
                                <option>José Ramón Castillo (001-8374621-5)</option>
                            </select>
                            <div class="form-text">¿No está registrado? <a href="pacientes.php">Crear paciente</a></div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Especialista / Doctor</label>
                            <select name="doctor" class="form-select" required>
                                <option value="">-- Seleccione un doctor --</option>
                                <option>Dr. Alejandro Ramos (Cardiología)</option>
                                <option>Dra. Elena Santos (Pediatría)</option>
                                <option>Dr. Roberto Morales (Neurología)</option>
                                <option>Dra. Carolina Ruiz (Medicina General)</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Fecha de la Consulta</label>
                            <input type="date" name="fecha" class="form-control" required value="<?php echo date('Y-m-d'); ?>">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Horario Disponible</label>
                            <select name="hora" class="form-select" required>
                                <option>08:30 AM</option>
                                <option>09:30 AM</option>
                                <option>10:30 AM</option>
                                <option>02:00 PM</option>
                                <option>03:30 PM</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Motivo de la Consulta</label>
                            <textarea name="motivo" rows="3" class="form-control" required placeholder="Describa el motivo o síntomas principales..."></textarea>
                        </div>

                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
                                <i class="bi bi-check2-circle me-1"></i> Confirmar y Guardar Cita
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once 'includes/footer.php'; ?>
