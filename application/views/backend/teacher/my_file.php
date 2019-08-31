<hr />
<div class="row">
    <div class="col-md-12">

        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#study" data-toggle="tab"><i class="entypo-menu"></i>
                    <?php echo get_phrase('study_material'); ?>
                </a>
            </li>
            <li>
                <a href="#prota" data-toggle="tab"><i class="entypo-menu"></i>
                    <?php echo get_phrase('prota'); ?>
                </a>
            </li>
            <li>
                <a href="#prosem" data-toggle="tab"><i class="entypo-menu"></i>
                    <?php echo get_phrase('prosem'); ?>
                </a>
            </li>
            <li>
                <a href="#silabus" data-toggle="tab"><i class="entypo-menu"></i>
                    <?php echo get_phrase('silabus'); ?>
                </a>
            </li>
            <li>
                <a href="#rpp" data-toggle="tab"><i class="entypo-menu"></i>
                    <?php echo get_phrase('RPP'); ?>
                </a>
            </li>
            <li>
                <a href="#kikd" data-toggle="tab"><i class="entypo-menu"></i>
                    <?php echo get_phrase('KIKD'); ?>
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>


        <div class="tab-content">
            <br>

            <div class="tab-pane box" id="study">
                <div class="box-content">
                <table class="table table-bordered" id="table_export">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo get_phrase('date');?></th>
                            <th><?php echo get_phrase('title');?></th>
                            <th><?php echo get_phrase('description');?></th>
                            <th><?php echo get_phrase('class');?></th>
                            <th><?php echo get_phrase('subject');?></th>
                            <th><?php echo get_phrase('download');?></th>
                            <th><?php echo get_phrase('options');?></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $count = 1;
                        foreach ($study_material_info as $row) { ?>   
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo date("d M, Y", $row['timestamp']); ?></td>
                                <td><?php echo $row['title']?></td>
                                <td><?php echo $row['description']?></td>
                                <td>
                                    <?php $name = $this->db->get_where('class' , array('class_id' => $row['class_id'] ))->row()->name;
                                        echo $name;?>
                                </td>
                                <td>
                                    <?php $name = $this->db->get_where('subject' , array('subject_id' => $row['subject_id'] ))->row()->name;
                                        echo $name;?>
                                </td>
                                <td>
                                    <a href="<?php echo 'http://portal.almazayaislamicschool.sch.id/uploads/document/'.$row['file_name']; ?>" class="btn btn-blue btn-icon icon-left">
                                        <i class="entypo-download"></i>
                                        <?php echo get_phrase('download');?>
                                    </a>
                                </td>
                                <td>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
            
            <div class="tab-pane box active" id="prota">
                <div class="row">

                    <div class="col-md-12">
                        <table class="table table-bordered datatable" id="prota_table">
                            <thead>
                                <tr>
                                    <th width="40"><div><?php echo get_phrase('#');?></div></th>
                                    <th><div><?php echo get_phrase('subject');?></div></th>
                                    <th><div><?php echo get_phrase('class');?></div></th>
                                    <th><div><?php echo get_phrase('section');?></div></th>
                                    <th><div><?php echo get_phrase('file');?></div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach ($teaching_planning as $j):
                                ?>
                                <tr>
                                    <td><?=$no++;?></td>
                                    <td><?=$this->db->get_where('subject',array('subject_id' => $j['subject_id']))->row()->name;?></td>
                                    <td><?=$this->db->get_where('class',array('class_id' => $j['class_id']))->row()->name;?></td>
                                    <td><?=$this->db->get_where('section',array('section_id' => $j['section_id']))->row()->name;?></td>
                                    <td><?=$j['prota'];?>
                                    <!-- <a href="<?=site_url('teacher/journal_view/'.$j['subject_id']);?>" class="btn btn-primary">
                                        <i class="entypo-plus-circled"></i>
                                        <?php echo get_phrase('view_journal');?>
                                    </a> -->
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


            <!----CREATION FORM STARTS---->
            <div class="tab-pane box" id="prosem">
                <div class="box-content">
                    <table class="table table-bordered datatable" id="prosem_table">
                        <thead>
                            <tr>
                                <th width="40"><div><?php echo get_phrase('#');?></div></th>
                                <th><div><?php echo get_phrase('subject');?></div></th>
                                <th><div><?php echo get_phrase('class');?></div></th>
                                <th><div><?php echo get_phrase('section');?></div></th>
                                <th><div><?php echo get_phrase('file');?></div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($teaching_planning as $j):
                            ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$this->db->get_where('subject',array('subject_id' => $j['subject_id']))->row()->name;?></td>
                                <td><?=$this->db->get_where('class',array('class_id' => $j['class_id']))->row()->name;?></td>
                                <td><?=$this->db->get_where('section',array('section_id' => $j['section_id']))->row()->name;?></td>
                                <td><?=$j['prosem'];?>
                                <!-- <a href="<?=site_url('teacher/journal_view/'.$j['subject_id']);?>" class="btn btn-primary">
                                    <i class="entypo-plus-circled"></i>
                                    <?php echo get_phrase('view_journal');?>
                                </a> -->
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!----CREATION FORM ENDS-->
            <div class="tab-pane box" id="silabus">
                <div class="box-content">
                    <table class="table table-bordered datatable" id="silabus_table">
                        <thead>
                            <tr>
                                <th width="40"><div><?php echo get_phrase('#');?></div></th>
                                <th><div><?php echo get_phrase('subject');?></div></th>
                                <th><div><?php echo get_phrase('class');?></div></th>
                                <th><div><?php echo get_phrase('section');?></div></th>
                                <th><div><?php echo get_phrase('file');?></div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($teaching_planning as $j):
                            ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$this->db->get_where('subject',array('subject_id' => $j['subject_id']))->row()->name;?></td>
                                <td><?=$this->db->get_where('class',array('class_id' => $j['class_id']))->row()->name;?></td>
                                <td><?=$this->db->get_where('section',array('section_id' => $j['section_id']))->row()->name;?></td>
                                <td><?=$j['silabus'];?>
                                <!-- <a href="<?=site_url('teacher/journal_view/'.$j['subject_id']);?>" class="btn btn-primary">
                                    <i class="entypo-plus-circled"></i>
                                    <?php echo get_phrase('view_journal');?>
                                </a> -->
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane box" id="rpp">
                <div class="box-content">
                    <table class="table table-bordered datatable" id="rpp_table">
                        <thead>
                            <tr>
                                <th width="40"><div><?php echo get_phrase('#');?></div></th>
                                <th><div><?php echo get_phrase('subject');?></div></th>
                                <th><div><?php echo get_phrase('class');?></div></th>
                                <th><div><?php echo get_phrase('section');?></div></th>
                                <th><div><?php echo get_phrase('file');?></div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($teaching_planning as $j):
                            ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$this->db->get_where('subject',array('subject_id' => $j['subject_id']))->row()->name;?></td>
                                <td><?=$this->db->get_where('class',array('class_id' => $j['class_id']))->row()->name;?></td>
                                <td><?=$this->db->get_where('section',array('section_id' => $j['section_id']))->row()->name;?></td>
                                <td><?=$j['rpp'];?>
                                <!-- <a href="<?=site_url('teacher/journal_view/'.$j['subject_id']);?>" class="btn btn-primary">
                                    <i class="entypo-plus-circled"></i>
                                    <?php echo get_phrase('view_journal');?>
                                </a> -->
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane box" id="kikd">
                <div class="box-content">
                    <table class="table table-bordered datatable" id="kikd_table">
                        <thead>
                            <tr>
                                <th width="40"><div><?php echo get_phrase('#');?></div></th>
                                <th><div><?php echo get_phrase('subject');?></div></th>
                                <th><div><?php echo get_phrase('class');?></div></th>
                                <th><div><?php echo get_phrase('section');?></div></th>
                                <th><div><?php echo get_phrase('file');?></div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($teaching_planning as $j):
                            ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$this->db->get_where('subject',array('subject_id' => $j['subject_id']))->row()->name;?></td>
                                <td><?=$this->db->get_where('class',array('class_id' => $j['class_id']))->row()->name;?></td>
                                <td><?=$this->db->get_where('section',array('section_id' => $j['section_id']))->row()->name;?></td>
                                <td><?=$j['kikd'];?>
                                <a href="" class="btn btn-primary">
                                    <i class="entypo-plus-circled"></i>
                                    <?php echo get_phrase('view_journal');?>
                                </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">

    jQuery(document).ready(function($) {
        $('#table_export').DataTable({
        });
    });

    jQuery(document).ready(function($) {
        $('#prota_table').DataTable({
        });
    });

    jQuery(document).ready(function($) {
        $('#prosem_table').DataTable({
        });
    });

    jQuery(document).ready(function($) {
        $('#silabus_table').DataTable({
        });
    });

    jQuery(document).ready(function($) {
        $('#rpp_table').DataTable({
        });
    });

    jQuery(document).ready(function($) {
        $('#kikd_table').DataTable({
        });
    });

</script>