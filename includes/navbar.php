<nav class="topbar d-flex align-items-center justify-content-between px-4 sticky-top">
    <div class="d-flex align-items-center">
        <span class="fs-5 fw-semibold text-dark"><?php echo isset($moduleName) ? $moduleName : "Panel Administrativo"; ?></span>
    </div>
    <div class="d-flex align-items-center gap-3">
        <a href="agendar-cita.php" class="btn btn-sm btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Nueva Cita
        </a>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                <i class="bi bi-person-circle fs-4 text-primary me-2"></i>
                <span class="fw-semibold small">Dr. Administrador</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow">
                <li><a class="dropdown-item" href="index.php"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
                <li><a class="dropdown-item" href="pacientes.php"><i class="bi bi-person me-2"></i>Pacientes</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><span class="dropdown-item-text text-muted small">MediCitas v1.0</span></li>
            </ul>
        </div>
    </div>
</nav>
