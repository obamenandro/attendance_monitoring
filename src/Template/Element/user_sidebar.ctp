<aside class="sidebar">
    <div class="sidebar__content">
        <div class="sidebar__image">
        <?php if($user['image'] == NULL): ?>
            <img src="/img/user/default_avatar.png" alt="user-image" class="sidebar__user-image">
        <?php else: ?>
            <img src="<?= $user['image']; ?>" alt="user-image" class="sidebar__user-image">
        <?php endif; ?>
        </div>

        <div class="sidebar__name">
        <span class="sidebar__user-name">
            <?= ucfirst(h($user['firstname'])) ?>
            <?= (empty($user['middlename'])) ? "" : ucfirst(h($user['middlename'])).""; ?>
            <?= ucfirst(h($user['lastname'])) ?>
        </span>
        <span class="sidebar__position"><?= !empty($user['position']) ? h($user['position']) : ""; ?></span>
        </div>

        <div class="sidebar__information">
        <ul>
            <li class="sidebar__information-list">
                <label class="sidebar__information-data">Employee ID:</label>
                <span class="sidebar__information-data"><?= $user['id'] ?></span>
            </li>
            <li class="sidebar__information-list">
                <label class="sidebar__information-data">Department:</label>
                <span class="sidebar__information-data"><?= isset($department[$user['department']]) ? $department[$user['department']] : 'N/A' ?></span>
            </li>
            <li class="sidebar__information-list">
                <label class="sidebar__information-data">SSS:</label>
                <span class="sidebar__information-data"><?= !empty($user['sss_number']) ? $user['sss_number'] : 'N/A' ?></span>
            </li>
            <li class="sidebar__information-list">
                <label class="sidebar__information-data">GSIS:</label>
                <span class="sidebar__information-data"><?= !empty($user['gsis_number']) ? $user['gsis_number'] : 'N/A' ?></span>
            </li>
            <li class="sidebar__information-list">
                <label class="sidebar__information-data">TIN:</label>
                <span class="sidebar__information-data"><?= !empty($user['tin_number']) ? $user['tin_number'] : 'N/A' ?></span>
            </li>
            <li class="sidebar__information-list">
                <label class="sidebar__information-data">PHILHEALTH:</label>
                <span class="sidebar__information-data"><?= !empty($user['philhealth_number']) ? $user['philhealth_number'] : 'N/A' ?></span>
            </li>
            <li class="sidebar__information-list">
                <label class="sidebar__information-data">PAGIBIG:</label>
                <span class="sidebar__information-data"><?= !empty($user['pagibig_number']) ? $user['pagibig_number'] : 'N/A' ?></span>
            </li>
        </ul>
        </div>
    </div>
    </aside>
