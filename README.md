# MediCitas - Panel Administrativo (Práctica 2 ITLA)
**Asignatura:** Programación Web (TDS-008)  
**Institución:** ITLA - Instituto Tecnológico de Las Américas  

---

## 📌 Contexto del Proyecto
**MediCitas** es un panel de administración profesional (Dashboard) para la gestión integral de citas y registros médicos. Fue adaptado a partir de una plantilla moderna de panel de control y completamente transformado a una arquitectura dinámica en **PHP** para su posterior despliegue en la nube (Replit / CodeSandbox / Cloud Hosting).

---

## 🏥 Modificaciones y Adaptación Temática a "Citas Médicas"
1. **Título del Sistema:** Modificado en todas las vistas a `<title>MediCitas - Panel Administrativo</title>`.
2. **Branding e Identidad:** Logo y encabezado personalizado con el nombre **MediCitas** y el icono médico institucional (`bi-hospital`).
3. **Estructura del Menú Lateral (Sidebar):**
   - 📊 **Dashboard:** `index.php` (Métricas de pacientes, citas de hoy, médicos activos y gráfica de atención).
   - 👥 **Pacientes:** `pacientes.php` (Directorio de pacientes, códigos, cédulas, tipos de sangre y modal de registro).
   - 🩺 **Doctores:** `doctores.php` (Plantilla de especialistas médicos, consultorios y turnos de atención).
   - 📅 **Agendar Cita:** `agendar-cita.php` (Formulario interactivo de reserva médica con confirmación en servidor).
   - 📋 **Historial Clínico:** `historial-clinico.php` (Línea de tiempo de diagnósticos, tratamientos y recetas).
4. **Migración Completa de HTML a PHP:**
   - Todos los archivos cuentan con extensión nativa `.php`.
   - Todos los enlaces internos del menú apuntan a `.php` (`href="pacientes.php"`, `href="doctores.php"`, etc.).
   - Rutas relativas (`assets/css/styles.css`, `assets/js/scripts.js`) garantizando cero errores 404 al desplegar en servidores remotos.

---

## 🚀 Despliegue en la Nube (Replit / CodeSandbox)
El repositorio incluye los archivos de configuración listos para la nube:
- Archivo `.replit` configurado para ejecutar el servidor PHP en puerto `8000` con `0.0.0.0`.
- Archivo `Procfile` para despliegues en PaaS compatibles.

### Pasos para Desplegar en Replit:
1. Ir a [replit.com](https://replit.com) e iniciar sesión.
2. Hacer clic en **Create Repl** y seleccionar **Import from GitHub** pegando la URL de este repositorio.
3. Hacer clic en **Run** (botón verde superior). El servidor iniciará instantáneamente en la nube.

---

## 💻 Ejecución en Entorno Local (Laragon)
1. Colocar el contenido en:
   ```bash
   C:\laragon\www\app-medica
   ```
2. Iniciar Laragon y acceder desde el navegador a:
   ```
   http://localhost/app-medica/index.php
   ```
