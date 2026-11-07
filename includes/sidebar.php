<div id="sidebar" class="d-flex flex-column flex-shrink-0 p-3 text-white">
    <a href="index.php" class="d-flex align-items-center mb-4 mb-md-0 me-md-auto text-white text-decoration-none px-2 py-3">
        <i class="bi bi-hospital fs-2 text-info me-2"></i>
        <span class="fs-4 fw-bold">MediCitas</span>
    </a>
    <hr class="border-secondary my-3">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="index.php" class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">
                <i class="bi bi-grid-1x2-fill"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="pacientes.php" class="nav-link <?php echo ($currentPage == 'pacientes.php') ? 'active' : ''; ?>">
                <i class="bi bi-people-fill"></i> Pacientes
            </a>
        </li>
        <li>
            <a href="doctores.php" class="nav-link <?php echo ($currentPage == 'doctores.php') ? 'active' : ''; ?>">
                <i class="bi bi-person-badge-fill"></i> Doctores
            </a>
        </li>
        <li>
            <a href="agendar-cita.php" class="nav-link <?php echo ($currentPage == 'agendar-cita.php') ? 'active' : ''; ?>">
                <i class="bi bi-calendar-plus-fill"></i> Agendar Cita
            </a>
        </li>
        <li>
            <a href="historial-clinico.php" class="nav-link <?php echo ($currentPage == 'historial-clinico.php') ? 'active' : ''; ?>">
                <i class="bi bi-clipboard2-pulse-fill"></i> Historial Clínico
            </a>
        </li>
    </ul>
    <hr class="border-secondary">
    <div class="px-2 small text-secondary">
        <div><strong>MediCitas Cloud v1.0</strong></div>
        <span>Servidor Remoto Activo</span>
    </div>
</div>
