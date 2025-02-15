<!-- <div class="sidebar">
        <div class="p-3">
            <h5><i class="bi bi-arrow-left me-2"></i> Keluar</h5>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="<?= BASEURL; ?>/Dashboard">
                    <i class="bi bi-grid me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/Pengarsipan">
                    <i class="bi bi-archive me-2"></i> Pengarsipan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/Document">
                    <i class="bi bi-plus-circle me-2"></i> Tambah
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/User">
                    <i class="bi bi-person me-2"></i> Profil
                </a>
            </li>
        </ul>
    </div> -->

    <?php
// Get user role from session
$userRole = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : 'ADMIN';
?>

<div class="sidebar">
    <div class="p-3">
        <a href="<?= BASEURL ?>/logout" class="text-white text-decoration-none">
            <h5><i class="bi bi-arrow-left me-2"></i> Keluar</h5>
        </a>
    </div>
    <ul class="nav flex-column">
        <!-- Dashboard - Visible to all roles -->
        <li class="nav-item">
            <a class="nav-link <?= $data['page'] === 'dashboard' ? 'active' : ''; ?>" href="<?= BASEURL ?>/Dashboard">
                <i class="bi bi-grid me-2"></i> Dashboard
            </a>
        </li>

        <?php if ($userRole === 'ADMIN'): ?>
            <!-- Admin Menu Items -->
            <li class="nav-item">
                <a class="nav-link <?= $data['page'] === 'pengarsipan' ? 'active' : ''; ?>" href="<?= BASEURL ?>/Pengarsipan">
                    <i class="bi bi-archive me-2"></i> Pengarsipan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $data['page'] === 'tambah' ? 'active' : ''; ?>" href="<?= BASEURL ?>/Document">
                    <i class="bi bi-plus-circle me-2"></i> Tambah
                </a>
            </li>
        <?php endif; ?>

        <?php if ($userRole === 'KASI'): ?>
            <!-- Super Admin Menu Items -->
            <li class="nav-item">
                <a class="nav-link <?= $data['page'] === 'verifikasi' ? 'active' : ''; ?>" href="<?= BASEURL ?>/Verification">
                    <i class="bi bi-check-circle me-2"></i> Verifikasi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $data['page'] === 'data-arsip' ? 'active' : ''; ?>" href="#">
                    <i class="bi bi-check-circle me-2"></i> Data Arsip
                </a>
            </li>
        <?php endif; ?>

        <!-- Profile - Visible to all roles -->
        <li class="nav-item">
            <a class="nav-link <?= $data['page'] === 'profile' ? 'active' : ''; ?>" href="<?= BASEURL ?>/User">
                <i class="bi bi-person me-2"></i> Profil
            </a>
        </li>
    </ul>
</div>