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
            <?= (empty($user['middlename'])) ? "" : ucfirst(h($user['middlename'])).", "; ?>
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
            <?php if(isset($user['user_departments'])): ?>
            <li class="sidebar__information-list">
            <label class="sidebar__information-data">Department:</label>
            <span class="sidebar__information-data">
                <?php
                $department = "";
                foreach($user['user_departments'] as $value) {
                    $department.=$value['department']['name'].', ';
                }
                echo rtrim($department, ', ');
                ?>
            </span>
            </li>
            <?php endif; ?>
        </ul>
        </div>
    </div>
    </aside>
