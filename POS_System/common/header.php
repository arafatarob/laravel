<header class="header">
    <div class="page-title">
        <h2 style="font-size: 1.2rem;"><?php echo isset($page_title) ? $page_title : 'Overview Dashboard'; ?></h2>
    </div>
    <div style="display: flex; align-items: center; gap: 20px;">
        <div class="user-profile">
            <div class="user-avatar"><?php echo strtoupper(substr($user_name, 0, 1)); ?></div>
            <div>
                <p style="font-weight: 600; font-size: 0.9rem;"><?php echo htmlspecialchars($user_name); ?></p>
                <p style="font-size: 0.75rem; color: var(--text-muted);"><?php echo ucfirst($user_role); ?></p>
            </div>
        </div>
        <a href="./authentication/logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</header>