<div class="sidebar-menu">
    <header class="logo-env">

        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url(); ?>uploads/logo.png" style="max-height:60px;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->

        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> " style="border-top: 1px solid #3F3E5F;">
            <a href="<?php echo site_url($account_type.'/dashboard'); ?>">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>

        <!-- JOURNAL -->
        <li class="<?php if ($page_name == 'journal') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/journal'); ?>">
                <i class="entypo-doc-text-inv"></i>
                <span><?php echo get_phrase('journal'); ?></span>
            </a>
        </li>

        <!-- CLASS ROUTINE -->
        <li class="<?php if ($page_name == 'class_routine' ||
            $page_name == 'class_routine_print_view')
            echo 'opened active'; ?> ">
            <a href="#">
                <i class="entypo-target"></i>
                <span><?php echo get_phrase('schedule'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'my_schedule') echo 'active'; ?>">
                    <a href="<?php echo site_url(); ?>">
                        <span><?php echo get_phrase('my_schedule'); ?></span>
                    </a>
                </li>
                <?php
                $classes = $this->db->get('class')->result_array();
                foreach ($classes as $row):
                    ?>
                    <li class="<?php if ($page_name == 'class_routine' && $class_id == $row['class_id']) echo 'active'; ?>">
                        <a href="<?php echo site_url($account_type.'/class_routine/'.$row['class_id']); ?>">
                            <span><?php echo get_phrase('class'); ?><?php echo $row['name']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>

        <!-- FILE -->
        <li class="<?php if ($page_name == 'my_file') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/my_file'); ?>">
                <i class="entypo-doc-text-inv"></i>
                <span><?php echo get_phrase('my_file'); ?></span>
            </a>
        </li>

        <!-- NOTICEBOARD -->
        <li class="<?php if ($page_name == 'noticeboard') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/noticeboard'); ?>">
                <i class="entypo-doc-text-inv"></i>
                <span><?php echo get_phrase('noticeboard'); ?></span>
            </a>
        </li>

        <!-- MESSAGE -->
        <li class="<?php if ($page_name == 'message' || $page_name == 'group_message') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/message'); ?>">
                <i class="entypo-mail"></i>
                <span><?php echo get_phrase('message'); ?></span>
            </a>
        </li>

        <!-- ACCOUNT -->
        <!-- <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo site_url($account_type.'/manage_profile'); ?>">
                <i class="entypo-lock"></i>
                <span><?php echo get_phrase('account'); ?></span>
            </a>
        </li> -->

    </ul>

</div>
